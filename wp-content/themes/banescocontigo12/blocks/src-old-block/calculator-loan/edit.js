import { useBlockProps, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	Flex,
	FlexBlock,
	TextControl,
} from '@wordpress/components'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, title, slider, counter, button, outlinedButton, extra } = attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Calculator Loan'}>
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
						<TextControl
							label="Slider Title"
							value={slider.title.desktop}
							className="input"
							onChange={(value) => {
								const newLink = { ...slider }
								newLink.title.desktop = value
								setAttributes({ slider: newLink })
							}}
						/>
						<TextControl
							label="Mobile (optional)"
							value={slider.title.mobile}
							className="input"
							onChange={(value) => {
								const newLink = { ...slider }
								newLink.title.mobile = value
								setAttributes({ slider: newLink })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Counter Title"
							value={counter.title.desktop}
							className="input"
							onChange={(value) => {
								const newLink = { ...counter }
								newLink.title.desktop = value
								setAttributes({ counter: newLink })
							}}
						/>
						<TextControl
							label="Mobile (optional)"
							value={counter.title.mobile}
							className="input"
							onChange={(value) => {
								const newLink = { ...counter }
								newLink.title.mobile = value
								setAttributes({ counter: newLink })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Counter Default"
							value={counter.count}
							className="input"
							onChange={(value) => {
								const newLink = { ...counter }
								newLink.count = value
								setAttributes({ counter: newLink })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Button Title"
							value={button.title.desktop}
							className="input"
							onChange={(value) => {
								const newLink = { ...button }
								newLink.title.desktop = value
								setAttributes({ button: newLink })
							}}
						/>
						<TextControl
							label="Mobile (optional)"
							value={button.title.mobile}
							className="input"
							onChange={(value) => {
								const newLink = { ...button }
								newLink.title.mobile = value
								setAttributes({ button: newLink })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Button Link"
							value={button.target}
							className="input"
							onChange={(value) => {
								const newLink = { ...button }
								newLink.target = value
								setAttributes({ button: newLink })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Outlined Button Title"
							value={outlinedButton.title.desktop}
							className="input"
							onChange={(value) => {
								const newLink = { ...outlinedButton }
								newLink.title.desktop = value
								setAttributes({ outlinedButton: newLink })
							}}
						/>
						<TextControl
							label="Mobile (optional)"
							value={outlinedButton.title.mobile}
							className="input"
							onChange={(value) => {
								const newValue = { ...outlinedButton }
								newValue.title.mobile = value
								setAttributes({ outlinedButton: newValue })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Hidden Block button"
							value={extra.button}
							className="input"
							onChange={(value) => {
								const newValue = { ...extra }
								newValue.button = value
								setAttributes({ extra: newValue })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Hidden Block title"
							value={extra.title}
							className="input"
							onChange={(value) => {
								const newValue = { ...extra }
								newValue.title = value
								setAttributes({ extra: newValue })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Hidden Block price"
							value={extra.price}
							className="input"
							onChange={(value) => {
								const newValue = { ...extra }
								newValue.price = value
								setAttributes({ extra: newValue })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Hidden Block info"
							value={extra.info}
							className="input"
							onChange={(value) => {
								const newValue = { ...extra }
								newValue.info = value
								setAttributes({ extra: newValue })
							}}
						/>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
