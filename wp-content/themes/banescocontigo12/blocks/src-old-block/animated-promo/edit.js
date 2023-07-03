import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TextControl,
	TextareaControl,
	CheckboxControl,
	Button,
} from '@wordpress/components'

import img1 from './assets/image-1.png'
import img2 from './assets/image-2.png'
import mImg1 from './assets/image-1-mobile.png'
import mImg2 from './assets/image-2-mobile.png'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, title, description, button, target, images, shadow } = attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Animated promo'}>
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
					<div className="row">
						<TextareaControl
							label="Description"
							help="You could use all HTML tags in the description field."
							value={description}
							className="input"
							onChange={(value) => setAttributes({ description: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Button"
							value={button}
							className="input"
							onChange={(value) => setAttributes({ button: value })}
						/>
						<TextControl
							label="Button link"
							value={target}
							className="input"
							onChange={(value) => setAttributes({ target: value })}
						/>
					</div>
					<div className="row">
						<BaseControl label="Left Image">
							<MediaUpload
								onSelect={(value) => setAttributes({ images: { ...images, left: value } })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{images.left?.url == 'image-1.png' ? (
											<img src={img1} alt={'image'} />
										) : images.left.url ? (
											<img src={images.left?.url} alt={images.left.alt} />
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
								onClick={() => setAttributes({ images: { ...images, left: { url: '', alt: '' } } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() =>
									setAttributes({ images: { ...images, left: { url: 'image-1.png', alt: '' } } })
								}
							/>
						</BaseControl>
						<BaseControl label="Mobile Left Image">
							<MediaUpload
								onSelect={(value) => setAttributes({ images: { ...images, mLeft: value } })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{images.mLeft?.url == 'image-1-mobile.png' ? (
											<img src={mImg1} alt={'image'} />
										) : images.mLeft.url ? (
											<img src={images.mLeft?.url} alt={images.mLeft.alt} />
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
								onClick={() => setAttributes({ images: { ...images, mLeft: { url: '', alt: '' } } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() =>
									setAttributes({
										images: { ...images, mLeft: { url: 'image-1-mobile.png', alt: '' } },
									})
								}
							/>
						</BaseControl>
					</div>
					<div className="row">
						<BaseControl label="Animated Right Image">
							<MediaUpload
								onSelect={(value) => setAttributes({ images: { ...images, right: value } })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{images.right.url == 'image-2.png' ? (
											<img src={img2} alt="image" />
										) : images.right.url ? (
											<img src={images.right.url} alt="image" />
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
								onClick={() => setAttributes({ images: { ...images, right: { url: '', alt: '' } } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() =>
									setAttributes({
										images: { ...images, right: { url: 'image-2.png', alt: '' } },
									})
								}
							/>
						</BaseControl>
						<BaseControl label="Animated Mobile Right Image">
							<MediaUpload
								onSelect={(value) => setAttributes({ images: { ...images, mRight: value } })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{images.mRight.url == 'image-2-mobile.png' ? (
											<img src={mImg2} alt="image " />
										) : images.mRight.url ? (
											<img src={images.mRight.url} alt="image" />
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
								onClick={() => setAttributes({ images: { ...images, mRight: { url: '', alt: '' } } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() =>
									setAttributes({
										images: { ...images, mRight: { url: 'image-2-mobile.png', alt: '' } },
									})
								}
							/>
						</BaseControl>
					</div>
					<div className="row">
						<CheckboxControl
							label="Shadow"
							checked={shadow}
							onChange={(value) => setAttributes({ shadow: value })}
							className="checkbox"
						/>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
