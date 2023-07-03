import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TextControl,
	TextareaControl,
	Button,
} from '@wordpress/components'

import bannerM1 from './assets/banner--1.jpg'
import mBannerM1 from './assets/banner--1-mobile.jpg'
import banner0 from './assets/banner-0.jpg'
import mBanner0 from './assets/banner-0-mobile.jpg'
import banner1 from './assets/banner-1.jpg'
import mBanner1 from './assets/banner-1-mobile.jpg'
import banner2 from './assets/banner-2.jpg'
import mBanner2 from './assets/banner-2-mobile.jpg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, title, description, button, target, background, mBackground } =
		attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Promo banner'}>
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
					<div className="block">
						<div className="row">
							<TextControl
								label="Button"
								value={button}
								className="input"
								onChange={(value) => setAttributes({ button: value })}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Button Link"
								value={target}
								className="input"
								onChange={(value) => setAttributes({ target: value })}
							/>
						</div>
					</div>
					<div className="row">
						<BaseControl label="Background">
							<MediaUpload
								onSelect={(value) => setAttributes({ background: value })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{background.url == 'banner--1.jpg' ? (
											<img src={bannerM1} alt="image" />
										) : background.url == 'banner-0.jpg' ? (
											<img src={banner0} alt="image" />
										) : background.url == 'banner-1.jpg' ? (
											<img src={banner1} alt="image" />
										) : background.url == 'banner-2.jpg' ? (
											<img src={banner2} alt="image" />
										) : background.url ? (
											<img src={background.url} alt="image" />
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
								onClick={() => setAttributes({ background: { url: '', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n1"
								onClick={() => setAttributes({ background: { url: 'banner--1.jpg', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n2"
								onClick={() => setAttributes({ background: { url: 'banner-0.jpg', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n3"
								onClick={() => setAttributes({ background: { url: 'banner-1.jpg', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n4"
								onClick={() => setAttributes({ background: { url: 'banner-2.jpg', alt: '' } })}
							/>
						</BaseControl>
						<BaseControl label="Mobile background">
							<MediaUpload
								onSelect={(value) => setAttributes({ mBackground: value })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{mBackground.url == 'banner--1-mobile.jpg' ? (
											<img src={mBannerM1} alt="image" />
										) : mBackground.url == 'banner-0-mobile.jpg' ? (
											<img src={mBanner0} alt="image" />
										) : mBackground.url == 'banner-1-mobile.jpg' ? (
											<img src={mBanner1} alt="image" />
										) : mBackground.url == 'banner-2-mobile.jpg' ? (
											<img src={mBanner2} alt="image" />
										) : mBackground.url ? (
											<img src={mBackground.url} alt="image" />
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
								onClick={() => setAttributes({ mBackground: { url: '', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n1"
								onClick={() => setAttributes({ mBackground: { url: 'banner--1-mobile.jpg', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n2"
								onClick={() => setAttributes({ mBackground: { url: 'banner-0-mobile.jpg', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n3"
								onClick={() => setAttributes({ mBackground: { url: 'banner-1-mobile.jpg', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n4"
								onClick={() => setAttributes({ mBackground: { url: 'banner-2-mobile.jpg', alt: '' } })}
							/>
						</BaseControl>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
