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

import image from './assets/icon.svg'
import back1 from './assets/background-1.jpg'
import back2 from './assets/background-2.jpg'
import back3 from './assets/background-3.jpg'
import mBack1 from './assets/background-1-mobile.jpg'
import mBack2 from './assets/background-2-mobile.jpg'
import mBack3 from './assets/background-3-mobile.jpg'

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
		title,
		description,
		button,
		target,
		openChat,
		icon,
		background,
		mBackground,
	} = attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Attention'}>
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
								value={title}
								className="input"
								onChange={(value) => setAttributes({ title: value })}
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextareaControl
								label="Description"
								help="You could use all HTML tags in the description field."
								value={description}
								className="input"
								onChange={(value) => setAttributes({ description: value })}
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Button"
								value={button}
								className="input"
								onChange={(value) => setAttributes({ button: value })}
							/>
							<TextControl
								label="Button Link"
								value={target}
								className="input"
								onChange={(value) => setAttributes({ target: value })}
							/>
						</div>
						<div className="row">
							<CheckboxControl
								label="Open chat dropdown insted"
								help="Replaces the behavior of the button."
								checked={openChat}
								onChange={(value) => setAttributes({ openChat: value })}
								className="checkbox"
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<BaseControl label="Icon" className="grey">
								<MediaUpload
									onSelect={(value) => setAttributes({ icon: value })}
									type="image"
									render={({ open }) => (
										<Button className="button" onClick={open}>
											{icon.url == 'icon.svg' ? (
												<img src={image} alt="icon" />
											) : icon.url ? (
												<img src={icon.url} alt="icon" />
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
									onClick={() => setAttributes({ icon: { url: '', alt: '' } })}
								/>
								<Button
									icon="cover-image"
									showTooltip="true"
									label="Set default image"
									className="default-image-button"
									onClick={() => setAttributes({ icon: { url: 'icon.svg', alt: '' } })}
								/>
							</BaseControl>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<BaseControl label="Background (optinal)">
								<MediaUpload
									onSelect={(value) => setAttributes({ background: value })}
									type="image"
									render={({ open }) => (
										<Button className="button" onClick={open}>
											{background.url === 'background-1.jpg' ? (
												<img src={back1} alt="background" />
											) : background.url === 'background-2.jpg' ? (
												<img src={back2} alt="background" />
											) : background.url === 'background-3.jpg' ? (
												<img src={back3} alt="background" />
											) : background.url ? (
												<img src={background.url} alt="background" />
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
									label="Set image #1"
									className="default-image-button n1"
									onClick={() => setAttributes({ background: { url: 'background-1.jpg', alt: '' } })}
								/>
								<Button
									icon="cover-image"
									showTooltip="true"
									label="Set image #2"
									className="default-image-button n2"
									onClick={() => setAttributes({ background: { url: 'background-2.jpg', alt: '' } })}
								/>
								<Button
									icon="cover-image"
									showTooltip="true"
									label="Set image #3"
									className="default-image-button n3"
									onClick={() => setAttributes({ background: { url: 'background-3.jpg', alt: '' } })}
								/>
							</BaseControl>
							<BaseControl label="Mobile background (optinal)">
								<MediaUpload
									onSelect={(value) => setAttributes({ mBackground: value })}
									type="image"
									render={({ open }) => (
										<Button className="button" onClick={open}>
											{mBackground.url === 'background-1-mobile.jpg' ? (
												<img src={mBack1} alt="background" />
											) : mBackground.url === 'background-2-mobile.jpg' ? (
												<img src={mBack2} alt="background" />
											) : mBackground.url === 'background-3-mobile.jpg' ? (
												<img src={mBack3} alt="background" />
											) : mBackground.url ? (
												<img src={mBackground.url} alt="background" />
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
									label="Set image #1"
									className="default-image-button n1"
									onClick={() => setAttributes({ mBackground: { url: 'background-1-mobile.jpg', alt: '' } })}
								/>
								<Button
									icon="cover-image"
									showTooltip="true"
									label="Set image #2"
									className="default-image-button n2"
									onClick={() => setAttributes({ mBackground: { url: 'background-2-mobile.jpg', alt: '' } })}
								/>
								<Button
									icon="cover-image"
									showTooltip="true"
									label="Set image #2"
									className="default-image-button n3"
									onClick={() => setAttributes({ mBackground: { url: 'background-3-mobile.jpg', alt: '' } })}
								/>
							</BaseControl>
						</div>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
