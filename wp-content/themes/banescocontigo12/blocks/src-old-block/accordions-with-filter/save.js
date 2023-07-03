import { useBlockProps } from '@wordpress/block-editor'

import icon from './assets/icon.svg'

export default function save({ attributes }) {
	const { accordions1, accordions2 } = attributes

	return (
		<section {...useBlockProps.save()}>
			<div className="accordions-with-filter">
				<div className="container">
					<h2 className="accordions-with-filter__title hidden">FAQ</h2>
					<div className="accordions-with-filter__inner">
						<div className="accordions-with-filter__left">
							{accordions1.map((accordion) => (
								<div
									className={`accordions-with-filter__item accordion-with-filter accordion`}
									data-category={accordion.category}
								>
									<div className="accordion-with-filter__header accordion__triger">
										{accordion.title && <h3 className="accordion-with-filter__title">{accordion.title}</h3>}
										<div className="accordion-with-filter__icon accordion__icon">
											<img src={icon} alt={'icon'} />
										</div>
									</div>
									<div className="accordion-with-filter__body accordion__content">
										<div className="accordion-with-filter__body-inner">
											{accordion.iframe && (
												<iframe className="accordion-with-filter__iframe" src={accordion.iframe}></iframe>
											)}
											{accordion.content && (
												<div
													className="accordion-with-filter__content"
													dangerouslySetInnerHTML={{
														__html: accordion.content,
													}}
												></div>
											)}
										</div>
									</div>
								</div>
							))}
						</div>
						<div className="accordions-with-filter__right">
							{accordions2.map((accordion) => (
								<div
									className="accordions-with-filter__item accordion-with-filter accordion"
									data-category={accordion.category}
								>
									<div className="accordion-with-filter__header accordion__triger">
										{accordion.title && <h3 className="accordion-with-filter__title">{accordion.title}</h3>}
										<div className="accordion-with-filter__icon accordion__icon">
											<img src={icon} alt={'icon'} />
										</div>
									</div>
									<div className="accordion-with-filter__body accordion__content">
										<div className="accordion-with-filter__body-inner">
											{accordion.iframe && (
												<iframe className="accordion-with-filter__iframe" src={accordion.iframe}></iframe>
											)}
											{accordion.content && (
												<div
													className="accordion-with-filter__content"
													dangerouslySetInnerHTML={{ __html: accordion.content }}
												></div>
											)}
										</div>
									</div>
								</div>
							))}
						</div>
					</div>
				</div>
			</div>
		</section>
	)
}
