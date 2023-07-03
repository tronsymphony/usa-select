import { useBlockProps, InspectorAdvancedControls } from '@wordpress/block-editor'
import {
	Placeholder,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	TextareaControl,
	SelectControl,
	Button,
	ExternalLink,
} from '@wordpress/components'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { paddings, margins, gradient, columns, title, title1, title2, title3, items1, items2, items3 } = attributes

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
					content: '',
					iframe: '',
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
					content: '',
					iframe: '',
				},
			],
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
					title: 'New',
					content: '',
					iframe: '',
				},
			],
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
					<div className="row">
						<TextControl
							label="Title (optional)"
							value={title}
							className="input"
							onChange={(value) => setAttributes({ title: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Tab #1 title"
							value={title1}
							className="input"
							onChange={(value) => setAttributes({ title1: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Tab #2 title"
							value={title2}
							className="input"
							onChange={(value) => setAttributes({ title2: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Tab #3 title"
							value={title3}
							className="input"
							onChange={(value) => setAttributes({ title3: value })}
						/>
					</div>
					<TabPanel tabs={items1}>
						{(tab) => (
							<Placeholder className={'placeholder'}>
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
										label="Content"
										help="You could use all HTML tags in the content field."
										value={tab.content}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'content', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Iframe (optional)"
										help={
											<ExternalLink href="https://help.glassdoor.com/s/article/Finding-the-embed-code-on-YouTube-or-Vimeo">
												Finding the embed code on YouTube or Vimeo
											</ExternalLink>
										}
										value={tab.iframe}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'iframe', value)}
									/>
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
										onChange={(value) => setItemAttribute2(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="Content"
										help="You could use all HTML tags in the content field."
										value={tab.content}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'content', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Iframe (optional)"
										help={
											<ExternalLink href="https://help.glassdoor.com/s/article/Finding-the-embed-code-on-YouTube-or-Vimeo">
												Finding the embed code on YouTube or Vimeo
											</ExternalLink>
										}
										value={tab.iframe}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'iframe', value)}
									/>
								</div>
								{items2.length > 1 && (
									<Button variant="primary" className="primary-button" onClick={() => removeItem2(tab)}>
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
										onChange={(value) => setItemAttribute3(tab, 'title', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="Content"
										help="You could use all HTML tags in the content field."
										value={tab.content}
										className="input"
										onChange={(value) => setItemAttribute3(tab, 'content', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Iframe (optional)"
										help={
											<ExternalLink href="https://help.glassdoor.com/s/article/Finding-the-embed-code-on-YouTube-or-Vimeo">
												Finding the embed code on YouTube or Vimeo
											</ExternalLink>
										}
										value={tab.iframe}
										className="input"
										onChange={(value) => setItemAttribute3(tab, 'iframe', value)}
									/>
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
