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

import IMAGE1 from './assets/1.jpg'
import MIMAGE1 from './assets/m-1.jpg'
import IMAGE2 from './assets/2.jpg'
import MIMAGE2 from './assets/m-2.jpg'
import IMAGE3 from './assets/3.jpg'
import MIMAGE3 from './assets/m-3.jpg'
import IMAGE4 from './assets/4.jpg'
import MIMAGE4 from './assets/m-4.jpg'
import IMAGE5 from './assets/5.jpg'
import MIMAGE5 from './assets/m-5.jpg'
import IMAGE6 from './assets/6.jpg'
import MIMAGE6 from './assets/m-6.jpg'
import IMAGE7 from './assets/7.jpg'
import MIMAGE7 from './assets/m-7.jpg'
import IMAGE8 from './assets/8.jpg'
import MIMAGE8 from './assets/m-8.jpg'
import IMAGE9 from './assets/9.jpg'
import MIMAGE9 from './assets/m-9.jpg'
import IMAGE10 from './assets/10.jpg'
import MIMAGE10 from './assets/m-10.jpg'
import IMAGE11 from './assets/11.jpg'
import MIMAGE11 from './assets/m-11.jpg'
import IMAGE12 from './assets/12.jpg'
import MIMAGE12 from './assets/m-12.jpg'
import IMAGE13 from './assets/13.jpg'
import MIMAGE13 from './assets/m-13.jpg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, title, items1, items2, blue } = attributes

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

	const removeItem1 = (tab) => {
		setAttributes({
			items1: items1.filter((item) => item.name !== tab.name),
		})
	}

	const addItem1 = (name) => {
		setAttributes({
			items1: [
				...items1,
				{
					name: name,
					title: 'New',
					description: '',
					button: '',
					target: '',
					primaryButton: '',
					primaryTarget: '',
					image: {
						url: '',
						alt: '',
					},
					mImage: {
						url: '',
						alt: '',
					},
					whiteText: false,
					big: false,
					mHide: false,
					green: false,
				},
			],
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

	const removeItem2 = (tab) => {
		setAttributes({
			items2: items2.filter((item) => item.name !== tab.name),
		})
	}

	const addItem2 = (name) => {
		setAttributes({
			items2: [
				...items2,
				{
					name: name,
					title: 'New',
					description: '',
					button: '',
					target: '',
					primaryButton: '',
					primaryTarget: '',
					image: {
						url: '',
						alt: '',
					},
					mImage: {
						url: '',
						alt: '',
					},
					whiteText: false,
					big: false,
					mHide: false,
					green: false,
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Posts'}>
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
					<TextControl
						label="Title"
						value={title}
						className="input"
						onChange={(value) => setAttributes({ title: value })}
					/>
					<TabPanel tabs={items1}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Tags"
										help="You could use multiple tags by separating them by comma"
										value={tab.tags}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'tags', value)}
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
									<TextareaControl
										label="Description"
										value={tab.description}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'description', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Button"
										value={tab.button}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'button', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Button Link"
										value={tab.target}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'target', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Primary button"
										value={tab.primaryButton}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'primaryButton', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Primary Button Link"
										value={tab.primaryTarget}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'primaryTarget', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">
										<MediaUpload
											onSelect={(value) => setItemAttribute1(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == '1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url == '2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url == '3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url == '4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url == '5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url == '6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.image.url == '7.jpg' ? (
														<img src={IMAGE7} alt="image" />
													) : tab.image.url == '8.jpg' ? (
														<img src={IMAGE8} alt="image" />
													) : tab.image.url == '9.jpg' ? (
														<img src={IMAGE9} alt="image" />
													) : tab.image.url == '10.jpg' ? (
														<img src={IMAGE10} alt="image" />
													) : tab.image.url == '11.jpg' ? (
														<img src={IMAGE11} alt="image" />
													) : tab.image.url == '12.jpg' ? (
														<img src={IMAGE12} alt="image" />
													) : tab.image.url == '13.jpg' ? (
														<img src={IMAGE13} alt="image" />
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
											onClick={() => setItemAttribute1(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItemAttribute1(tab, 'image', { url: '1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItemAttribute1(tab, 'image', { url: '2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItemAttribute1(tab, 'image', { url: '3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItemAttribute1(tab, 'image', { url: '4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItemAttribute1(tab, 'image', { url: '5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItemAttribute1(tab, 'image', { url: '6.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n7"
											onClick={() => setItemAttribute1(tab, 'image', { url: '7.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n8"
											onClick={() => setItemAttribute1(tab, 'image', { url: '8.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n9"
											onClick={() => setItemAttribute1(tab, 'image', { url: '9.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n10"
											onClick={() => setItemAttribute1(tab, 'image', { url: '10.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n11"
											onClick={() => setItemAttribute1(tab, 'image', { url: '11.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n12"
											onClick={() => setItemAttribute1(tab, 'image', { url: '12.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n13"
											onClick={() => setItemAttribute1(tab, 'image', { url: '13.jpg', alt: '' })}
										/>
									</BaseControl>
									<BaseControl label="Mobile background">
										<MediaUpload
											onSelect={(value) => setItemAttribute1(tab, 'mImage', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.mImage.url == 'm-1.jpg' ? (
														<img src={MIMAGE1} alt="image" />
													) : tab.mImage.url == 'm-2.jpg' ? (
														<img src={MIMAGE2} alt="image" />
													) : tab.mImage.url == 'm-3.jpg' ? (
														<img src={MIMAGE3} alt="image" />
													) : tab.mImage.url == 'm-4.jpg' ? (
														<img src={MIMAGE4} alt="image" />
													) : tab.mImage.url == 'm-5.jpg' ? (
														<img src={MIMAGE5} alt="image" />
													) : tab.mImage.url == 'm-6.jpg' ? (
														<img src={MIMAGE6} alt="image" />
													) : tab.mImage.url == 'm-7.jpg' ? (
														<img src={MIMAGE7} alt="image" />
													) : tab.mImage.url == 'm-8.jpg' ? (
														<img src={MIMAGE8} alt="image" />
													) : tab.mImage.url == 'm-9.jpg' ? (
														<img src={MIMAGE9} alt="image" />
													) : tab.mImage.url == 'm-10.jpg' ? (
														<img src={MIMAGE10} alt="image" />
													) : tab.mImage.url == 'm-11.jpg' ? (
														<img src={MIMAGE11} alt="image" />
													) : tab.mImage.url == 'm-12.jpg' ? (
														<img src={MIMAGE12} alt="image" />
													) : tab.mImage.url == 'm-13.jpg' ? (
														<img src={MIMAGE13} alt="image" />
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
											onClick={() => setItemAttribute1(tab, 'mImage', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-6.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n7"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-7.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n8"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-8.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n9"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-9.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n10"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-10.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n11"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-11.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n12"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-12.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n13"
											onClick={() => setItemAttribute1(tab, 'mImage', { url: 'm-13.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								<div className="row">
									<CheckboxControl
										label="Large image"
										checked={tab.big}
										onChange={(value) => setItemAttribute1(tab, 'big', value)}
										className="checkbox"
									/>
								</div>
								<div className="row">
									<CheckboxControl
										label="White text"
										checked={tab.whiteText}
										onChange={(value) => setItemAttribute1(tab, 'whiteText', value)}
										className="checkbox"
									/>
								</div>
								<div className="row">
									<CheckboxControl
										label="Mobile hidden"
										checked={tab.mHide}
										onChange={(value) => setItemAttribute1(tab, 'mHide', value)}
										className="checkbox"
									/>
								</div>
								<div className="row">
									<CheckboxControl
										label="Green buttons"
										checked={tab.green}
										onChange={(value) => setItemAttribute1(tab, 'green', value)}
										className="checkbox"
									/>
								</div>
								{items1.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem1(tab)}>
										Remove
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem1(Math.random())}>
						Add new
					</Button>
					<TabPanel tabs={items2}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Tags"
										help="You could use multiple tags by separating them by comma"
										value={tab.tags}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'tags', value)}
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
									<TextareaControl
										label="Description"
										help="You could use all HTML tags in the description field."
										value={tab.description}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'description', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Button"
										value={tab.button}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'button', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Button Link"
										value={tab.target}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'target', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Primary button"
										value={tab.primaryButton}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'primaryButton', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Primary Button Link"
										value={tab.primaryTarget}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'primaryTarget', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Background">
										<MediaUpload
											onSelect={(value) => setItemAttribute2(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == '1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url == '2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url == '3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url == '4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url == '5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url == '6.jpg' ? (
														<img src={IMAGE6} alt="image" />
													) : tab.image.url == '7.jpg' ? (
														<img src={IMAGE7} alt="image" />
													) : tab.image.url == '8.jpg' ? (
														<img src={IMAGE8} alt="image" />
													) : tab.image.url == '9.jpg' ? (
														<img src={IMAGE9} alt="image" />
													) : tab.image.url == '10.jpg' ? (
														<img src={IMAGE10} alt="image" />
													) : tab.image.url == '11.jpg' ? (
														<img src={IMAGE11} alt="image" />
													) : tab.image.url == '12.jpg' ? (
														<img src={IMAGE12} alt="image" />
													) : tab.image.url == '13.jpg' ? (
														<img src={IMAGE13} alt="image" />
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
											onClick={() => setItemAttribute2(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItemAttribute2(tab, 'image', { url: '1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItemAttribute2(tab, 'image', { url: '2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItemAttribute2(tab, 'image', { url: '3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItemAttribute2(tab, 'image', { url: '4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItemAttribute2(tab, 'image', { url: '5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItemAttribute2(tab, 'image', { url: '6.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n7"
											onClick={() => setItemAttribute2(tab, 'image', { url: '7.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n8"
											onClick={() => setItemAttribute2(tab, 'image', { url: '8.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n9"
											onClick={() => setItemAttribute2(tab, 'image', { url: '9.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n10"
											onClick={() => setItemAttribute2(tab, 'image', { url: '10.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n11"
											onClick={() => setItemAttribute2(tab, 'image', { url: '11.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n12"
											onClick={() => setItemAttribute2(tab, 'image', { url: '12.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n13"
											onClick={() => setItemAttribute2(tab, 'image', { url: '13.jpg', alt: '' })}
										/>
									</BaseControl>
									<BaseControl label="Mobile background">
										<MediaUpload
											onSelect={(value) => setItemAttribute2(tab, 'mImage', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.mImage.url == 'm-1.jpg' ? (
														<img src={MIMAGE1} alt="image" />
													) : tab.mImage.url == 'm-2.jpg' ? (
														<img src={MIMAGE2} alt="image" />
													) : tab.mImage.url == 'm-3.jpg' ? (
														<img src={MIMAGE3} alt="image" />
													) : tab.mImage.url == 'm-4.jpg' ? (
														<img src={MIMAGE4} alt="image" />
													) : tab.mImage.url == 'm-5.jpg' ? (
														<img src={MIMAGE5} alt="image" />
													) : tab.mImage.url == 'm-6.jpg' ? (
														<img src={MIMAGE6} alt="image" />
													) : tab.mImage.url == 'm-7.jpg' ? (
														<img src={MIMAGE7} alt="image" />
													) : tab.mImage.url == 'm-8.jpg' ? (
														<img src={MIMAGE8} alt="image" />
													) : tab.mImage.url == 'm-9.jpg' ? (
														<img src={MIMAGE9} alt="image" />
													) : tab.mImage.url == 'm-10.jpg' ? (
														<img src={MIMAGE10} alt="image" />
													) : tab.mImage.url == 'm-11.jpg' ? (
														<img src={MIMAGE11} alt="image" />
													) : tab.mImage.url == 'm-12.jpg' ? (
														<img src={MIMAGE12} alt="image" />
													) : tab.mImage.url == 'm-13.jpg' ? (
														<img src={MIMAGE13} alt="image" />
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
											onClick={() => setItemAttribute2(tab, 'mImage', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-6.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n7"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-7.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n8"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-8.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n9"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-9.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n10"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-10.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n11"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-11.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n12"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-12.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n13"
											onClick={() => setItemAttribute2(tab, 'mImage', { url: 'm-13.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								<div className="row">
									<CheckboxControl
										label="Large image"
										checked={tab.big}
										onChange={(value) => setItemAttribute2(tab, 'big', value)}
										className="checkbox"
									/>
								</div>
								<div className="row">
									<CheckboxControl
										label="White text"
										checked={tab.whiteText}
										onChange={(value) => setItemAttribute2(tab, 'whiteText', value)}
										className="checkbox"
									/>
								</div>
								<div className="row">
									<CheckboxControl
										label="Mobile hidden"
										checked={tab.mHide}
										onChange={(value) => setItemAttribute2(tab, 'mHide', value)}
										className="checkbox"
									/>
								</div>
								<div className="row">
									<CheckboxControl
										label="Green buttons"
										checked={tab.green}
										onChange={(value) => setItemAttribute2(tab, 'green', value)}
										className="checkbox"
									/>
								</div>
								{items2.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem2(tab)}>
										Remove
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem2(Math.random())}>
						Add new
					</Button>
				</div>
				<div className="row">
					<CheckboxControl
						label="Blue theme"
						checked={blue}
						onChange={(value) => setAttributes({ blue: value })}
						className="checkbox"
					/>
				</div>
			</Placeholder>
		</div>
	)
}
