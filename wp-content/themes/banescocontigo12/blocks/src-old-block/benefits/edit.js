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

import SVG1 from './assets/1.svg'
import SVG2 from './assets/2.svg'
import SVG3 from './assets/3.svg'
import SVG4 from './assets/4.svg'
import SVG5 from './assets/5.svg'
import SVG6 from './assets/6.svg'
import SVG7 from './assets/7.svg'
import SVG8 from './assets/8.svg'
import SVG9 from './assets/9.svg'
import SVG10 from './assets/10.svg'

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

	const removeItem = (tab) => {
		setAttributes({
			items: items.filter((item) => item.name !== tab.name),
		})
	}

	const addItem = (name) => {
		setAttributes({
			items: [
				...items,
				{
					name: name,
					title: 'New',
					image: {
						url: '1.svg',
						alt: '',
					},
					target: '',
					color: '',
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Benefits'}>
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
									<TextControl
										label="Color"
										value={tab.color}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'color', value)}
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
													{tab.image.url == '1.svg' ? (
														<img src={SVG1} alt={'image'} />
													) : tab.image.url == '2.svg' ? (
														<img src={SVG2} alt={'image'} />
													) : tab.image.url == '3.svg' ? (
														<img src={SVG3} alt={'image'} />
													) : tab.image.url == '4.svg' ? (
														<img src={SVG4} alt={'image'} />
													) : tab.image.url == '5.svg' ? (
														<img src={SVG5} alt={'image'} />
													) : tab.image.url == '6.svg' ? (
														<img src={SVG6} alt={'image'} />
													) : tab.image.url == '7.svg' ? (
														<img src={SVG7} alt={'image'} />
													) : tab.image.url == '8.svg' ? (
														<img src={SVG8} alt={'image'} />
													) : tab.image.url == '9.svg' ? (
														<img src={SVG9} alt={'image'} />
													) : tab.image.url == '10.svg' ? (
														<img src={SVG10} alt={'image'} />
													) : tab.image.url ? (
														<img src={tab.image.url} alt={tab.image.alt} />
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
											onClick={() => setItemAttribute(tab, 'image', { url: '1.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItemAttribute(tab, 'image', { url: '2.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItemAttribute(tab, 'image', { url: '3.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n4"
											onClick={() => setItemAttribute(tab, 'image', { url: '4.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n5"
											onClick={() => setItemAttribute(tab, 'image', { url: '5.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n6"
											onClick={() => setItemAttribute(tab, 'image', { url: '6.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n7"
											onClick={() => setItemAttribute(tab, 'image', { url: '7.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n8"
											onClick={() => setItemAttribute(tab, 'image', { url: '8.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n9"
											onClick={() => setItemAttribute(tab, 'image', { url: '9.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n10"
											onClick={() => setItemAttribute(tab, 'image', { url: '10.svg', alt: '' })}
										/>
									</BaseControl>
								</div>
								{items.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem(tab)}>
										Delete
									</Button>
								)}
							</Placeholder>
						)}
					</TabPanel>
					<Button variant="primary" className="primary-button" onClick={() => addItem(Math.random())}>
						Add new
					</Button>
				</div>
			</Placeholder>
		</div>
	)
}
