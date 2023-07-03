import { useBlockProps, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	SelectControl,
	Button,
} from '@wordpress/components'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, items } = attributes

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
					button: {
						desktop: '',
						mobile: '',
						target: '',
						type: 'link-button',
					},
					primaryButton: {
						desktop: '',
						mobile: '',
						target: '',
						type: 'primary-button',
					},
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Suggested'}>
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
								</div>
								<div className="block">
									<div className="row">
										<TextControl
											label="Button"
											value={tab.button.desktop}
											className="input"
											onChange={(value) => {
												const newValue = { ...tab.button }
												newValue.desktop = value
												setItemAttribute(tab, 'button', newValue)
											}}
										/>
										<TextControl
											label="Mobile (optional)"
											value={tab.button.mobile}
											className="input"
											onChange={(value) => {
												const newValue = { ...tab.button }
												newValue.mobile = value
												setItemAttribute(tab, 'button', newValue)
											}}
										/>
									</div>
									<div className="row">
										<TextControl
											label="Button Link"
											value={tab.button.target}
											className="input"
											onChange={(value) => {
												const newValue = { ...tab.button }
												newValue.target = value
												setItemAttribute(tab, 'button', newValue)
											}}
										/>
									</div>
									<div className="row">
										<SelectControl
											label="Button Type"
											value={tab.button.type}
											className="input"
											onChange={(value) => {
												const newValue = { ...tab.button }
												newValue.type = value
												setItemAttribute(tab, 'button', newValue)
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
								<div className="block">
									<div className="row">
										<TextControl
											label="Primary Button"
											value={tab.primaryButton.desktop}
											className="input"
											onChange={(value) => {
												const newValue = { ...tab.primaryButton }
												newValue.desktop = value
												setItemAttribute(tab, 'primaryButton', newValue)
											}}
										/>
										<TextControl
											label="Mobile (optional)"
											value={tab.primaryButton.mobile}
											className="input"
											onChange={(value) => {
												const newValue = { ...tab.primaryButton }
												newValue.mobile = value
												setItemAttribute(tab, 'primaryButton', newValue)
											}}
										/>
									</div>
									<div className="row">
										<TextControl
											label="Primary Button Link"
											value={tab.primaryButton.target}
											className="input"
											onChange={(value) => {
												const newValue = { ...tab.primaryButton }
												newValue.target = value
												setItemAttribute(tab, 'primaryButton', newValue)
											}}
										/>
									</div>
									<div className="row">
										<SelectControl
											label="Primary Button Type"
											value={tab.primaryButton.type}
											className="input"
											onChange={(value) => {
												const newValue = { ...tab.primaryButton }
												newValue.type = value
												setItemAttribute(tab, 'primaryButton', newValue)
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
