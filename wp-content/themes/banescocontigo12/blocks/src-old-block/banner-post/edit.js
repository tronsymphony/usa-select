import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import { Placeholder, BaseControl, Flex, FlexBlock, TextControl, Button } from '@wordpress/components'

import img from './assets/image.jpg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, image } = attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Banner post'}>
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
							<BaseControl label="Image">
								<MediaUpload
									onSelect={(value) => {
										const newValue = { ...image }
										newValue.desktop = value
										setAttributes({ image: newValue })
									}}
									type="image"
									render={({ open }) => (
										<Button className="button" onClick={open}>
											{image.desktop.url == 'image.jpg' ? (
												<img src={img} alt="image" />
											) : image.desktop.url ? (
												<img src={image.desktop.url} alt="image" />
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
										const newValue = { ...image }
										newValue.desktop = { url: '', alt: '' }
										setAttributes({ image: newValue })
									}}
								/>
								<Button
									icon="cover-image"
									showTooltip="true"
									label="Set default image"
									className="default-image-button n1"
									onClick={() => {
										const newValue = { ...image }
										newValue.desktop = { url: 'image.jpg', alt: '' }
										setAttributes({ image: newValue })
									}}
								/>
							</BaseControl>
							<BaseControl label="Mobile image (optional)">
								<MediaUpload
									onSelect={(value) => {
										const newValue = { ...image }
										newValue.mobile = value
										setAttributes({ image: newValue })
									}}
									type="image"
									render={({ open }) => (
										<Button className="button" onClick={open}>
											{image.mobile.url ? <img src={image.mobile.url} alt="image" /> : 'Insert'}
										</Button>
									)}
								/>
								<Button
									icon="dismiss"
									showTooltip="true"
									label="Delete image"
									className="delete-button"
									onClick={() => {
										const newValue = { ...image }
										newValue.mobile = { url: '', alt: '' }
										setAttributes({ image: newValue })
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
