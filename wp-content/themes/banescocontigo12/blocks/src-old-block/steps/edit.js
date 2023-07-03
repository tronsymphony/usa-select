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

import BACK1 from './assets/background.jpg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, title, items, background } = attributes

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
					suptitle: '',
					title: 'New',
					text: '',
					first_link_title: '',
					first_link_value: '',
					second_link_title: '',
					second_link_value: '',
					appstore: '',
					googleplay: '',
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Steps'}>
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
					<div className="row">
						<TextControl
							label="Title"
							value={title}
							className="input"
							onChange={(value) => setAttributes({ title: value })}
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
								<TextareaControl
									label="Description"
									help="You could use all HTML tags in the description field."
									value={tab.text}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'text', value)}
								/>
							</div>
							<div className="row">
								<TextControl
									label="First Line"
									value={tab.first_link_title}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'first_link_title', value)}
								/>
								<TextControl
									label="First Line Link"
									value={tab.first_link_value}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'first_link_value', value)}
								/>
							</div>
							<div className="row">
								<TextControl
									label="Second Line"
									value={tab.second_link_title}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'second_link_title', value)}
								/>
								<TextControl
									label="Second Line Link"
									value={tab.second_link_value}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'second_link_value', value)}
								/>
							</div>
							<div className="row">
								<TextControl
									label="App Store Link"
									value={tab.appstore}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'appstore', value)}
								/>
							</div>
							<div className="row">
								<TextControl
									label="Google Play Link"
									value={tab.googleplay}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'googleplay', value)}
								/>
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
				<div className="row">
					<BaseControl label="Background Image">
						<MediaUpload
							onSelect={(value) => {
								const newValue = { ...background }
								newValue.desktop = value
								setAttributes({ background: value })
							}}
							type="image"
							render={({ open }) => (
								<Button className="button" onClick={open}>
									{background.desktop.url == 'background.jpg' ? (
										<img src={BACK1} alt="background" />
									) : background.desktop.url ? (
										<img src={background.desktop.url} alt="background" />
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
								const newValue = { ...background }
								newValue.desktop = { url: '', alt: '' }
								setAttributes({ background: newValue })
							}}
						/>
						<Button
							icon="cover-image"
							showTooltip="true"
							label="Set default image"
							className="default-image-button n1"
							onClick={() => {
								const newValue = { ...background }
								newValue.desktop = { url: 'background.jpg', alt: '' }
								setAttributes({ background: newValue })
							}}
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
									{background.desktop.url == 'background.jpg' ? (
										<img src={BACK1} alt="background" />
									) : background.mobile.url ? (
										<img src={background.mobile.url} alt="background" />
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
								const newValue = { ...background }
								newValue.mobile = { url: '', alt: '' }
								setAttributes({ background: newValue })
							}}
						/>
						<Button
							icon="cover-image"
							showTooltip="true"
							label="Set default image"
							className="default-image-button n1"
							onClick={() => {
								const newValue = { ...background }
								newValue.mobile = { url: 'background.jpg', alt: '' }
								setAttributes({ background: newValue })
							}}
						/>
					</BaseControl>
				</div>
			</Placeholder>
		</div>
	)
}
