import { useBlockProps } from '@wordpress/block-editor'

import tbl from './assets/table-extended.png'
import tblm from './assets/table-extended-mobile.png'

export default function save({ attributes }) {
	const { filters, info } = attributes

	return (
		<section {...useBlockProps.save()}>
			<div className="table-extended">
				<div className="container">
					<div className="table-extended__inner">
						<div className="table-extended__filters">
							{filters.split(',').map((filter) => (
								<button className="table-extended__filter">{filter}</button>
							))}
						</div>
						<div className="table-extended__content">
							<img src={tbl} alt="table-extended" />
							<img src={tblm} alt="table-extended" />
							{info && <div className="table-extended__info">{info}</div>}
						</div>
					</div>
				</div>
			</div>
		</section>
	)
}
