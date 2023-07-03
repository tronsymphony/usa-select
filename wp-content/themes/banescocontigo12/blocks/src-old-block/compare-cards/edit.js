import { useBlockProps, MediaUpload, InspectorAdvancedControls } from '@wordpress/block-editor'
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
	const {
		paddings,
		margins,
		gradient,
		title,
		internacional,
		chip,
		multicredito_banesco,
		puntos_verdes,
		proteccion_y_seguros,
		asistencia,
		mas_detalles,
		bottom,
	} = attributes

	return (
		<div {...useBlockProps()}>
			<Placeholder label={'Compare Cards'}>
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
						<TextControl
							label="Internacional"
							value={internacional}
							className="input"
							onChange={(value) => setAttributes({ internacional: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Chip"
							value={chip}
							className="input"
							onChange={(value) => setAttributes({ chip: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Multicredito Banesco"
							value={multicredito_banesco}
							className="input"
							onChange={(value) => setAttributes({ multicredito_banesco: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Puntos Verdes"
							value={puntos_verdes}
							className="input"
							onChange={(value) => setAttributes({ puntos_verdes: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Proteccion y seguros"
							value={proteccion_y_seguros}
							className="input"
							onChange={(value) => setAttributes({ proteccion_y_seguros: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Asistencia"
							value={asistencia}
							className="input"
							onChange={(value) => setAttributes({ asistencia: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Mas detalles"
							value={mas_detalles}
							className="input"
							onChange={(value) => setAttributes({ mas_detalles: value })}
						/>
					</div>
					<div className="row">
						<TextControl
							label="Bottom"
							value={bottom}
							className="input"
							onChange={(value) => setAttributes({ bottom: value })}
						/>
					</div>
				</div>
			</Placeholder>
		</div>
	)
}
