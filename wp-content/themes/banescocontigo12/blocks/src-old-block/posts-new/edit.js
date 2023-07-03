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

import IMAGE1 from './assets/1.png'
import IMAGE2 from './assets/2.png'
import IMAGE3 from './assets/3.png'
import IMAGE4 from './assets/4.png'
import IMAGE5 from './assets/5.png'
import IMAGE6 from './assets/6.png'
import IMAGE7 from './assets/7.png'
import IMAGE8 from './assets/8.png'
import MIMAGE1 from './assets/m-1.png'
import MIMAGE2 from './assets/m-2.png'
import MIMAGE3 from './assets/m-3.png'
import MIMAGE4 from './assets/m-4.png'
import MIMAGE5 from './assets/m-5.png'
import MIMAGE6 from './assets/m-6.png'
import MIMAGE7 from './assets/m-7.png'
import MIMAGE8 from './assets/m-8.png'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, title, items } = attributes

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
			<Placeholder label={'Posts new'}>
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
				<div className="row">
					<TextControl
						label="Title"
						value={title}
						className="input"
						onChange={(value) => setAttributes({ title: value })}
					/>
				</div>
				<TabPanel tabs={items}>
					{(tab) => (
						<Placeholder className={'placeholder'}>
							<div className="row">
								<TextControl
									label="Tags"
									help="You could use multiple tags by separating them by comma"
									value={tab.tags}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'tags', value)}
								/>
							</div>
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
									label="Button"
									value={tab.button}
									className="input"
									onChange={(value) => setItemAttribute(tab, 'button', value)}
								/>
							</div>
							<div className="row">
								<TextControl
									label="Button Link"
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
												{tab.image.url == '1.png' ? (
													<img src={IMAGE1} alt="image" />
												) : tab.image.url == '2.png' ? (
													<img src={IMAGE2} alt="image" />
												) : tab.image.url == '3.png' ? (
													<img src={IMAGE3} alt="image" />
												) : tab.image.url == '4.png' ? (
													<img src={IMAGE4} alt="image" />
												) : tab.image.url == '5.png' ? (
													<img src={IMAGE5} alt="image" />
												) : tab.image.url == '6.png' ? (
													<img src={IMAGE6} alt="image" />
												) : tab.image.url == '7.png' ? (
													<img src={IMAGE7} alt="image" />
												) : tab.image.url == '8.png' ? (
													<img src={IMAGE8} alt="image" />
												) : tab.image.url ? (
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
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n1"
										onClick={() => setItemAttribute(tab, 'image', { url: '1.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n2"
										onClick={() => setItemAttribute(tab, 'image', { url: '2.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n3"
										onClick={() => setItemAttribute(tab, 'image', { url: '3.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n4"
										onClick={() => setItemAttribute(tab, 'image', { url: '4.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n5"
										onClick={() => setItemAttribute(tab, 'image', { url: '5.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n6"
										onClick={() => setItemAttribute(tab, 'image', { url: '6.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n7"
										onClick={() => setItemAttribute(tab, 'image', { url: '7.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n8"
										onClick={() => setItemAttribute(tab, 'image', { url: '8.png', alt: '' })}
									/>
								</BaseControl>
								<BaseControl label="Mobile image">
									<MediaUpload
										onSelect={(value) => setItemAttribute(tab, 'mImage', value)}
										type="image"
										render={({ open }) => (
											<Button className="button" onClick={open}>
												{tab.mImage.url == 'm-1.png' ? (
													<img src={MIMAGE1} alt="image" />
												) : tab.mImage.url === 'm-2.png' ? (
													<img src={MIMAGE2} alt="image" />
												) : tab.mImage.url === 'm-3.png' ? (
													<img src={MIMAGE3} alt="image" />
												) : tab.mImage.url === 'm-4.png' ? (
													<img src={MIMAGE4} alt="image" />
												) : tab.mImage.url === 'm-5.png' ? (
													<img src={MIMAGE5} alt="image" />
												) : tab.mImage.url === 'm-6.png' ? (
													<img src={MIMAGE6} alt="image" />
												) : tab.mImage.url === 'm-7.png' ? (
													<img src={MIMAGE7} alt="image" />
												) : tab.mImage.url === 'm-8.png' ? (
													<img src={MIMAGE8} alt="image" />
												) : tab.mImage.url ? (
													<img src={tab.mImage.url} alt="image" />
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
										onClick={() => setItemAttribute(tab, 'mImage', { url: '', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n1"
										onClick={() => setItemAttribute(tab, 'mImage', { url: 'm-1.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n2"
										onClick={() => setItemAttribute(tab, 'mImage', { url: 'm-2.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n3"
										onClick={() => setItemAttribute(tab, 'mImage', { url: 'm-3.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n4"
										onClick={() => setItemAttribute(tab, 'mImage', { url: 'm-4.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n5"
										onClick={() => setItemAttribute(tab, 'mImage', { url: 'm-5.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n6"
										onClick={() => setItemAttribute(tab, 'mImage', { url: 'm-6.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n7"
										onClick={() => setItemAttribute(tab, 'mImage', { url: 'm-7.png', alt: '' })}
									/>
									<Button
										icon="cover-image"
										showTooltip="true"
										label="Set default image"
										className="default-image-button n8"
										onClick={() => setItemAttribute(tab, 'mImage', { url: 'm-8.png', alt: '' })}
									/>
								</BaseControl>
							</div>
							<div className="row">
								<CheckboxControl
									label="Out of borders"
									checked={tab.big}
									onChange={(value) => setItemAttribute(tab, 'big', value)}
									className="checkbox"
								/>
							</div>
						</Placeholder>
					)}
				</TabPanel>
			</Placeholder>
		</div>
	)
}
