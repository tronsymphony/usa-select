import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
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

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, title, swicher1, swicher2, counter, input1, input2, slider1, slider2, counter2, button } = attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Tabs Loan'}>
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
							label="Slider 2 Title"
							value={slider2.title.desktop}
							className="input"
							onChange={(value) => {
								const newLink = { ...slider2 }
								newLink.title.desktop = value
								setAttributes({ slider2: newLink })
							}}
						/>
						<TextControl
							label="Mobile (optional)"
							value={slider2.title.mobile}
							className="input"
							onChange={(value) => {
								const newLink = { ...slider2 }
								newLink.title.mobile = value
								setAttributes({ slider2: newLink })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Counter 2 Title"
							value={counter2.title.desktop}
							className="input"
							onChange={(value) => {
								const newLink = { ...counter2 }
								newLink.title.desktop = value
								setAttributes({ counter2: newLink })
							}}
						/>
						<TextControl
							label="Mobile (optional)"
							value={counter2.title.mobile}
							className="input"
							onChange={(value) => {
								const newLink = { ...counter2 }
								newLink.title.mobile = value
								setAttributes({ counter2: newLink })
							}}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Button"
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
				</div>
			</Placeholder>
		</div>
	)
}
