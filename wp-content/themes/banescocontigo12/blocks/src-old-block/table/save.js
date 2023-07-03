import { useBlockProps } from '@wordpress/block-editor'

import tbl from './assets/table.png'
import tblm from './assets/table-mobile.png'

export default function save({ attributes }) {
	const { filters, info } = attributes

	return (
		<section {...useBlockProps.save()}>
			<div className="table">
				<div className="container">
					<div className="table__inner">
						<div className="table__filters">
							{filters.split(',').map((filter) => (
								<button className="table__filter">{filter}</button>
							))}
						</div>
						<div className="table__content">
							<img src={tbl} alt="table" />
							<img src={tblm} alt="table" />
							{info && <div className="table__info">{info}</div>}
						</div>
					</div>
				</div>
			</div>
		</section>
	)
}
