import { useBlockProps, MediaUpload, InspectorAdvancedControls, useInnerBlocksProps } from '@wordpress/block-editor'

import {
	Placeholder,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	TextareaControl,
	SelectControl,
	Button,
	BaseControl,
	ExternalLink,
	CheckboxControl
} from '@wordpress/components'

import IMAGE1 from './assets/image-1.jpg'
import IMAGE2 from './assets/image-2.jpg'
import IMAGE3 from './assets/image-3.jpg'
import IMAGE4 from './assets/image-4.jpg'
import IMAGE5 from './assets/image-5.jpg'
import IMAGE6 from './assets/image-6.jpg'

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
		columns,
		title,
		tabtitle,
		content,
		items1,
		items2,
		items3,
		feature_image1,
		feature_image2,
		feature_image3,
		banner_image,
		banner_title,
		banner_text,
		initial_opened,
		modal_title,
		modal_text
	} = attributes
	const innerBlocksProps = useInnerBlocksProps();


	const setItemAttribute1 = (tab, attribute, value) => {
		setAttributes({
			items1: items1.map((item) => {
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


	const setItemAttribute2 = (tab, attribute, value) => {
		setAttributes({
			items2: items2.map((item) => {
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


	const setItemAttribute3 = (tab, attribute, value) => {
		setAttributes({
			items3: items3.map((item) => {
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
			<Placeholder label={'Accordions tabs'}>
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

					<TabPanel tabs={items1}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Tab Title"
										value={tab.tabtitle}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'tabtitle', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="content"
										value={tab.content}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'content', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">
										<MediaUpload
											onSelect={(value) => setItemAttribute1(tab, 'feature_image1', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.feature_image1.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.feature_image1.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.feature_image1.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.feature_image1.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.feature_image1.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.feature_image1.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.feature_image1.url ? (
														<img src={tab.feature_image1.url} alt="image" />
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
											onClick={() => setAttributes({ feature_image1: { url: '', alt: '' } })}
										// onClick
										/>

									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="feature_title1"
										value={tab.feature_title1}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'feature_title1', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">

										<MediaUpload
											onSelect={(value) => setItemAttribute1(tab, 'feature_image2', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.feature_image2.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.feature_image2.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.feature_image2.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.feature_image2.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.feature_image2.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.feature_image2.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.feature_image2.url ? (
														<img src={tab.feature_image2.url} alt="image" />
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
											onClick={() => setAttributes({ feature_image2: { url: '', alt: '' } })}
										// onClick
										/>

									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="feature_title2"
										value={tab.feature_title2}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'feature_title2', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">

										<MediaUpload
											onSelect={(value) => setItemAttribute1(tab, 'feature_image3', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.feature_image3.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.feature_image3.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.feature_image3.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.feature_image3.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.feature_image3.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.feature_image3.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.feature_image3.url ? (
														<img src={tab.feature_image3.url} alt="image" />
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
											onClick={() => setAttributes({ feature_image3: { url: '', alt: '' } })}
										/>



									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="feature_title3"
										value={tab.feature_title3}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'feature_title3', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">

										<MediaUpload
											onSelect={(value) => setItemAttribute1(tab, 'banner_image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.banner_image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.banner_image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.banner_image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.banner_image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.banner_image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.banner_image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.banner_image.url ? (
														<img src={tab.banner_image.url} alt="image" />
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
											onClick={() => setAttributes({ banner_image: { url: '', alt: '' } })}
										/>

									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="banner_title"
										value={tab.banner_title}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'banner_title', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="banner_text"
										value={tab.banner_text}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'banner_text', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="modal_title"
										value={tab.modal_title}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'modal_title', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="modal_text"
										value={tab.modal_text}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'modal_text', value)}
									/>
								</div>
								<div className="row">
									<CheckboxControl
										label="Initial opened initial_opened"
										checked={tab.initial_opened}
										onChange={(value) => setItemAttribute1(tab, 'initial_opened', value)}
										className="checkbox"
									/>
								</div>

							</Placeholder>
						)}
					</TabPanel>

					<TabPanel tabs={items2}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Tab Title"
										value={tab.tabtitle}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'tabtitle', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="content"
										value={tab.content}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'content', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">


										<MediaUpload
											onSelect={(value) => setItemAttribute2(tab, 'feature_image1', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.feature_image1?.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.feature_image1?.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.feature_image1?.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.feature_image1?.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.feature_image1?.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.feature_image1?.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.feature_image1?.url ? (
														<img src={tab.feature_image1?.url} alt="image" />
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
											onClick={() => setAttributes({ feature_image1: { url: '', alt: '' } })}
										// onClick
										/>



									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="feature_title1"
										value={tab.feature_title1}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'feature_title1', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">


										<MediaUpload
											onSelect={(value) => setItemAttribute2(tab, 'feature_image2', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.feature_image2.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.feature_image2.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.feature_image2.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.feature_image2.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.feature_image2.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.feature_image2.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.feature_image2.url ? (
														<img src={tab.feature_image2.url} alt="image" />
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
											onClick={() => setAttributes({ feature_image2: { url: '', alt: '' } })}
										// onClick
										/>

									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="feature_title2"
										value={tab.feature_title2}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'feature_title2', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">



										<MediaUpload
											onSelect={(value) => setItemAttribute2(tab, 'feature_image3', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.feature_image3?.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.feature_image3?.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.feature_image3?.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.feature_image3?.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.feature_image3?.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.feature_image3?.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.feature_image3?.url ? (
														<img src={tab.feature_image3.url} alt="image" />
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
											onClick={() => setAttributes({ feature_image3: { url: '', alt: '' } })}
										// onClick
										/>


									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="feature_title3"
										value={tab.feature_title3}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'feature_title3', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">
										<MediaUpload
											onSelect={(value) => setItemAttribute2(tab, 'banner_image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.banner_image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.banner_image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.banner_image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.banner_image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.banner_image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.banner_image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.banner_image.url ? (
														<img src={tab.banner_image.url} alt="image" />
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
											onClick={() => setAttributes({ banner_image: { url: '', alt: '' } })}
										// onClick
										/>

									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="banner_title"
										value={tab.banner_title}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'banner_title', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="banner_text"
										value={tab.banner_text}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'banner_text', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="modal_title"
										value={tab.modal_title}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'modal_title', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="modal_text"
										value={tab.modal_text}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'modal_text', value)}
									/>
								</div>

								<div className="row">
									<CheckboxControl
										label="Initial opened initial_opened"
										checked={tab.initial_opened}
										onChange={(value) => setItemAttribute2(tab, 'initial_opened', value)}
										className="checkbox"
									/>
								</div>

							</Placeholder>
						)}
					</TabPanel>

					<TabPanel tabs={items3}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Tab Title"
										value={tab.tabtitle}
										className="input"
										onChange={(value) => setItemAttribute3(tab, 'tabtitle', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItemAttribute3(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="content"
										value={tab.content}
										className="input"
										onChange={(value) => setItemAttribute3(tab, 'content', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">


										<MediaUpload
											onSelect={(value) => setItemAttribute3(tab, 'feature_image1', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.feature_image1?.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.feature_image1?.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.feature_image1?.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.feature_image1?.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.feature_image1?.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.feature_image1?.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.feature_image1?.url ? (
														<img src={tab.feature_image1.url} alt="image" />
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
											onClick={() => setAttributes({ feature_image1: { url: '', alt: '' } })}
										// onClick
										/>

									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="feature_title1"
										value={tab.feature_title1}
										className="input"
										onChange={(value) => setItemAttribute3(tab, 'feature_title1', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">



										<MediaUpload
											onSelect={(value) => setItemAttribute3(tab, 'feature_image2', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.feature_image2?.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.feature_image2?.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.feature_image2?.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.feature_image2?.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.feature_image2?.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.feature_image2?.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.feature_image2?.url ? (
														<img src={tab.feature_image2.url} alt="image" />
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
											onClick={() => setAttributes({ feature_image2: { url: '', alt: '' } })}
										// onClick
										/>

									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="feature_title2"
										value={tab.feature_title2}
										className="input"
										onChange={(value) => setItemAttribute3(tab, 'feature_title2', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">

										<MediaUpload
											onSelect={(value) => setItemAttribute3(tab, 'feature_image3', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.feature_image3.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.feature_image3.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.feature_image3.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.feature_image3.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.feature_image3.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.feature_image3.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.feature_image3.url ? (
														<img src={tab.feature_image3.url} alt="image" />
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
											onClick={() => setAttributes({ feature_image3: { url: '', alt: '' } })}
										// onClick
										/>

									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="feature_title3"
										value={tab.feature_title3}
										className="input"
										onChange={(value) => setItemAttribute3(tab, 'feature_title3', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">
										<MediaUpload
											onSelect={(value) => setItemAttribute3(tab, 'banner_image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.banner_image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.banner_image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.banner_image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.banner_image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.banner_image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.banner_image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.banner_image.url ? (
														<img src={tab.banner_image.url} alt="image" />
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
											onClick={() => setAttributes({ banner_image: { url: '', alt: '' } })}
										// onClick
										/>

									</BaseControl>
								</div>
								<div className="row">
									<TextControl
										label="banner_title"
										value={tab.banner_title}
										className="input"
										onChange={(value) => setItemAttribute3(tab, 'banner_title', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="banner_text"
										value={tab.banner_text}
										className="input"
										onChange={(value) => setItemAttribute3(tab, 'banner_text', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="modal_title"
										value={tab.modal_title}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'modal_title', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="modal_text"
										value={tab.modal_text}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'modal_text', value)}
									/>
								</div>

								<div className="row">
									<CheckboxControl
										label="Initial opened initial_opened"
										checked={tab.initial_opened}
										onChange={(value) => setItemAttribute3(tab, 'initial_opened', value)}
										className="checkbox"
									/>
								</div>

							</Placeholder>
						)}
					</TabPanel>

					<div className="row">
						<SelectControl
							label="Columns"
							value={columns}
							className="input"
							onChange={(value) => setAttributes({ columns: value })}
							options={[
								{
									label: '1',
									value: '1',
								},
								{
									label: '2',
									value: '2',
								},
							]}
						/>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
