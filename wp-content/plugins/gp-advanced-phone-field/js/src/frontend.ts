import intlTelInput from 'intl-tel-input';

const $ = window.jQuery!;

interface GPAdvancedPhoneFieldArgs {
	fieldId: number;
	formId: number;
	defaultCountry?: string;
	preferredCountries?: string[];
	countriesAction?: 'all' | 'include' | 'exclude';
	countries?: string[];
}

interface GPAdvancedPhoneField extends GPAdvancedPhoneFieldArgs {}

class GPAdvancedPhoneField implements GPAdvancedPhoneField {
	public $telInput: HTMLInputElement;

	public $hiddenInput?: HTMLInputElement;

	public iti!: intlTelInput.Plugin;

	constructor(args: GPAdvancedPhoneFieldArgs) {
		Object.assign(this, args);

		this.$telInput = document.querySelector<HTMLInputElement>(
			`#input_${this.formId}_${this.fieldId}`
		)!;

		// Do not double-init
		if ($(this.$telInput).closest('.iti').length) {
			return;
		}

		if (!this.$telInput) {
			return;
		}

		/* Save value POSTed to input, so we can preserve it when navigating multi-page forms. */
		const postedValue = $(this.$telInput).val();

		this.disableMask();

		const initialCountry = this.defaultCountry ?? 'auto';

		const intlTelInputOptions: intlTelInput.Options = {
			initialCountry,
			geoIpLookup:
				initialCountry === 'auto' ? this.geoIpLookup : undefined,
			preferredCountries: this.preferredCountries ?? [],
			separateDialCode: true,
			hiddenInput: 'input_' + this.fieldId, // Generate a hidden input that contains the full number including dialing code.
			utilsScript:
				window.GPAPF.pluginUrl +
				'/js/built/gpapf-intl-tel-input-utils.js',
		};

		if (this.countriesAction === 'exclude') {
			intlTelInputOptions.excludeCountries =
				this.countriesAction === 'exclude' ? this.countries : undefined;
		} else if (this.countriesAction === 'include') {
			intlTelInputOptions.onlyCountries =
				this.countriesAction === 'include' ? this.countries : undefined;
		}

		// Change ID and name for current phone field so it conflicts less with hidden field.
		$(this.$telInput)
			.attr('id', `input_${this.formId}_${this.fieldId}_raw`)
			.attr('name', ``);

		/**
		 * Filter the options passed to [intl-tel-input](https://intl-tel-input.com/) during initialization.
		 *
		 * @param {intlTelInput.Options} intlTelInputOptions The intlTelInput options. See https://github.com/jackocnr/intl-tel-input#initialisation-options
		 *                                                   for a full list of the allowed options.
		 * @param {number}               formId              The ID of the current form.
		 * @param {number}               fieldId             The ID of the current field.
		 * @param {GPAdvancedPhoneField} instance            The current instance of GPAdvancedPhoneField.
		 *
		 * @since 1.0.12
		 */
		this.iti = intlTelInput(
			this.$telInput,
			window.gform.applyFilters(
				'gpapf_intltelinput_options',
				intlTelInputOptions,
				this.formId,
				this.fieldId,
				this
			)
		);

		// Prevent Gravity Forms Theme Framework from resetting styles on iti.
		// @ts-ignore
		$(this.iti.countryList)
			.closest('.ginput_container_phone')
			.addClass('gform-theme__no-reset--children');

		// @todo Explore adding RTL support for the Country List. For now, force LTR to avoid RTL weirdness.
		// @ts-ignore
		this.iti.countryList.setAttribute('dir', 'ltr');

		// Add an ID to the hidden field.
		this.$hiddenInput = $(this.$telInput).siblings('[type="hidden"]')[0];

		$(this.$hiddenInput).attr('id', `input_${this.formId}_${this.fieldId}`);

		this.$telInput.addEventListener('keyup', this.formatInputVal);
		this.$telInput.addEventListener('input', this.formatInputVal);

		this.$telInput.addEventListener('keyup', this.updateHiddenInputValue);
		this.$telInput.addEventListener('input', this.updateHiddenInputValue);
		this.$telInput.addEventListener(
			'countrychange',
			this.updateHiddenInputValue
		);

		/* Parent merge tag replacement occurs after Advanced Phone Field has initialized on the frontend. */
		$(this.$hiddenInput)
			.add(this.$telInput)
			.on('gpnfUpdatedFromParentMergeTag', this.formatInputVal);

		/*
		 * Immediately copy value to hidden input to prevent value from being lost on multi-page forms.
		 * We don't use updateHiddenInputValue() as it requires the phone utils and may not be ready yet.
		 */
		if (postedValue) {
			$(this.$hiddenInput).val(postedValue);
		}
	}

	geoIpLookup = (callback: (countryCode: string) => void): void => {
		jQuery
			.get('https://ipinfo.io', function() {}, 'json')
			.always(function(resp) {
				const countryCode = resp && resp.country ? resp.country : 'us';
				callback(countryCode);
			});
	};

	/**
	 * If for some reason the Phone input is masked and not international, remove the mask.
	 */
	disableMask = () => {
		$(this.$telInput).trigger('unmask');
	};

	formatInputVal = () => {
		const currentNumber = this.getFormattedNumber();

		if (currentNumber) {
			// sometimes the currentText is an object
			this.iti.setNumber(currentNumber);
		}
	};

	getFormattedNumber = (): string | undefined => {
		if (typeof intlTelInputUtils === 'undefined') {
			// eslint-disable-next-line no-console
			console.debug('intlTelInputUtils is not loaded.');

			return undefined;
		}

		return this.iti.getNumber(intlTelInputUtils.numberFormat.E164);
	};

	/**
	 * Update hidden input value as it's normally only done on submission. This allows access by plugins such as
	 * Copy Cat and Populate Anything.
	 */
	updateHiddenInputValue = (): void => {
		if (!this.$hiddenInput) {
			return;
		}

		const formattedNumber = this.getFormattedNumber();

		if (formattedNumber) {
			this.$hiddenInput.value = formattedNumber;
			$(this.$hiddenInput).trigger('change');
		}
	};
}

window.GPAdvancedPhoneField = GPAdvancedPhoneField;
