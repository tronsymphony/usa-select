import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	Button,
} from '@wordpress/components'

import IMAGE1 from './assets/image-1.jpg'
import IMAGE2 from './assets/image-2.jpg'
import IMAGE3 from './assets/image-3.jpg'
import IMAGE4 from './assets/image-4.jpg'
import IMAGE5 from './assets/image-5.jpg'
import IMAGE6 from './assets/image-6.jpg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, title, items } = attributes

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
					link: '',
					title: 'New',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Library'}>
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
									const newTitle = { ...title }
									newTitle.desktop = value
									setAttributes({ title: newTitle })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={title.mobile}
								className="input"
								onChange={(value) => {
									const newTitle = { ...title }
									newTitle.mobile = value
									setAttributes({ title: newTitle })
								}}
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
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItemAttribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.image.url ? (
														<img src={tab.image.url} alt="image" />
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
											onClick={() => setItemAttribute(tab, 'image', { url: 'image-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItemAttribute(tab, 'image', { url: 'image-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItemAttribute(tab, 'image', { url: 'image-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItemAttribute(tab, 'image', { url: 'image-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItemAttribute(tab, 'image', { url: 'image-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItemAttribute(tab, 'image', { url: 'image-6.jpg', alt: '' })}
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
