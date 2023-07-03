<?php

/**
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package banescocontigo
 */

$query = new WP_Query(
	[
		'post_type'				 => 'locations',
		'posts_per_page'   => 9,
		'order'            => 'ASC',
		'paged' 					 => (isset($_GET["categories"]) && $_GET["categories"]) ? 1 : get_query_var('paged'),
	] + (isset($_GET["categories"]) && $_GET["categories"] ?
		[
			'tax_query' 		 => [
				[
					'taxonomy' 	 => 'locations-categories',
					'terms'			 => explode(',', trim($_GET["categories"])),
					'field'			 => 'slug',
					'operator'   => 'AND'
				]
			]
		] : [])
		+ (isset($_GET["search"]) && $_GET["search"] ?
			[
				's' 		 => trim($_GET["search"]),
			] : [])
);

$query_map = new WP_Query([
	'post_type'				 => 'locations',
	'posts_per_page'   => -1,
	'order'            => 'ASC',
] + (isset($_GET["categories"]) && $_GET["categories"] ?
	[
		'tax_query' 		 => [
			[
				'taxonomy' 	 => 'locations-categories',
				'terms'			 => explode(',', trim($_GET["categories"])),
				'field'			 => 'slug',
				'operator'   => 'AND'
			]
		]
	] : []
) + (isset($_GET["search"]) && $_GET["search"] ?
	[
		's' 		 => trim($_GET["search"]),
	] : []));


$terms = get_terms([
	'taxonomy' => 'locations-categories',
	'hide_empty' => false,
]);

?>

<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
	<div class="map" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    ">
		<div class="map__inner">
			<div class="map__sidebar">
				<div class="map__body">
					<?php if (isset($attributes['title'])) : ?>
						<h2 class="map__title"><?= $attributes['title'] ?></h2>
					<?php endif; ?>
					<div class="map__search">
						<div class="search-input search-input--only-button-right active" data-id="map-search">
							<div class="search-input__inner">
								<form class="search-input__form" action="">
									<button class="search-input__button" type="submit">
										<svg>
											<use xlink:href="<?php the_theme_url(); ?>/assets/images/icons/sprite.svg#search" />
										</svg>
									</button>
									<input class="search-input__entry" name="search" type="text" placeholder="<?= $attributes['placeholder'] ?>" />
								</form>
							</div>
						</div>
					</div>
					<div class="map__filter">
						<div class="map__checkboxes" tabindex="-1">
							<?php if ($attributes['mobileFilterButton']) : ?>
								<div class="map__checkboxes-button">
									<span><?= $attributes['mobileFilterButton'] ?></span>
								</div>
							<?php endif; ?>
							<div class="map__checkboxes-dropdown">
								<?php foreach ($terms as $term) : ?>
									<div class="map__checkboxes-item" data-category="<?= $term->slug ?>">
										<label class="map__checkbox <?php if (isset($_GET["categories"]) && in_array($term->slug, explode(',', trim($_GET["categories"])))) : echo 'active';
																								endif; ?>">
											<img src="<?php the_block_url(__DIR__); ?>/assets/mark.svg" />
											<?= $term->name ?>
										</label>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<?php if ($attributes['nearMe']) : ?>
							<div class="map__swithchers">
								<label class="map__switcher switcher <?php if (isset($_GET["near-you"]) && $_GET["near-you"]) : echo 'active';
																											endif; ?>"">
								<?= $attributes['nearMe'] ?>
							</label>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php if ($query->have_posts()) : ?>
					<div class=" map__bottom">
									<div class="map__bottom-button">
										<?php if ($attributes['mobileBottomButton']) : ?>
											<div class="mobile-fixed-button">
												<div class="primary-button">
													<?= $attributes['mobileBottomButton'] ?>
												</div>
											</div>
										<?php endif; ?>
									</div>
									<div class="map__bottom-dropdown">
										<div class="map__bottom-dropdown-close">
										</div>
										<h2 class="map__subtitle"><?= $query->found_posts ?> <?= $attributes['results'] ?></h2>
										<div class="map__list">
											<?php if ($attributes['link1']) : ?>
												<div class="map__list-item"><a class="link-button" href="<?= $attributes['link1target'] ?>"><?= $attributes['link1'] ?></a></div>
											<?php endif; ?>
											<?php if ($attributes['link2']) : ?>
												<div class="map__list-item"><a class="link-button" href="<?= $attributes['link2target'] ?>"><?= $attributes['link2'] ?></a></div>
											<?php endif; ?>
										</div>
										<div class="map__blocks">
											<?php while ($query->have_posts()) : $query->the_post();	?>
												<div class="map__block">
													<div class="map__block-title"><?php the_title(); ?></div>
													<div class="map__block-subtitle text">
														<?php the_field('address') ?>
													</div>
													<?php if (have_rows('phones')) : ?>
														<div class="map__block-tels">
															<img src="<?php the_block_url(__DIR__); ?>/assets/tel.svg" />
															<?php while (have_rows('phones')) : the_row(); ?>
																<a href="tel:<?php the_sub_field('text'); ?>" class="map__block-tel"><?php the_sub_field('text'); ?></a>
															<?php endwhile; ?>
														</div>
													<?php endif; ?>
													<?php if (get_field('time')) : ?><div class="map__block-time"><img src="<?php the_block_url(__DIR__); ?>/assets/clock.svg" /><?php the_field('time') ?></div><?php endif; ?>
													<a href="https://www.google.com/maps/dir/?api=1&travelmode=driving&destination=<?php echo get_field('position')['address'] ?>" class="map__block-button primary-button with-icon small">
														<img src="<?php the_block_url(__DIR__); ?>/assets/navigate.svg" />
														<?= $attributes['indications'] ?>
													</a>
												</div>
											<?php endwhile; ?>
											<div class="map__pagination">
												<?php custom_pagination($query) ?>
											</div>
										</div>
									</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="map__content">
						<div id="map"></div>
					</div>
				</div>
			</div>
