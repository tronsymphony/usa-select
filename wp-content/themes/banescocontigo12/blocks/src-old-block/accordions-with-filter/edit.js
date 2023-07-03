import { useBlockProps, MediaUpload } from '@wordpress/block-editor'
import {
	Placeholder,
	BaseControl,
	Flex,
	FlexBlock,
	TabPanel,
	TextControl,
	TextareaControl,
	SelectControl,
	CheckboxControl,
	Button,
} from '@wordpress/components'

/**
 * @param {Object}   param0
 * @param {Object}   param0.attributes
 * @param {Function} param0.setAttributes
 * @return {WPElement}
 */

export default function Edit({ attributes, setAttributes }) {
	const { title, accordions1, accordions2 } = attributes

	const setItemAttribute1 = (tab, attribute, value) => {
		setAttributes({
			accordions1: accordions1.map((accordion) => {
				if (accordion.name === tab.name) {
					return {
						...accordion,
						[attribute]: value,
					}
				}
				return accordion
			}),
		})
	}

	const removeItem1 = (tab) => {
		setAttributes({
			accordions1: accordions1.filter((accordion) => accordion.name !== tab.name),
		})
	}

	const addItem1 = (name) => {
		setAttributes({
			accordions1: [
				...accordions1,
				{
					name: name,
					title: 'New',
					image: '',
					content: '',
					iframe: '',
				},
			],
		})
	}

	const setItemAttribute2 = (tab, attribute, value) => {
		setAttributes({
			accordions2: accordions2.map((accordion) => {
				if (accordion.name === tab.name) {
					return {
						...accordion,
						[attribute]: value,
					}
				}
				return accordion
			}),
		})
	}

	const removeItem2 = (tab) => {
		setAttributes({
			accordions2: accordions2.filter((accordion) => accordion.name !== tab.name),
		})
	}

	const addItem2 = (name) => {
		setAttributes({
			accordions2: [
				...accordions2,
				{
					name: name,
					title: 'New',
					image: '',
				},
			],
		})
	}

	return (
		<div {...useBlockProps()}>
			<div className="accordions-with-filter-editor">
				<Placeholder label={'Accordions With Filter'}>
					<TabPanel tabs={accordions1}>
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
									<TextControl
										label="Category"
										value={tab.category}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'category', value)}
									/>
								</div>
								<div className="row">
									<TextControl
										label="Iframe"
										value={tab.iframe}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'iframe', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="Content"
										value={tab.content}
										className="input"
										onChange={(value) => setItemAttribute1(tab, 'content', value)}
									/>
								</div>
								{accordions1.length > 1 && (
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
					<TabPanel tabs={accordions2}>
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
									<TextControl
										label="Category"
										value={tab.category}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'category', value)}
									/>
								</div>
								<div className="row">
									<TextareaControl
										label="Iframe"
										value={tab.iframe}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'iframe', value)}
									/>
									<TextareaControl
										label="Content"
										value={tab.content}
										className="input"
										onChange={(value) => setItemAttribute2(tab, 'content', value)}
									/>
								</div>
								{accordions2.length > 1 && (
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
				</Placeholder>
			</div>
		</div>
	)
}
