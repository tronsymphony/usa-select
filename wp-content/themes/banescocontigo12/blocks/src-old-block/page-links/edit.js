import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	CheckboxControl,
	TextControl,
	TextareaControl,
	Button,
} from '@wordpress/components'


/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, 
		margins, 
		gradient, 
		linkHref1,
		linkTitle1,
		linkHref2,
		linkTitle2,
		linkHref3,
		linkTitle3,
		linkHref4,
		linkTitle4,
		linkHref5,
		linkTitle5,
		linkActive1,
		linkActive2,
		linkActive3,
		linkActive4,
		linkActive5
	
	} = attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Page Links'}>
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
							label="Title 1"
							value={linkTitle1}
							className="input"
							onChange={(value) => setAttributes({ linkTitle1: value })}
						/>
						<TextControl
							label="Href 1"
							value={linkHref1}
							className="input"
							onChange={(value) => setAttributes({ linkHref1: value })}
						/>
						<CheckboxControl
							label="Link Active?"
							checked={linkActive1.active}
							onChange={(value) => {
								const newLink = { ...linkActive1 }
								newLink.active = value
								setAttributes({ linkActive1: newLink })
							}}
							className="checkbox"
						/>
					</div>
					<div className="row">
						<TextControl
							label="Title 2"
							value={linkTitle2}
							className="input"
							onChange={(value) => setAttributes({ linkTitle2: value })}
						/>
						<TextControl
							label="Href 2"
							value={linkHref2}
							className="input"
							onChange={(value) => setAttributes({ linkHref2: value })}
						/>
						<CheckboxControl
							label="Link Active?"
							checked={linkActive2.active}
							onChange={(value) => {
								const newLink = { ...linkActive2 }
								newLink.active = value
								setAttributes({ linkActive2: newLink })
							}}
							className="checkbox"
						/>
					</div>
					<div className="row">
						<TextControl
							label="Title 3"
							value={linkTitle3}
							className="input"
							onChange={(value) => setAttributes({ linkTitle3: value })}
						/>
						<TextControl
							label="Href 3"
							value={linkHref3}
							className="input"
							onChange={(value) => setAttributes({ linkHref3: value })}
						/>
						<CheckboxControl
							label="Link Active?"
							checked={linkActive3.active}
							onChange={(value) => {
								const newLink = { ...linkActive3 }
								newLink.active = value
								setAttributes({ linkActive3: newLink })
							}}
							className="checkbox"
						/>
					</div>
					<div className="row">
						<TextControl
							label="Title 4"
							value={linkTitle4}
							className="input"
							onChange={(value) => setAttributes({ linkTitle4: value })}
						/>
						<TextControl
							label="Href 4"
							value={linkHref4}
							className="input"
							onChange={(value) => setAttributes({ linkHref4: value })}
						/>
						<CheckboxControl
							label="Link Active?"
							checked={linkActive4.active}
							onChange={(value) => {
								const newLink = { ...linkActive4 }
								newLink.active = value
								setAttributes({ linkActive4: newLink })
							}}
							className="checkbox"
						/>
					</div>
					<div className="row">
						<TextControl
							label="Title 5"
							value={linkTitle5}
							className="input"
							onChange={(value) => setAttributes({ linkTitle5: value })}
						/>
						<TextControl
							label="Href 5"
							value={linkHref5}
							className="input"
							onChange={(value) => setAttributes({ linkHref5: value })}
						/>
						<CheckboxControl
							label="Link Active?"
							checked={linkActive5.active}
							onChange={(value) => {
								const newLink = { ...linkActive5 }
								newLink.active = value
								setAttributes({ linkActive5: newLink })
							}}
							className="checkbox"
						/>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