</section>

<script>
	document.querySelectorAll('.map__checkboxes-item').forEach(button => {
		button.addEventListener("click", function(e) {
			e.preventDefault();
			var url = new URL(window.location.href);
			var params = new URLSearchParams(url.search);
			if (params.has('categories') && params.get('categories').split(',').find(category => category === button.dataset.category)) {
				params.set('categories', params.get('categories').split(',').filter(category => category !== button.dataset.category).join(','));
			} else if (params.has('categories') && params.get('categories')) {
				params.set('categories', params.get('categories') + ',' + button.dataset.category);
			} else {
				params.set('categories', button.dataset.category);
			}
			console.log(params.toString());
			window.location.search = params.toString();
		})
	})
	document.querySelectorAll('.map__bottom-button').forEach(function(button) {
		button.addEventListener('click', function() {
			button.parentNode.classList.add('active')
		})
	})

	document.querySelectorAll('.map__bottom-dropdown-close').forEach(function(button) {
		button.addEventListener('click', function() {
			button.parentNode.parentNode.classList.remove('active')
		})
	})

	document.querySelectorAll('.map__checkboxes').forEach(function(picker) {
		picker.querySelector('.map__checkboxes-button span').addEventListener('click', function() {
			if (!picker.classList.contains('blured')) {
				this.parentNode.parentNode.classList.toggle('active')
				this.parentNode.parentNode.focus()
			}
		})
		picker.addEventListener('blur', function() {
			this.classList.remove('active')
			this.classList.add('blured')
			setTimeout(() => {
				this.classList.remove('blured')
			}, 200)
		})
	})
</script>

