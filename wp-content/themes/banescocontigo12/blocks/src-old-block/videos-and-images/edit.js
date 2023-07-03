import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	CheckboxControl,
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
	const { paddings, margins, gradient, title, videos, images, audios, link } = attributes

	const setVideoAttribute = (tab, attribute, value) => {
		setAttributes({
			videos: videos.map((item) => {
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

	const removeVideo = (tab) => {
		setAttributes({
			videos: videos.filter((item) => item.name !== tab.name),
		})
	}

	const addVideo = (name) => {
		setAttributes({
			videos: [
				...videos,
				{
					name: name,
					link: '',
					title: 'New',
					text: '',
					maxLines: '2',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	const setImageAttribute = (tab, attribute, value) => {
		setAttributes({
			images: images.map((item) => {
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

	const removeImage = (tab) => {
		setAttributes({
			images: images.filter((item) => item.name !== tab.name),
		})
	}

	const addImage = (name) => {
		setAttributes({
			images: [
				...images,
				{
					name: name,
					link: '',
					title: 'New',
					text: '',
					maxLines: '2',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	const setAudioAttribute = (tab, attribute, value) => {
		setAttributes({
			audios: audios.map((item) => {
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

	const removeAudio = (tab) => {
		setAttributes({
			audios: audios.filter((item) => item.name !== tab.name),
		})
	}

	const addAudio = (name) => {
		setAttributes({
			audios: [
				...audios,
				{
					name: name,
					link: '',
					title: 'New',
					text: '',
					maxLines: '2',
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
			<Placeholder label={'Videos, images and audios'}>
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
					<TabPanel tabs={videos}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setVideoAttribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Text"
										value={tab.text}
										className="input"
										onChange={(value) => setVideoAttribute(tab, 'text', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Max lines"
										value={tab.maxLines}
										className="input"
										onChange={(value) => setVideoAttribute(tab, 'maxLines', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setVideoAttribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setVideoAttribute(tab, 'image', value)}
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
											onClick={() => setVideoAttribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setVideoAttribute(tab, 'image', { url: 'video-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setVideoAttribute(tab, 'image', { url: 'video-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setVideoAttribute(tab, 'image', { url: 'video-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setVideoAttribute(tab, 'image', { url: 'video-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setVideoAttribute(tab, 'image', { url: 'video-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setVideoAttribute(tab, 'image', { url: 'video-6.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n7"
											onClick={() => setVideoAttribute(tab, 'image', { url: 'video-7.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n8"
											onClick={() => setVideoAttribute(tab, 'image', { url: 'video-8.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n9"
											onClick={() => setVideoAttribute(tab, 'image', { url: 'video-9.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n10"
											onClick={() => setVideoAttribute(tab, 'image', { url: 'video-10.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{videos.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeVideo(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addVideo(Math.random())}>
						Add new
					</Button>
					<TabPanel tabs={images}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setImageAttribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Text"
										value={tab.text}
										className="input"
										onChange={(value) => setImageAttribute(tab, 'text', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Max lines"
										value={tab.maxLines}
										className="input"
										onChange={(value) => setImageAttribute(tab, 'maxLines', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setImageAttribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setImageAttribute(tab, 'image', value)}
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
											onClick={() => setImageAttribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setImageAttribute(tab, 'image', { url: 'video-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setImageAttribute(tab, 'image', { url: 'video-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setImageAttribute(tab, 'image', { url: 'video-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setImageAttribute(tab, 'image', { url: 'video-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setImageAttribute(tab, 'image', { url: 'video-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setImageAttribute(tab, 'image', { url: 'video-6.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n7"
											onClick={() => setImageAttribute(tab, 'image', { url: 'video-7.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n8"
											onClick={() => setImageAttribute(tab, 'image', { url: 'video-8.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n9"
											onClick={() => setImageAttribute(tab, 'image', { url: 'video-9.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n10"
											onClick={() => setImageAttribute(tab, 'image', { url: 'video-10.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{images.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeImage(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addImage(Math.random())}>
						Add new
					</Button>
					<TabPanel tabs={videos}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setAudioAttribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Text"
										value={tab.text}
										className="input"
										onChange={(value) => setAudioAttribute(tab, 'text', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Max lines"
										value={tab.maxLines}
										className="input"
										onChange={(value) => setAudioAttribute(tab, 'maxLines', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setAudioAttribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setAudioAttribute(tab, 'image', value)}
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
											onClick={() => setAudioAttribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setAudioAttribute(tab, 'image', { url: 'video-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setAudioAttribute(tab, 'image', { url: 'video-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setAudioAttribute(tab, 'image', { url: 'video-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setAudioAttribute(tab, 'image', { url: 'video-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setAudioAttribute(tab, 'image', { url: 'video-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setAudioAttribute(tab, 'image', { url: 'video-6.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n7"
											onClick={() => setAudioAttribute(tab, 'image', { url: 'video-7.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n8"
											onClick={() => setAudioAttribute(tab, 'image', { url: 'video-8.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n9"
											onClick={() => setAudioAttribute(tab, 'image', { url: 'video-9.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n10"
											onClick={() => setAudioAttribute(tab, 'image', { url: 'video-10.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{videos.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeAudio(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addAudio(Math.random())}>
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
