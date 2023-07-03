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

import SVG from './assets/icon.svg'
import SVG1 from './assets/pin.svg'
import SVG2 from './assets/mail.svg'
import SVG3 from './assets/tel.svg'
import img from './assets/background.jpg'
import mImg from './assets/background-mobile.jpg'

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
		bannerIcon,
		bannerTitle,
		bannerSubtitle,
		bannerContent,
		button,
		target,
		items,
		background,
		mBackground,
		extraText,
		itemsInLine
	} = attributes

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
					link: '',
					target: '',
					text: '',
					image: {
						alt: '',
						url: '',
					},
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Banner with info'}>
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
							value={title}
							className="input"
							onChange={(value) => setAttributes({ title: value })}
						/>
					</div>
					<div className="row">
						<BaseControl label="Icon">
							<MediaUpload
								onSelect={(value) => setAttributes({ bannerIcon: value })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{bannerIcon.url == 'icon.svg' ? (
											<img src={SVG} alt={'icon'} />
										) : bannerIcon.url ? (
											<img src={bannerIcon.url} alt={bannerIcon.alt} />
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
								onClick={() => setAttributes({ bannerIcon: { url: '', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() => setAttributes({ bannerIcon: { url: 'icon.svg', alt: '' } })}
							/>
						</BaseControl>
					</div>
					<div className="row">
						<TextControl
							label="Title"
							value={bannerTitle}
							className="input"
							onChange={(value) => setAttributes({ bannerTitle: value })}
						/>
						<TextControl
							label="Subtitle"
							value={bannerSubtitle}
							className="input"
							onChange={(value) => setAttributes({ bannerSubtitle: value })}
						/>
					</div>
					<div className="row">
						<TextareaControl
							label="Content"
							help="You could use all HTML tags in the content field."
							value={bannerContent}
							className="input"
							onChange={(value) => setAttributes({ bannerContent: value })}
						/>
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Button"
								value={button}
								className="input"
								onChange={(value) => setAttributes({ button: value })}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Button Link"
								value={target}
								className="input"
								onChange={(value) => setAttributes({ target: value })}
							/>
						</div>
					</div>
					<div className="row">
						<BaseControl label="Background">
							<MediaUpload
								onSelect={(value) => setAttributes({ background: value })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{background.url == 'background.jpg' ? (
											<img src={img} alt={'background'} />
										) : background.url ? (
											<img src={background.url} alt={background.alt} />
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
								onClick={() => setAttributes({ background: { url: '', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() => setAttributes({ background: { url: 'background.jpg', alt: '' } })}
							/>
						</BaseControl>
						<BaseControl label="Mobile Background">
							<MediaUpload
								onSelect={(value) => setAttributes({ mBackground: value })}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{mBackground.url == 'background-mobile.jpg' ? (
											<img src={mImg} alt={'background'} />
										) : mBackground.url ? (
											<img src={mBackground.url} alt={mBackground.alt} />
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
								onClick={() => setAttributes({ mBackground: { url: '', alt: '' } })}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button"
								onClick={() => setAttributes({ mBackground: { url: 'background-mobile.jpg', alt: '' } })}
							/>
						</BaseControl>
					</div>
					<div className="row">
						<TextControl
							label="Extra text"
							value={extraText}
							className="input"
							onChange={(value) => setAttributes({ extraText: value })}
						/>
					</div>
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
										label="Text"
										value={tab.text}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'text', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link Text"
										value={tab.link}
										className="input"
										onChange={(value) => setItemAttribute(tab, 'link', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Link Target"
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
													{tab.image?.url == 'pin.svg' ? (
														<img src={SVG1} alt={'icon'} />
													) : tab.image.url == 'mail.svg' ? (
														<img src={SVG2} alt={'icon'} />
													) : tab.image.url == 'tel.svg' ? (
														<img src={SVG3} alt={'icon'} />
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
											onClick={() => setItemAttribute(tab, 'image', { url: 'pin.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n2"
											onClick={() => setItemAttribute(tab, 'image', { url: 'mail.svg', alt: '' })}
										/>
										<Button
											icon="cover-image"
											showTooltip="true"
											label="Set default image"
											className="default-image-button n3"
											onClick={() => setItemAttribute(tab, 'image', { url: 'tel.svg', alt: '' })}
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
				<div className="row">
					<CheckboxControl
						label="Bottom items in line"
						checked={itemsInLine}
						onChange={(value) => setAttributes({ itemsInLine: value })}
						className="checkbox"
					/>
				</div>
			</Placeholder>
		</div>
	)
}
