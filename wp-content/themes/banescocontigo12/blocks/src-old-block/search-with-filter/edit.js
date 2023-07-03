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
	const { title, placeholder, filters } = attributes

	return (
		<div {...useBlockProps()}>
			<div className="search-with-filter-editor">
				<Placeholder label={'Search With Filter'}>
					<div className="row">
						<TextControl
							label="Title"
							value={title}
							className="input"
							onChange={(value) => setAttributes({ title: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Placeholder"
							value={placeholder}
							className="input"
							onChange={(value) => setAttributes({ placeholder: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Filters"
							value={filters}
							className="input"
							onChange={(value) => setAttributes({ filters: value })}
						/>
					</div>
				</Placeholder>
			</div>
		</div>
	)
}
