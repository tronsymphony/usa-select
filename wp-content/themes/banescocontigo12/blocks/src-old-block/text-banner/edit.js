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

import img1 from './assets/background-1.jpg'
import mImg1 from './assets/background-1-mobile.jpg'
import img2 from './assets/background-2.jpg'
import mImg2 from './assets/background-2-mobile.jpg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const {
		paddings,
		margins,
		gradient,
		widths,
		text,
		background,
		mBackground,
		crop,
		reverseDirection,
		initialOpened,
		mobileFit,
		extra,
		button,
		target,
	} = attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Text banner'}>
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
							<TextareaControl
								label="Content"
								help="You could use all HTML tags in the content field."
								value={text}
								className="input"
								onChange={(value) => setAttributes({ text: value })}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Content Width"
								value={widths.text}
								className="input"
								onChange={(value) => setAttributes({ widths: { ...widths, text: value } })}
							/>
							<TextControl
								label="Mobile (optional)"
								value={widths.mText}
								className="input"
								onChange={(value) => setAttributes({ widths: { ...widths, mText: value } })}
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
										{background.url == 'background-1.jpg' ? (
											<img src={img1} alt="image" />
										) : background.url == 'background-2.jpg' ? (
											<img src={img2} alt="image" />
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
								onClick={() => setAttributes({ background: { url: 'background-1.jpg', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n2"
								onClick={() => setAttributes({ background: { url: 'background-2.jpg', alt: '' } })}
							/>
						</BaseControl>
						<BaseControl label="Mobile Background">
							<MediaUpload
								onSelect={(value) => setAttributes({ mBackground: value })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{mBackground.url == 'background-1-mobile.jpg' ? (
											<img src={mImg1} alt="image" />
										) : mBackground.url == 'background-2-mobile.jpg' ? (
											<img src={mImg2} alt="image" />
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
								onClick={() => setAttributes({ mBackground: { url: 'background-1-mobile.jpg', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n2"
								onClick={() => setAttributes({ mBackground: { url: 'background-2-mobile.jpg', alt: '' } })}
							/>
						</BaseControl>
					</div>
					<div className="block">
						<div className="row">
							<TextareaControl
								label="Extra Text"
								value={extra}
								className="input"
								onChange={(value) => setAttributes({ extra: value })}
							/>
						</div>
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
						<CheckboxControl
							label="Add show more button"
							checked={crop}
							onChange={(value) => setAttributes({ crop: value })}
							className="checkbox"
						/>
					</div>
					<div className="row">
						<CheckboxControl
							label="Initial opened (working with the more button)"
							checked={initialOpened}
							onChange={(value) => setAttributes({ initialOpened: value })}
							className="checkbox"
						/>
					</div>
					<div className="row">
						<CheckboxControl
							label="Reversed text direction"
							checked={reverseDirection}
							onChange={(value) => setAttributes({ reverseDirection: value })}
							className="checkbox"
						/>
					</div>
					<div className="row">
						<CheckboxControl
							label="Mobile fit"
							checked={mobileFit}
							onChange={(value) => setAttributes({ mobileFit: value })}
							className="checkbox"
						/>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
