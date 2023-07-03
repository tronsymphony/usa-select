import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	TextareaControl,
	Button,
} from '@wordpress/components'

import tel from './assets/tel.svg'
import mail from './assets/mail.svg'
import whatsapp from './assets/whatsapp.png'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, form, title, content, items } = attributes

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
					icon: {
						desktop: {
							url: '',
							alt: '',
						},
						mobile: {
							url: '',
							alt: '',
						},
					},
					firstLine: {
						desktop: '',
						mobile: '',
						target: '',
					},
					secondLine: {
						desktop: '',
						mobile: '',
						target: '',
					},
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Contact form'}>
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
					<div className="block">
						<div className="row">
							<TextControl
								label="Gravity Form shortcode"
								value={form}
								className="input"
								onChange={(value) => setAttributes({ form: value })}
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Title (optional)"
								value={title}
								className="input"
								onChange={(value) => setAttributes({ title: value })}
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextareaControl
								label="Content (optional)"
								help="You could use all HTML tags in the content field."
								value={content}
								className="input"
								onChange={(value) => setAttributes({ content: value })}
							/>
						</div>
					</div>
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
								</div>
								<div className="row">
									<TextControl
										label="First Line"
										value={tab.firstLine.desktop}
										className="input"
										onChange={(value) => {
											const newValue = tab.firstLine
											newValue.desktop = value
											setItemAttribute(tab, 'firstLine', newValue)
										}}
									/>
									<TextControl
										label="Mobile (optional)"
										value={tab.firstLine.mobile}
										className="input"
										onChange={(value) => {
											const newValue = tab.firstLine
											newValue.mobile = value
											setItemAttribute(tab, 'firstLine', newValue)
										}}
									/>
								</div>
								<div className="row">
									<TextControl
										label="First Line Link"
										value={tab.firstLine.target}
										className="input"
										onChange={(value) => {
											const newValue = tab.firstLine
											newValue.target = value
											setItemAttribute(tab, 'firstLine', newValue)
										}}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Second Line"
										value={tab.secondLine.desktop}
										className="input"
										onChange={(value) => {
											const newValue = tab.secondLine
											newValue.desktop = value
											setItemAttribute(tab, 'secondLine', newValue)
										}}
									/>
									<TextControl
										label="Mobile (optional)"
										value={tab.secondLine.mobile}
										className="input"
										onChange={(value) => {
											const newValue = tab.secondLine
											newValue.mobile = value
											setItemAttribute(tab, 'secondLine', newValue)
										}}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Second Line Link"
										value={tab.secondLine.target}
										className="input"
										onChange={(value) => {
											const newValue = tab.secondLine
											newValue.target = value
											setItemAttribute(tab, 'secondLine', newValue)
										}}
									/>
								</div>
								<div className="row">
									<BaseControl label="Icon">
										<MediaUpload
											onSelect={(value) => {
												const newValue = tab.icon
												newValue.desktop = value
												setItemAttribute(tab, 'icon', newValue)
											}}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.icon.desktop.url == 'whatsapp.png' ? (
														<img src={whatsapp} alt="icon" />
													) : tab.icon.desktop.url == 'mail.svg' ? (
														<img src={mail} alt="icon" />
													) : tab.icon.desktop.url == 'tel.svg' ? (
														<img src={tel} alt="icon" />
													) : tab.icon.desktop.url ? (
														<img src={tab.icon.desktop.url} alt="icon" />
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
											onClick={() => {
												const newValue = tab.icon
												newValue.desktop = { url: '', alt: '' }
												setItemAttribute(tab, 'icon', newValue)
											}}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => {
												const newValue = tab.icon
												newValue.desktop = { url: 'mail.svg', alt: '' }
												setItemAttribute(tab, 'icon', newValue)
											}}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => {
												const newValue = tab.icon
												newValue.desktop = { url: 'tel.svg', alt: '' }
												setItemAttribute(tab, 'icon', newValue)
											}}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => {
												const newValue = tab.icon
												newValue.desktop = { url: 'whatsapp.svg', alt: '' }
												setItemAttribute(tab, 'icon', newValue)
											}}
										/>
									</BaseControl>
									<BaseControl label="Mobile (optional)">
										<MediaUpload
											onSelect={(value) => {
												const newValue = tab.icon
												newValue.mobile = value
												setItemAttribute(tab, 'icon', newValue)
											}}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.icon.mobile.url == 'whatsapp.svg' ? (
														<img src={whatsapp} alt="icon" />
													) : tab.icon.mobile.url == 'mail.svg' ? (
														<img src={mail} alt="icon" />
													) : tab.icon.mobile.url == 'tel.svg' ? (
														<img src={tel} alt="icon" />
													) : tab.icon.mobile.url ? (
														<img src={tab.icon.mobile.url} alt="icon" />
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
											onClick={() => {
												const newValue = tab.icon
												newValue.mobile = { url: '', alt: '' }
												setItemAttribute(tab, 'icon', newValue)
											}}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => {
												const newValue = tab.icon
												newValue.mobile = { url: 'mail.svg', alt: '' }
												setItemAttribute(tab, 'icon', newValue)
											}}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => {
												const newValue = tab.icon
												newValue.mobile = { url: 'tel.svg', alt: '' }
												setItemAttribute(tab, 'icon', newValue)
											}}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => {
												const newValue = tab.icon
												newValue.mobile = { url: 'whatsapp.svg', alt: '' }
												setItemAttribute(tab, 'icon', newValue)
											}}
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
			</Placeholder>
		</div>
	)
}
