import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TextControl,
	TextareaControl,
	SelectControl,
	CheckboxControl,
	Button,
} from '@wordpress/components'

import BACK0 from './assets/background-0.jpg'
import MBACK0 from './assets/background-0-mobile.jpg'
import BACK1 from './assets/background-1.jpg'
import MBACK1 from './assets/background-1-mobile.jpg'
import BACK2 from './assets/background-2.jpg'
import MBACK2 from './assets/background-2-mobile.jpg'
import BACK3 from './assets/background-3.jpg'
import MBACK3 from './assets/background-3-mobile.jpg'
import BACK4 from './assets/background-4.jpg'
import MBACK4 from './assets/background-4-mobile.jpg'
import BACK5 from './assets/background-5.jpg'
import MBACK5 from './assets/background-5-mobile.jpg'
import BACK6 from './assets/background-6.jpg'
import MBACK6 from './assets/background-6-mobile.jpg'
import BACK7 from './assets/background-7.jpg'
import MBACK7 from './assets/background-7-mobile.jpg'
import BACK8 from './assets/background-8.jpg'
import MBACK8 from './assets/background-8-mobile.jpg'
import BACK9 from './assets/background-9.jpg'
import MBACK9 from './assets/background-9-mobile.jpg'
import BACK10 from './assets/background-10.jpg'
import MBACK10 from './assets/background-10-mobile.jpg'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, colors, widths, title, description, button, background, bigText } =
		attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Hero'}>
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
									const newValue = { ...title }
									newValue.desktop = value
									setAttributes({ title: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={title.mobile}
								className="input"
								onChange={(value) => {
									const newValue = { ...title }
									newValue.mobile = value
									setAttributes({ title: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Color (optional)"
								value={colors.title}
								className="input"
								onChange={(value) => {
									const newValue = { ...colors }
									newValue.title = value
									setAttributes({ colors: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Max Width"
								value={widths.desktop.title}
								className="input"
								onChange={(value) => {
									const newValue = { ...widths }
									newValue.desktop.title = value
									setAttributes({ widths: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={widths.mobile.title}
								className="input"
								onChange={(value) => {
									const newValue = { ...widths }
									newValue.mobile.title = value
									setAttributes({ widths: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Margin Top"
								value={margins.desktop.title}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.desktop.title = value
									setAttributes({ margins: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={margins.mobile.title}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.mobile.title = value
									setAttributes({ margins: newValue })
								}}
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextareaControl
								label="Description"
								help="You could use all HTML tags in the description field."
								value={description.desktop}
								className="input"
								onChange={(value) => {
									const newValue = { ...description }
									newValue.desktop = value
									setAttributes({ description: newValue })
								}}
							/>
							<TextareaControl
								label="Mobile (optional)"
								value={description.mobile}
								className="input"
								onChange={(value) => {
									const newValue = { ...description }
									newValue.mobile = value
									setAttributes({ description: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Color (optional)"
								value={colors.description}
								className="input"
								onChange={(value) => {
									const newValue = { ...colors }
									newValue.description = value
									setAttributes({ colors: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Max Width"
								value={widths.desktop.description}
								className="input"
								onChange={(value) => {
									const newValue = { ...widths }
									newValue.desktop.description = value
									setAttributes({ widths: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={widths.mobile.description}
								className="input"
								onChange={(value) => {
									const newValue = { ...widths }
									newValue.mobile.description = value
									setAttributes({ widths: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Margin Top"
								value={margins.desktop.description}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.desktop.description = value
									setAttributes({ margins: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={margins.mobile.description}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.mobile.description = value
									setAttributes({ margins: newValue })
								}}
							/>
						</div>
					</div>
					<div className="block">
						<div className="row">
							<TextControl
								label="Button"
								value={button.desktop}
								className="input"
								onChange={(value) => {
									const newValue = { ...button }
									newValue.desktop = value
									setAttributes({ button: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={button.mobile}
								className="input"
								onChange={(value) => {
									const newValue = { ...button }
									newValue.mobile = value
									setAttributes({ button: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Button Link"
								value={button.target}
								className="input"
								onChange={(value) => {
									const newValue = { ...button }
									newValue.target = value
									setAttributes({ button: newValue })
								}}
							/>
						</div>
						<div className="row">
							<TextControl
								label="Margin Top"
								value={margins.desktop.button}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.desktop.button = value
									setAttributes({ margins: newValue })
								}}
							/>
							<TextControl
								label="Mobile (optional)"
								value={margins.mobile.button}
								className="input"
								onChange={(value) => {
									const newValue = { ...margins }
									newValue.mobile.button = value
									setAttributes({ margins: newValue })
								}}
							/>
						</div>
						<div className="row">
							<SelectControl
								label="Button Type"
								value={button.type}
								className="input"
								onChange={(value) => {
									const newValue = { ...button }
									newValue.type = value
									setAttributes({ button: newValue })
								}}
								options={[
									{
										label: 'Primary Button',
										value: 'primary-button',
									},
									{
										label: 'Outlined Button',
										value: 'outlined-button',
									},
									{
										label: 'White Button',
										value: 'white-button',
									},
									{
										label: 'Outlined White Button',
										value: 'outlined-white-button',
									},
									{
										label: 'Link Button',
										value: 'link-button',
									},
									{
										label: 'Line Button',
										value: 'line-button',
									},
								]}
							/>
						</div>
					</div>
					<div className="row">
						<BaseControl label="Background Image">
							<MediaUpload
								onSelect={(value) => {
									const newValue = { ...background }
									newValue.desktop = value
									setAttributes({ background: newValue })
								}}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{background.desktop.url == 'background-0.jpg' ? (
											<img src={BACK0} alt="background" />
										) : background.desktop.url == 'background-1.jpg' ? (
											<img src={BACK1} alt="background" />
										) : background.desktop.url == 'background-2.jpg' ? (
											<img src={BACK2} alt="background" />
										) : background.desktop.url == 'background-3.jpg' ? (
											<img src={BACK3} alt="background" />
										) : background.desktop.url == 'background-4.jpg' ? (
											<img src={BACK4} alt="background" />
										) : background.desktop.url == 'background-5.jpg' ? (
											<img src={BACK5} alt="background" />
										) : background.desktop.url == 'background-6.jpg' ? (
											<img src={BACK6} alt="background" />
										) : background.desktop.url == 'background-7.jpg' ? (
											<img src={BACK7} alt="background" />
										) : background.desktop.url == 'background-8.jpg' ? (
											<img src={BACK8} alt="background" />
										) : background.desktop.url == 'background-9.jpg' ? (
											<img src={BACK9} alt="background" />
										) : background.desktop.url == 'background-10.jpg' ? (
											<img src={BACK10} alt="background" />
										) : background.desktop.url ? (
											<img src={background.desktop.url} alt="background" />
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
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: '', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n1"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-0.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n2"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-1.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n3"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-2.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n4"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-3.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n5"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-4.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n6"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-5.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n7"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-6.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n8"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-7.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n9"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-8.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n10"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-9.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n11"
								onClick={() => {
									const newValue = { ...background }
									newValue.desktop = { url: 'background-10.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
						</BaseControl>
						<BaseControl label="Mobile (optional)">
							<MediaUpload
								onSelect={(value) => {
									const newValue = { ...background }
									newValue.mobile = value
									setAttributes({ background: newValue })
								}}
								type="image"
								render={({ open }) => (
									<Button className="button" onClick={open}>
										{background.mobile.url == 'background-0-mobile.jpg' ? (
											<img src={MBACK0} alt="background" />
										) : background.mobile.url == 'background-1-mobile.jpg' ? (
											<img src={MBACK1} alt="background" />
										) : background.mobile.url == 'background-2-mobile.jpg' ? (
											<img src={MBACK2} alt="background" />
										) : background.mobile.url == 'background-3-mobile.jpg' ? (
											<img src={MBACK3} alt="background" />
										) : background.mobile.url == 'background-4-mobile.jpg' ? (
											<img src={MBACK4} alt="background" />
										) : background.mobile.url == 'background-5-mobile.jpg' ? (
											<img src={MBACK5} alt="background" />
										) : background.mobile.url == 'background-6-mobile.jpg' ? (
											<img src={MBACK6} alt="background" />
										) : background.mobile.url == 'background-7-mobile.jpg' ? (
											<img src={MBACK7} alt="background" />
										) : background.mobile.url == 'background-8-mobile.jpg' ? (
											<img src={MBACK8} alt="background" />
										) : background.mobile.url == 'background-9-mobile.jpg' ? (
											<img src={MBACK9} alt="background" />
										) : background.mobile.url == 'background-10-mobile.jpg' ? (
											<img src={MBACK10} alt="background" />
										) : background.mobile.url ? (
											<img src={background.mobile.url} alt="background" />
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
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: '', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n1"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-0-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n2"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-1-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n3"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-2-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n4"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-3-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n5"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-4-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n6"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-5-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n7"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-6-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n8"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-7-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n9"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-8-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n10"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-9-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
							<Button
								icon="cover-image"
								showTooltip="true"
								label="Set default image"
								className="default-image-button n11"
								onClick={() => {
									const newValue = { ...background }
									newValue.mobile = { url: 'background-10-mobile.jpg', alt: '' }
									setAttributes({ background: newValue })
								}}
							/>
						</BaseControl>
					</div>
					<div className="row">
						<CheckboxControl
							label="Increase description size"
							checked={bigText}
							onChange={(value) => setAttributes({ bigText: value })}
							className="checkbox"
						/>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
