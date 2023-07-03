import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	Button,
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
	const { paddings, margins, gradient, title, content, items1, items2, items3, items4, items5, items6, items7, items8, items9 } = attributes

	const setItem1Attribute = (tab, attribute, value) => {
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
					link: '',
					title: 'New',
					text: '',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	const setItem2Attribute = (tab, attribute, value) => {
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
					link: '',
					title: 'New',
					text: '',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	const setItem3Attribute = (tab, attribute, value) => {
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

	const removeItem3 = (tab) => {
		setAttributes({
			items3: items3.filter((item) => item.name !== tab.name),
		})
	}

	const addItem3 = (name) => {
		setAttributes({
			items3: [
				...items3,
				{
					name: name,
					link: '',
					title: 'New',
					text: '',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	const setItem4Attribute = (tab, attribute, value) => {
		setAttributes({
			items4: items4.map((item) => {
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

	const removeItem4 = (tab) => {
		setAttributes({
			items4: items4.filter((item) => item.name !== tab.name),
		})
	}

	const addItem4 = (name) => {
		setAttributes({
			items4: [
				...items4,
				{
					name: name,
					link: '',
					title: 'New',
					text: '',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	const setItem5Attribute = (tab, attribute, value) => {
		setAttributes({
			items5: items5.map((item) => {
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

	const removeItem5 = (tab) => {
		setAttributes({
			items5: items5.filter((item) => item.name !== tab.name),
		})
	}

	const addItem5 = (name) => {
		setAttributes({
			items5: [
				...items5,
				{
					name: name,
					link: '',
					title: 'New',
					text: '',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	const setItem6Attribute = (tab, attribute, value) => {
		setAttributes({
			items6: items6.map((item) => {
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

	const removeItem6 = (tab) => {
		setAttributes({
			items6: items6.filter((item) => item.name !== tab.name),
		})
	}

	const addItem6 = (name) => {
		setAttributes({
			items6: [
				...items6,
				{
					name: name,
					link: '',
					title: 'New',
					text: '',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	const setItem7Attribute = (tab, attribute, value) => {
		setAttributes({
			items7: items7.map((item) => {
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

	const removeItem7 = (tab) => {
		setAttributes({
			items7: items7.filter((item) => item.name !== tab.name),
		})
	}

	const addItem7 = (name) => {
		setAttributes({
			items7: [
				...items7,
				{
					name: name,
					link: '',
					title: 'New',
					text: '',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	const setItem8Attribute = (tab, attribute, value) => {
		setAttributes({
			items8: items8.map((item) => {
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

	const removeItem8 = (tab) => {
		setAttributes({
			items8: items8.filter((item) => item.name !== tab.name),
		})
	}

	const addItem8 = (name) => {
		setAttributes({
			items8: [
				...items8,
				{
					name: name,
					link: '',
					title: 'New',
					text: '',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	const setItem9Attribute = (tab, attribute, value) => {
		setAttributes({
			items9: items9.map((item) => {
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

	const removeItem9 = (tab) => {
		setAttributes({
			items9: items9.filter((item) => item.name !== tab.name),
		})
	}

	const addItem9 = (name) => {
		setAttributes({
			items9: [
				...items9,
				{
					name: name,
					link: '',
					title: 'New',
					text: '',
					image: {
						url: '',
						alt: '',
					},
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Collections'}>
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
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Content"
								help="You could use all HTML tags in the content field."
								value={content.desktop}
								className="input"
								onChange={(value) => {
									const newValue = { ...content }
									newValue.desktop = value
									setAttributes({ content: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={content.mobile}
								className="input"
								onChange={(value) => {
									const newValue = { ...content }
									newValue.mobile = value
									setAttributes({ content: newValue })
								}}
							/>
						</div>
					</div>
					<TabPanel tabs={items1}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItem1Attribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setItem1Attribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItem1Attribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
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
											onClick={() => setItem1Attribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItem1Attribute(tab, 'image', { url: 'image-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItem1Attribute(tab, 'image', { url: 'image-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItem1Attribute(tab, 'image', { url: 'image-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItem1Attribute(tab, 'image', { url: 'image-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItem1Attribute(tab, 'image', { url: 'image-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItem1Attribute(tab, 'image', { url: 'image-6.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items1.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem1(tab)}>
										Delete
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
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItem2Attribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setItem2Attribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItem2Attribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
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
											onClick={() => setItem2Attribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItem2Attribute(tab, 'image', { url: 'image-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItem2Attribute(tab, 'image', { url: 'image-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItem2Attribute(tab, 'image', { url: 'image-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItem2Attribute(tab, 'image', { url: 'image-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItem2Attribute(tab, 'image', { url: 'image-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItem2Attribute(tab, 'image', { url: 'image-6.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items2.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem2(Math.random())}>
						Add new
					</Button>
					<TabPanel tabs={items3}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItem3Attribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setItem3Attribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItem3Attribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
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
											onClick={() => setItem3Attribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItem3Attribute(tab, 'image', { url: 'image-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItem3Attribute(tab, 'image', { url: 'image-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItem3Attribute(tab, 'image', { url: 'image-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItem3Attribute(tab, 'image', { url: 'image-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItem3Attribute(tab, 'image', { url: 'image-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItem3Attribute(tab, 'image', { url: 'image-6.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items3.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem3(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem3(Math.random())}>
						Add new
					</Button>
					<TabPanel tabs={items4}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItem4Attribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setItem4Attribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItem4Attribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
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
											onClick={() => setItem4Attribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItem4Attribute(tab, 'image', { url: 'image-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItem4Attribute(tab, 'image', { url: 'image-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItem4Attribute(tab, 'image', { url: 'image-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItem4Attribute(tab, 'image', { url: 'image-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItem4Attribute(tab, 'image', { url: 'image-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItem4Attribute(tab, 'image', { url: 'image-6.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items4.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem4(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem4(Math.random())}>
						Add new
					</Button>
					<TabPanel tabs={items5}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItem5Attribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setItem5Attribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItem5Attribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
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
											onClick={() => setItem5Attribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItem5Attribute(tab, 'image', { url: 'image-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItem5Attribute(tab, 'image', { url: 'image-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItem5Attribute(tab, 'image', { url: 'image-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItem5Attribute(tab, 'image', { url: 'image-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItem5Attribute(tab, 'image', { url: 'image-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItem5Attribute(tab, 'image', { url: 'image-6.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items5.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem5(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem5(Math.random())}>
						Add new
					</Button>
					<TabPanel tabs={items6}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItem6Attribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setItem6Attribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItem6Attribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
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
											onClick={() => setItem6Attribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItem6Attribute(tab, 'image', { url: 'image-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItem6Attribute(tab, 'image', { url: 'image-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItem6Attribute(tab, 'image', { url: 'image-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItem6Attribute(tab, 'image', { url: 'image-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItem6Attribute(tab, 'image', { url: 'image-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItem6Attribute(tab, 'image', { url: 'image-6.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items6.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem6(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem6(Math.random())}>
						Add new
					</Button>
					<TabPanel tabs={items7}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItem7Attribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setItem7Attribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItem7Attribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
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
											onClick={() => setItem7Attribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItem7Attribute(tab, 'image', { url: 'image-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItem7Attribute(tab, 'image', { url: 'image-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItem7Attribute(tab, 'image', { url: 'image-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItem7Attribute(tab, 'image', { url: 'image-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItem7Attribute(tab, 'image', { url: 'image-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItem7Attribute(tab, 'image', { url: 'image-6.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items7.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem7(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem7(Math.random())}>
						Add new
					</Button>
					<TabPanel tabs={items8}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItem8Attribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setItem8Attribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItem8Attribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
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
											onClick={() => setItem8Attribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItem8Attribute(tab, 'image', { url: 'image-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItem8Attribute(tab, 'image', { url: 'image-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItem8Attribute(tab, 'image', { url: 'image-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItem8Attribute(tab, 'image', { url: 'image-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItem8Attribute(tab, 'image', { url: 'image-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItem8Attribute(tab, 'image', { url: 'image-6.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items8.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem8(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem8(Math.random())}>
						Add new
					</Button>
					<TabPanel tabs={items9}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
								<div className="row">
									<TextControl
										label="Title"
										value={tab.title}
										className="input"
										onChange={(value) => setItem9Attribute(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link"
										value={tab.link}
										className="input"
										onChange={(value) => setItem9Attribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<BaseControl label="Image">
										<MediaUpload
											onSelect={(value) => setItem9Attribute(tab, 'image', value)}
											type="image"
											render={({ open }) => (
												<Button className="button" onClick={open}>
													{tab.image.url == 'image-1.jpg' ? (
														<img src={IMAGE1} alt="image" />
													) : tab.image.url === 'image-2.jpg' ? (
														<img src={IMAGE2} alt="image" />
													) : tab.image.url === 'image-3.jpg' ? (
														<img src={IMAGE3} alt="image" />
													) : tab.image.url === 'image-4.jpg' ? (
														<img src={IMAGE4} alt="image" />
													) : tab.image.url === 'image-5.jpg' ? (
														<img src={IMAGE5} alt="image" />
													) : tab.image.url === 'image-6.jpg' ? (
														<img src={IMAGE6} alt="image" />
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
											onClick={() => setItem9Attribute(tab, 'image', { url: '', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n1"
											onClick={() => setItem9Attribute(tab, 'image', { url: 'image-1.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItem9Attribute(tab, 'image', { url: 'image-2.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItem9Attribute(tab, 'image', { url: 'image-3.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItem9Attribute(tab, 'image', { url: 'image-4.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItem9Attribute(tab, 'image', { url: 'image-5.jpg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItem9Attribute(tab, 'image', { url: 'image-6.jpg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items9.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem9(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem9(Math.random())}>
						Add new
					</Button>
				</div>
			</Placeholder>
		</div>
	)
}
