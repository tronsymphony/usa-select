import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	CheckboxControl,
	TextareaControl,
	Button,
} from '@wordpress/components'

import SVG1 from './assets/youtube.svg'
import VIDEO1 from './assets/video-1.jpg'
import VIDEO2 from './assets/video-2.jpg'
import VIDEO3 from './assets/video-3.jpg'
import VIDEO4 from './assets/video-4.jpg'
import VIDEO5 from './assets/video-5.jpg'
import VIDEO6 from './assets/video-6.jpg'
import VIDEO7 from './assets/video-7.jpg'
import VIDEO8 from './assets/video-8.jpg'
import VIDEO9 from './assets/video-9.jpg'
import VIDEO10 from './assets/video-10.jpg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, title, items, link } = attributes

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
					text: '',
					maxLines: '2',
					module_title:'',
					module_description:'',
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
			<Placeholder label={'Videos'}>
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
						<div className="row">
							<CheckboxControl
								label="Increase font size on mobile"
								checked={title.mIncrease}
								onChange={(value) => {
									const newTitle = { ...title }
									newTitle.mIncrease = value
									setAttributes({ title: newTitle })
								}}
								className="checkbox"
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
										label="Text"
										value={tab.text}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'text', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Max lines"
										value={tab.maxLines}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'maxLines', value)}
									/>
								</div>

								<div className="row">
									<TextareaControl
										label="Module Title"
										value={tab.module_title}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'module_title', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="Module Description"
										value={tab.module_description}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'module_description', value)}
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
													{tab.image.url == 'video-1.jpg' ? (
														<img src={VIDEO1} alt="image" />
													) : tab.image.url === 'video-2.jpg' ? (
														<img src={VIDEO2} alt="image" />
													) : tab.image.url === 'video-3.jpg' ? (
														<img src={VIDEO3} alt="image" />
													) : tab.image.url === 'video-4.jpg' ? (
														<img src={VIDEO4} alt="image" />
													) : tab.image.url === 'video-5.jpg' ? (
														<img src={VIDEO5} alt="image" />
													) : tab.image.url === 'video-6.jpg' ? (
														<img src={VIDEO6} alt="image" />
													) : tab.image.url === 'video-7.jpg' ? (
														<img src={VIDEO7} alt="image" />
													) : tab.image.url === 'video-8.jpg' ? (
														<img src={VIDEO8} alt="image" />
													) : tab.image.url === 'video-9.jpg' ? (
														<img src={VIDEO9} alt="image" />
													) : tab.image.url === 'video-10.jpg' ? (
														<img src={VIDEO10} alt="image" />
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
											onClick={() => setItemAttribute(tab, 'image', { url: 'video-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItemAttribute(tab, 'image', { url: 'video-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItemAttribute(tab, 'image', { url: 'video-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItemAttribute(tab, 'image', { url: 'video-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItemAttribute(tab, 'image', { url: 'video-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItemAttribute(tab, 'image', { url: 'video-6.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n7"
											onClick={() => setItemAttribute(tab, 'image', { url: 'video-7.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n8"
											onClick={() => setItemAttribute(tab, 'image', { url: 'video-8.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n9"
											onClick={() => setItemAttribute(tab, 'image', { url: 'video-9.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n10"
											onClick={() => setItemAttribute(tab, 'image', { url: 'video-10.jpg', alt: '' })}
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
					<div className="row">
						<CheckboxControl
							label="Extra line enable"
							checked={link.enable}
							onChange={(value) => {
								const newLink = { ...link }
								newLink.enable = value
								setAttributes({ link: newLink })
							}}
							className="checkbox"
						/>
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Line"
								value={link.title.desktop}
								className="input"
								onChange={(value) => {
									const newLink = { ...link }
									newLink.title.desktop = value
									setAttributes({ link: newLink })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={link.title.mobile}
								className="input"
								onChange={(value) => {
									const newLink = { ...link }
									newLink.title.mobile = value
									setAttributes({ link: newLink })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Line Link"
								value={link.target}
								className="input"
								onChange={(value) => {
									const newLink = { ...link }
									newLink.target = value
									setAttributes({ link: newLink })
								}}
							/>
						</div>
						<div className="row">
							<BaseControl label="Image">
								<MediaUpload
									onSelect={(value) => {
										const newLink = { ...link }
										newLink.image = value
										setAttributes({ link: newLink })
									}}
									type="image"
									render={({ open }) => (
										<Button className="button" onClick={open}>
											{link.image.url == 'youtube.svg' ? (
												<img src={SVG1} alt="image" />
											) : link.image.url ? (
												<img src={link.image.url} alt="image" />
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
										const newLink = { ...link }
										newLink.image = { url: '', alt: '' }
										setAttributes({ link: newLink })
									}}
								/>
								<Button
									icon="cover-image"
									showTooltip="true"
									label="Set default image"
									className="default-image-button"
									onClick={() => {
										const newLink = { ...link }
										newLink.image = { url: 'youtube.svg', alt: '' }
										setAttributes({ link: newLink })
									}}
								/>
							</BaseControl>
						</div>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
