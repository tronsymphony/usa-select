import { useBlockProps } from '@wordpress/block-editor'

import icon from './assets/icon.svg'

export default function save({ attributes }) {
	const { title, placeholder, filters } = attributes

	return (
		<section {...useBlockProps.save()}>
			<div className="search-with-filter">
				<div className="container">
					<div className="search-with-filter__inner">
						<div className="search-with-filter__content">{title && <h2 className="search-with-filter__title">{title}</h2>}</div>
						<div className="search-with-filter__input">
							<div class="search-input search-input--only-button-right active" data-id="block-search">
								<form class="search-input__form" action="#">
									<input type="text" class="search-input__entry" placeholder={placeholder} />
									<button class="search-input__button" type="submit">
										<img src={icon} alt="search" />
									</button>
								</form>
							</div>
						</div>
					</div>
					<div className="search-with-filter__filters">
						{filters.split(', ').map((filter) => (
							<button
								className={`search-with-filter__filter  ${filter == 'Ver todo' ? 'active' : ''}`}
								data-id={filter}
							>
								{filter}
							</button>
						))}
					</div>
				</div>
			</div>
		</section>
	)
}
