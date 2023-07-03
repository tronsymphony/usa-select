import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	TextareaControl,
	SelectControl,
	Button,
} from '@wordpress/components'

import BACK1 from './assets/background-1.jpg'
import MBACK1 from './assets/background-1-mobile.jpg'
import BACK2 from './assets/background-2.jpg'
import MBACK2 from './assets/background-2-mobile.jpg'
import BACK3 from './assets/background-3.jpg'
import MBACK3 from './assets/background-3-mobile.jpg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, colors, widths, title, description, button, items } = attributes

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
					desktop: {
						url: '',
						alt: '',
					},
					mobile: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Hero slider'}>
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
								label="Title"
								value={title.desktop}
								className="input"
								onChange={(value) => {
									const newValue = { ...title }
									newValue.desktop = value
									setAttributes({ title: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={title.mobile}
								className="input"
								onChange={(value) => {
									const newValue = { ...title }
									newValue.mobile = value
									setAttributes({ title: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Color (optional)"
								value={colors.title}
								className="input"
								onChange={(value) => {
									const newValue = { ...colors }
									newValue.title = value
									setAttributes({ colors: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Max Width"
								value={widths.desktop.title}
								className="input"
								onChange={(value) => {
									const newValue = { ...widths }
									newValue.desktop.title = value
									setAttributes({ widths: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={widths.mobile.title}
								className="input"
								onChange={(value) => {
									const newValue = { ...widths }
									newValue.mobile.title = value
									setAttributes({ widths: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Margin Top"
								value={margins.desktop.title}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.desktop.title = value
									setAttributes({ margins: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={margins.mobile.title}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.mobile.title = value
									setAttributes({ margins: newValue })
								}}
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextareaControl
								label="Description"
								help="You could use all HTML tags in the description field."
								value={description.desktop}
								className="input"
								onChange={(value) => {
									const newValue = { ...description }
									newValue.desktop = value
									setAttributes({ description: newValue })
								}}
							/>
							<TextareaControl
								label="Mobile (optional)"
								value={description.mobile}
								className="input"
								onChange={(value) => {
									const newValue = { ...description }
									newValue.mobile = value
									setAttributes({ description: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Color (optional)"
								value={colors.description}
								className="input"
								onChange={(value) => {
									const newValue = { ...colors }
									newValue.description = value
									setAttributes({ colors: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Max Width"
								value={widths.desktop.description}
								className="input"
								onChange={(value) => {
									const newValue = { ...widths }
									newValue.desktop.description = value
									setAttributes({ widths: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={widths.mobile.description}
								className="input"
								onChange={(value) => {
									const newValue = { ...widths }
									newValue.mobile.description = value
									setAttributes({ widths: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Margin Top"
								value={margins.desktop.description}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.desktop.description = value
									setAttributes({ margins: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={margins.mobile.description}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.mobile.description = value
									setAttributes({ margins: newValue })
								}}
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Button"
								value={button.desktop}
								className="input"
								onChange={(value) => {
									const newValue = { ...button }
									newValue.desktop = value
									setAttributes({ button: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={button.mobile}
								className="input"
								onChange={(value) => {
									const newValue = { ...button }
									newValue.mobile = value
									setAttributes({ button: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Button Link"
								value={button.target}
								className="input"
								onChange={(value) => {
									const newValue = { ...button }
									newValue.target = value
									setAttributes({ button: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Margin Top"
								value={margins.desktop.button}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.desktop.button = value
									setAttributes({ margins: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={margins.mobile.button}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.mobile.button = value
									setAttributes({ margins: newValue })
								}}
							/>
						</div>
						<div className="row">
							<SelectControl
								label="Button Type"
								value={button.type}
								className="input"
								onChange={(value) => {
									const newValue = { ...button }
									newValue.type = value
									setAttributes({ button: newValue })
								}}
								options={[
									{
										label: 'Primary Button',
										value: 'primary-button',
									},
									{
										label: 'Outlined Button',
										value: 'outlined-button',
									},
									{
										label: 'White Button',
										value: 'white-button',
									},
									{
										label: 'Outlined White Button',
										value: 'outlined-white-button',
									},
									{
										label: 'Link Button',
										value: 'link-button',
									},
									{
										label: 'Line Button',
										value: 'line-button',
									},
								]}
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
									<BaseControl label="Background Image">
										<MediaUpload
											onSelect={(value) => setItemAttribute(tab, 'desktop', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.desktop.url == 'background-1.jpg' ? (
														<img src={BACK1} alt="background" />
													) : tab.desktop.url == 'background-2.jpg' ? (
														<img src={BACK2} alt="background" />
													) : tab.desktop.url == 'background-3.jpg' ? (
														<img src={BACK3} alt="background" />
													) : tab.desktop.url ? (
														<img src={tab.desktop.url} alt="background" />
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
											onClick={() => setItemAttribute(tab, 'desktop', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItemAttribute(tab, 'desktop', { url: 'background-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItemAttribute(tab, 'desktop', { url: 'background-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItemAttribute(tab, 'desktop', { url: 'background-3.jpg', alt: '' })}
										/>
									</BaseControl>
									<BaseControl label="Mobile (optional)">
										<MediaUpload
											onSelect={(value) => {
												const newValue = { ...background }
												newValue.mobile = value
												setAttributes({ background: newValue })
											}}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.mobile.url == 'background-1-mobile.jpg' ? (
														<img src={MBACK1} alt="background" />
													) : tab.mobile.url == 'background-2-mobile.jpg' ? (
														<img src={MBACK2} alt="background" />
													) : tab.mobile.url == 'background-3-mobile.jpg' ? (
														<img src={MBACK3} alt="background" />
													) : tab.mobile.url ? (
														<img src={tab.mobile.url} alt="background" />
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
											onClick={() => setItemAttribute(tab, 'mobile', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() =>
												setItemAttribute(tab, 'mobile', { url: 'background-1-mobile.jpg', alt: '' })
											}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() =>
												setItemAttribute(tab, 'mobile', { url: 'background-2-mobile.jpg', alt: '' })
											}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() =>
												setItemAttribute(tab, 'mobile', { url: 'background-3-mobile.jpg', alt: '' })
											}
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
