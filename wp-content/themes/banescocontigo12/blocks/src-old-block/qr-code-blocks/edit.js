import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	TextareaControl,
	CheckboxControl,
	Button,
} from '@wordpress/components'

import IMAGE1 from './assets/appqr.png'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, items } = attributes

	const setItemAttribute = (tab, attribute, value) => {
		setAttributes({
			items: items.map((item) => {
				if (item.name === tab.name) {
					return {
						...item,
						[attribute]: value,
					}
				}
				return item
			}),
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'QR Code Blocks'}>
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
				
				<TabPanel tabs={items}>
					{(tab) => (
						<Placeholder className={'placeholder'}>
							<div className="row">
								<TextControl
									label="Title"
									value={tab.title}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'title', value)}
								/>
							</div>
							<div className="row">
								<TextareaControl
									label="Description"
									help="You could use all HTML tags in the description field."
									value={tab.description}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'description', value)}
								/>
							</div>
							<div className="row">
								<TextControl
									label="Link"
									value={tab.target}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'target', value)}
								/>
							</div>
							<div className="row">
								<BaseControl label="Image">
									<MediaUpload
										onSelect={(value) => setItemAttribute(tab, 'image', value)}
										type="image"
										render={({ open }) => (
											<Button className="button" onClick={open}>
												{tab.image.url ? (
													<img src={tab.image.url} alt="image" />
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
										onClick={() => setItemAttribute(tab, 'image', { url: '', alt: '' })}
									/>
									
								</BaseControl>
								
							</div>
							
						</Placeholder>
					)}
				</TabPanel>
			</Placeholder>
		</div>
	)
}