<script async defer>
	function initMap() {
		var bounds = new google.maps.LatLngBounds();
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 13,
			center: <?php if (isset($_GET["near-you"]) && $_GET["near-you"]) : echo 'new google.maps.LatLng(' . trim($_GET["near-you"]) . ')';
							else : echo 'new google.maps.LatLng(8.980295, -79.521256)';
							endif; ?>,
			mapTypeId: 'roadmap',
			disableDefaultUI: true
		});

		var icons = {
			default: {
				icon: '<?php the_block_url(__DIR__); ?>/assets/marker.svg'
			}
		};

		function addMarker(location) {
			var marker = new google.maps.Marker({
				id: location.id,
				position: location.position,
				icon: icons[location.type].icon,
				map: map,
				title: location.content,
			});

			bounds.extend(marker.position);

			// var infowindow = new google.maps.InfoWindow({
			// 	content: location.content,
			// 	ariaLabel: "location",
			// });

			// marker.addListener('click', function() {
			// 	infowindow.open({
			// 		anchor: marker,
			// 		map
			// 	});
			// });

			return marker;
		}

		<?php if ($query_map->have_posts()) : ?>
			var locations = [
				<?php while ($query_map->have_posts()) : $query_map->the_post();	?> {
						id: '<?php echo get_field('position')['lat'] ?><?php echo get_field('position')['lng'] ?>',
						position: new google.maps.LatLng(<?php echo get_field('position')['lat'] ?>, <?php echo get_field('position')['lng'] ?>),
						type: 'default',
						content: '<?php the_title(); ?>'
					},
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			]

			var markers = locations.map(function(location) {
				return addMarker(location);
			});

			var url = new URL(window.location.href);
			var params = new URLSearchParams(url.search);

			if (!params.has('near-you')) {
				map.fitBounds(bounds);
			}

			// markers.forEach(currentMarker => {
			// 	currentMarker.addListener("click", function() {
			// 		markers.forEach(anotherMarker => {
			// 			anotherMarker.setAnimation(null);
			// 		})
			// 		currentMarker.setAnimation(google.maps.Animation.BOUNCE);
			// 	});
			// })

			// document.querySelectorAll('.map__block-button').forEach(button => {
			// 	button.addEventListener("click", function(e) {
			// 		e.preventDefault();
			// 		markers.find(marker => {
			// 			marker.setAnimation(null)
			// 			if (marker.id == button.dataset.id) {
			// 				marker.setAnimation(google.maps.Animation.BOUNCE)
			// 			}
			// 		})
			// 	})
			// })

			// document.querySelectorAll('.map__switcher').forEach(button => {
			// 	button.addEventListener("click", function(event) {
			// 		if (button.classList.contains('active')) {
			// 			markers.map(marker => {
			// 				marker.setMap(map)
			// 			})
			// 		} else {
			// 			var loc = new google.maps.LatLng(18.500145, -69.934736);
			// 			markers.map(marker => {
			// 				var dist = google.maps.geometry.spherical.computeDistanceBetween(loc, marker.position);
			// 				if (dist > 3000) {
			// 					marker.setMap(null)
			// 				} 
			// 			});
			// 		}
			// 	})
			// })

		<?php endif; ?>

		document.querySelectorAll('.map__swithchers').forEach(button => {
			button.addEventListener("click", function(e) {
				e.preventDefault();
				var url = new URL(window.location.href);
				var params = new URLSearchParams(url.search);
				if (params.has('near-you')) {
					params.delete('near-you');
					window.location.search = params.toString();
				} else {
					if (navigator.geolocation) {
						navigator.geolocation.getCurrentPosition(showPosition);
					} else {
						x.innerHTML = "Geolocation is not supported by this browser.";
					}
				}

				function showPosition(position) {
					params.set('near-you', position.coords.latitude + ',' + position.coords.longitude);
					window.location.search = params.toString();
				}
			})
		})
	}

	window.initMap = initMap;
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChFZr2e_SWPcpR5IbJa9nUWZpL1gg1OxA&libraries=geometry&callback=initMap"></script>