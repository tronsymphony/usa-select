import { useBlockProps, MediaUpload } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	TextareaControl,
	SelectControl,
	CheckboxControl,
	Button,
} from '@wordpress/components'

import img from './assets/image.png'
import mImg from './assets/image-mobile.png'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { title, content, image, mImage, appstore, googleplay , socialIcons,enablePopup, topIcon } = attributes

	return (
		<div {...useBlockProps()}>
			<div className="text-image-slider-editor">
				<Placeholder label={'Text Image Slider'}>
					<div className="row">
						<TextControl
							label="Title"
							value={title}
							className="input"
							onChange={(value) => setAttributes({ title: value })}
						/>
					</div>
					<div className="row">
						<TextareaControl
							label="Content"
							value={content}
							className="input"
							onChange={(value) => setAttributes({ content: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="AppStore Link"
							value={appstore}
							className="input"
							onChange={(value) => setAttributes({ appstore: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="GooglePlay Link"
							value={googleplay}
							className="input"
							onChange={(value) => setAttributes({ googleplay: value })}
						/>
					</div>
					<div className="row">
						<BaseControl label="Image">
							<MediaUpload
								onSelect={(value) => setAttributes({ image: value })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{image === 'image.png' ? (
											<img src={img} alt={'image'} />
										) : image && image.url ? (
											<img src={image.url} alt={image.alt} />
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
								onClick={() => setAttributes({ image: '' })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() => setAttributes({ image: 'image.png' })}
							/>
						</BaseControl>
						<BaseControl label="Mobile image">
							<MediaUpload
								onSelect={(value) => setAttributes({ mImage: value })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{mImage === 'image-mobile.png' ? (
											<img src={mImg} alt={'image'} />
										) : mImage && mImage.url ? (
											<img src={mImage.url} alt={mImage.alt} />
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
								onClick={() => setAttributes({ mImage: '' })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() => setAttributes({ mImage: 'image-mobile.png' })}
							/>
						</BaseControl>
					</div>
					<div className="row">
						<CheckboxControl
							label="Hide Top Icon"
							checked={topIcon.hidden}
							onChange={(value) => {
								const newValue = { ...topIcon }
								newValue.hidden = value
								setAttributes({ topIcon: newValue })
							}}
							className="checkbox"
						/>
					</div>
					<div className="row">
						<CheckboxControl
							label="Hide Social Icons"
							checked={socialIcons.hidden}
							onChange={(value) => {
								const newValue = { ...socialIcons }
								newValue.hidden = value
								setAttributes({ socialIcons: newValue })
							}}
							className="checkbox"
						/>
					</div>
					<div className="row">
						<CheckboxControl
							label="Enable Popup"
							checked={enablePopup.hidden}
							onChange={(value) => {
								const newValue = { ...enablePopup }
								newValue.hidden = value
								setAttributes({ enablePopup: newValue })
							}}
							className="checkbox"
						/>
					</div>
				</Placeholder>
			</div>
		</div>
	)
}
