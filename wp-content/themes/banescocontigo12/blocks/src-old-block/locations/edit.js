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
	const {
		paddings,
		margins,
		gradient,
		title,
		placeholder,
		checkbox1,
		checkbox2,
		checkbox3,
		checkbox4,
		checkbox5,
		nearMe,
		results,
		link1,
		link1target,
		link2,
		link2target,
		indications,
		mobileFilterButton,
		mobileBottomButton,
	} = attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Locations'}>
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
					<Flex>
						<FlexBlock>
							<TextControl
								label="Title"
								value={title}
								className="input"
								onChange={(value) => setAttributes({ title: value })}
							/>
						</FlexBlock>
					</Flex>
					<Flex>
						<FlexBlock>
							<TextControl
								label="Search placeholder"
								value={placeholder}
								className="input"
								onChange={(value) => setAttributes({ placeholder: value })}
							/>
						</FlexBlock>
					</Flex>
					<div className="row">
						<TextControl
							label="Checkbox #1"
							value={checkbox1}
							className="input"
							onChange={(value) => setAttributes({ checkbox1: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Checkbox #2"
							value={checkbox2}
							className="input"
							onChange={(value) => setAttributes({ checkbox2: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Checkbox #3"
							value={checkbox3}
							className="input"
							onChange={(value) => setAttributes({ checkbox3: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Checkbox #4"
							value={checkbox4}
							className="input"
							onChange={(value) => setAttributes({ checkbox4: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Checkbox #5"
							value={checkbox5}
							className="input"
							onChange={(value) => setAttributes({ checkbox5: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Near me"
							value={nearMe}
							className="input"
							onChange={(value) => setAttributes({ nearMe: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Results"
							value={results}
							className="input"
							onChange={(value) => setAttributes({ results: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Link #1"
							value={link1}
							className="input"
							onChange={(value) => setAttributes({ link1: value })}
						/>
						<TextControl
							label="Link #1 Target"
							value={link1target}
							className="input"
							onChange={(value) => setAttributes({ link1target: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Link #2"
							value={link2}
							className="input"
							onChange={(value) => setAttributes({ link2: value })}
						/>
						<TextControl
							label="Link #2 Target"
							value={link2target}
							className="input"
							onChange={(value) => setAttributes({ link2target: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Indications"
							value={indications}
							className="input"
							onChange={(value) => setAttributes({ indications: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Mobile Filter Button"
							value={mobileFilterButton}
							className="input"
							onChange={(value) => setAttributes({ mobileFilterButton: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Mobile Bottom Button"
							value={mobileBottomButton}
							className="input"
							onChange={(value) => setAttributes({ mobileBottomButton: value })}
						/>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
