import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	CheckboxControl,
	SelectControl,
	Button,
} from '@wordpress/components'

import icon from './assets/check.svg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, items, bigImages, columns, centered } = attributes

	const setItemAttribute = (tab, attribute, value) => {
		setAttributes({
			items: items.map((item) => {
				if (item.name === tab.name) {
					return {
						...item,
						[attribute]: value,
					}
				}
				return item
			}),
		})
	}

	const removeItem = (tab) => {
		setAttributes({
			items: items.filter((item) => item.name !== tab.name),
		})
	}

	const addItem = (name) => {
		setAttributes({
			items: [
				...items,
				{
					name: name,
					title: 'New',
					mTitle: '',
					text: '',
					mText: '',
					widths: {
						title: '280px',
						mTitle: '100%',
						text: '265px',
						mText: '100%',
					},
					image: {
						alt: '',
						url: 'check.svg',
					},
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Features'}>
				<InspectorAdvancedControls>
					<div className="paddings">
						<Flex>
							<FlexBlock>
								<TextControl
									label="padding top"
									value={paddings.desktop.top}
									className="input"
									onChange={(value) => {
										const newPaddings = { ...paddings }
										newPaddings.desktop.top = value
										setAttributes({ paddings: newPaddings })
									}}
								/>
							</FlexBlock>
							<FlexBlock>
								<TextControl
									label="for mobile"
									value={paddings.mobile.top}
									className="input"
									onChange={(value) => {
										const newPaddings = { ...paddings }
										newPaddings.mobile.top = value
										setAttributes({ paddings: newPaddings })
									}}
								/>
							</FlexBlock>
						</Flex>
						<Flex>
							<FlexBlock>
								<TextControl
									label="padding bottom"
									value={paddings.desktop.bottom}
									className="input"
									onChange={(value) => {
										const newPaddings = { ...paddings }
										newPaddings.desktop.bottom = value
										setAttributes({ paddings: newPaddings })
									}}
								/>
							</FlexBlock>
							<FlexBlock>
								<TextControl
									label="for mobile"
									value={paddings.mobile.bottom}
									className="input"
									onChange={(value) => {
										const newPaddings = { ...paddings }
										newPaddings.mobile.bottom = value
										setAttributes({ paddings: newPaddings })
									}}
								/>
							</FlexBlock>
						</Flex>
					</div>
					<div className="margins">
						<Flex>
							<FlexBlock>
								<TextControl
									label="margin top"
									value={margins.desktop.top}
									className="input"
									onChange={(value) => {
										const newMargins = { ...margins }
										newMargins.desktop.top = value
										setAttributes({ margins: newMargins })
									}}
								/>
							</FlexBlock>
							<FlexBlock>
								<TextControl
									label="for mobile"
									value={margins.mobile.top}
									className="input"
									onChange={(value) => {
										const newMargins = { ...margins }
										newMargins.mobile.top = value
										setAttributes({ margins: newMargins })
									}}
								/>
							</FlexBlock>
						</Flex>
						<Flex>
							<FlexBlock>
								<TextControl
									label="margin bottom"
									value={margins.desktop.bottom}
									className="input"
									onChange={(value) => {
										const newMargins = { ...margins }
										newMargins.desktop.bottom = value
										setAttributes({ margins: newMargins })
									}}
								/>
							</FlexBlock>
							<FlexBlock>
								<TextControl
									label="for mobile"
									value={margins.mobile.bottom}
									className="input"
									onChange={(value) => {
										const newMargins = { ...margins }
										newMargins.mobile.bottom = value
										setAttributes({ margins: newMargins })
									}}
								/>
							</FlexBlock>
						</Flex>
					</div>
					<div className="background">
						<Flex>
							<FlexBlock>
								<TextControl
									label="Default background"
									value={gradient}
									className="input"
									onChange={(value) => setAttributes({ gradient: value })}
								/>
							</FlexBlock>
						</Flex>
					</div>
				</InspectorAdvancedControls>
				<div className="settings">
					<TabPanel tabs={items}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'title', value)}
									/>
									<TextControl
										label="Mobile (optional)"
										value={tab.mTitle}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'mTitle', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Text"
										value={tab.text}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'text', value)}
									/>
									<TextControl
										label="Mobile (optional)"
										value={tab.mText}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'mText', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Title Width"
										value={tab.widths.title}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'widths', { ...tab.widths, title: value })}
									/>
									<TextControl
										label="Mobile (optional)"
										value={tab.widths.mTitle}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'widths', { ...tab.widths, mTitle: value })}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Description Width"
										value={tab.widths.text}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'widths', { ...tab.widths, text: value })}
									/>
									<TextControl
										label="Mobile (optional)"
										value={tab.widths.mText}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'widths', { ...tab.widths, mText: value })}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItemAttribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'check.svg' ? (
														<img src={icon} alt={'icon'} />
													) : tab.image.url ? (
														<img src={tab.image.url} alt={tab.image.alt} />
													) : (
														'Insert'
													)}
												</Button>
											)}
										/>
										<Button
											icon="dismiss"
											showTooltip="true"
											label="Delete image"
											className="delete-button"
											onClick={() => setItemAttribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItemAttribute(tab, 'image', { url: 'check.svg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem(Math.random())}>
						Add new
					</Button>
				</div>
				<div className="row">
					<CheckboxControl
						label="Items centered"
						checked={centered}
						onChange={(value) => setAttributes({ centered: value })}
						className="checkbox"
					/>
				</div>
				<div className="row">
					<CheckboxControl
						label="Increase images size"
						checked={bigImages}
						onChange={(value) => setAttributes({ bigImages: value })}
						className="checkbox"
					/>
				</div>
				<div className="row">
					<SelectControl
						label="Select number of columns"
						value={columns.type}
						className="input"
						onChange={(value) => {
							const newValue = { ...columns }
							newValue.type = value
							setAttributes({ columns: newValue })
						}}

						options={ [
							{ value: '', label: 'Select number of columns', disabled: true },
							{ value: '1', label: '1 Column' },
							{ value: '2', label: '2 Column' },
							{ value: '3', label: '3 Column' },
							{ value: '4', label: '4 Column' },
							{ value: '5', label: '5 Column' },
						] }
					/>
				</div>
			</Placeholder>
		</div>
	)
}
