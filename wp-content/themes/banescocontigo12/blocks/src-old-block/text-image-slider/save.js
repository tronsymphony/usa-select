import { useBlockProps } from '@wordpress/block-editor'

import img from './assets/image.png'
import mImg from './assets/image-mobile.png'
import icon from './assets/icon.svg'
import app from './assets/appstore.png'
import google from './assets/googleplay.png'


export default function save({ attributes }) {

	const { title, content, image, mImage, googleplay, appstore, socialIcons,enablePopup, topIcon } = attributes

	
	return (
		<>
		<section {...useBlockProps.save()}>
			
			<div className="text-image-slider">
				<div className="container">
					<div className="text-image-slider__inner">
						{image && (
							<div className={`text-image-slider__image${mImage ? ' only-desktop' : ''}`}>
								{image === 'image.png' ? (
									<img src={img} alt={'image'} />
								) : image.url ? (
									<img src={image.url} alt={image.alt} />
								) : (
									''
								)}
							</div>
						)}
						{mImage && (
							<div className="text-image-slider__image only-mobile">
								{mImage === 'image-mobile.png' ? (
									<img src={mImg} alt={'image'} />
								) : mImage.url ? (
									<img src={mImage.url} alt={mImage.alt} />
								) : (
									''
								)}
							</div>
						)}
						
						
						{(title || content) && (
							<div className="text-image-slider__text">
								{topIcon?.hidden === false && (
								<div className="text-image-slider__icon">
									<img src={icon} alt={'icon'} />
								</div>
								)}
								{title && (
									<h2 className="text-image-slider__title" dangerouslySetInnerHTML={{ __html: title }}></h2>
								)}
								{content && (
									<div className="text-image-slider__content" dangerouslySetInnerHTML={{ __html: content }} />
								)}
								
								{enablePopup?.hidden === true && (
								<div className="text-image-slider__modal text-image-slider__modal-popup">
									+ Ver todos los detalles
								</div>
								)}

								{socialIcons?.hidden === false && (
									<div className="text-image-slider__buttons">
									<a href={appstore} className="text-image-slider__appstore">
										<img src={app} alt={'appstore'} />
									</a>
									<a href={googleplay} className="text-image-slider__googleplay">
										<img src={google} alt={'googleplay'} />
									</a>
								</div>
								)}
								

							</div>
						)}
					</div>
				</div>
			</div>
		</section>
		<div className="text-image-slider__modal-content"> 
		<h2 className="text-image-slider__modal-content-title">Otros beneficios de DANI</h2>
		<p>
			Realizar un retiro del monto disponible de tu multicrédito hacia tu cuenta personal.
			Activar tus tarjetas de crédito y débito de forma inmediata.
			Recibir asistencia directa de un representante (sujeto a disponibilidad horario).

			* La funcionalidad de desembolso está disponible para clientes de Tarjeta de Crédito con MultiCrédito, que posean cuenta de ahorro o corriente en Banesco.
		</p>
		<span className="text-image-slider__modal-close">
		<svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M12.1159 9.22559L18.5659 3.10827C18.8483 2.83976 19.007 2.47558 19.007 2.09585C19.007 1.71611 18.8483 1.35193 18.5659 1.08342C18.2834 0.814911 17.9003 0.664062 17.5009 0.664062C17.1014 0.664062 16.7183 0.814911 16.4359 1.08342L10.0009 7.215L3.56589 1.08342C3.28343 0.814911 2.90034 0.664062 2.50089 0.664062C2.10143 0.664063 1.71834 0.814911 1.43588 1.08342C1.15343 1.35193 0.994747 1.71611 0.994747 2.09585C0.994747 2.47558 1.15343 2.83976 1.43588 3.10827L7.88589 9.22559L1.43588 15.3429C1.29529 15.4755 1.1837 15.6332 1.10755 15.8069C1.0314 15.9807 0.992188 16.1671 0.992188 16.3553C0.992188 16.5436 1.0314 16.73 1.10755 16.9037C1.1837 17.0775 1.29529 17.2352 1.43588 17.3678C1.57533 17.5014 1.74123 17.6075 1.92402 17.6799C2.10681 17.7523 2.30287 17.7895 2.50089 17.7895C2.6989 17.7895 2.89496 17.7523 3.07775 17.6799C3.26054 17.6075 3.42644 17.5014 3.56589 17.3678L10.0009 11.2362L16.4359 17.3678C16.5753 17.5014 16.7412 17.6075 16.924 17.6799C17.1068 17.7523 17.3029 17.7895 17.5009 17.7895C17.6989 17.7895 17.895 17.7523 18.0778 17.6799C18.2605 17.6075 18.4264 17.5014 18.5659 17.3678C18.7065 17.2352 18.8181 17.0775 18.8942 16.9037C18.9704 16.73 19.0096 16.5436 19.0096 16.3553C19.0096 16.1671 18.9704 15.9807 18.8942 15.8069C18.8181 15.6332 18.7065 15.4755 18.5659 15.3429L12.1159 9.22559Z" fill="#708090"/>
		</svg>
		</span>
		</div>
		<div className="text-image-slider__modal-content-overlay"></div>
		</>
	)
}

 
