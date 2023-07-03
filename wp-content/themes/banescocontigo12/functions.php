<?php

/**
 * Banesco Contigo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package banescocontigo
 */

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.4');
}

function banescocontigo_setup()
{
	/*
	 * Add basic for Block Styles.
	 */
	add_theme_support('wp-block-styles');
	add_theme_support('post-thumbnails');
	add_theme_support('editor-styles');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		]
	);

	/*
	 * Enqueue editor styles.
	 */
	add_editor_style('style-editor.css');

	/*
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus(
		[
			'primary_menu' => esc_html__('Primary menu', 'banescocontigo'),
			'primary_sub_menu_left' => esc_html__('Primary sub-menu left', 'banescocontigo'),
			'primary_sub_menu_center' => esc_html__('Primary sub-menu center', 'banescocontigo'),
			'primary_sub_menu_right' => esc_html__('Primary sub-menu right', 'banescocontigo'),
			'footer_menu' => esc_html__('Footer menu', 'banescocontigo'),
		]
	);
}
add_action('after_setup_theme', 'banescocontigo_setup');

/**
 * Register widget area.
 */
function banescocontigo_widgets_init()
{
	register_sidebar([
		'name'        => 'Footer',
		'id'          => 'sidebar-1',
		'description' => 'Widgets in this area will be displayed in the footer.',
		'before_title'  => '',
		'after_title'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	]);
}

add_action('widgets_init', 'banescocontigo_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function banescocontigo_scripts()
{
	wp_enqueue_style('banescocontigo-swiper-style', '//cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css', [], _S_VERSION);
	wp_enqueue_style('banescocontigo-slider-style', '//cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.css', [], _S_VERSION);
	wp_enqueue_style('banescocontigo-style', get_stylesheet_uri(), [], time());

	wp_enqueue_script('banescocontigo-swiper-script', '//cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js', [], _S_VERSION, true);
	wp_enqueue_script('banescocontigo-wnumb-script', '//cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js', [], _S_VERSION, true);
	wp_enqueue_script('banescocontigo-slider-script', '//cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.1/nouislider.min.js', [], _S_VERSION, true);
	wp_enqueue_script('banescocontigo-script', get_template_directory_uri() . '/assets/scripts/main.js', [], _S_VERSION, true);
	wp_enqueue_script('banescocontigo-jquery', get_template_directory_uri() . '/assets/scripts/jquery.js', ['jquery'], _S_VERSION, true);

	wp_enqueue_script('jquery');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'banescocontigo_scripts');

function my_acf_init()
{
	acf_update_setting('google_api_key', 'AIzaSyChFZr2e_SWPcpR5IbJa9nUWZpL1gg1OxA');
}
add_action('acf/init', 'my_acf_init');

/**
 * Gutenberg folders setup.
 */
function gutenberg_blocks_init()
{
	$blocks = glob(get_template_directory() . '/blocks/src/*', GLOB_ONLYDIR);

	foreach ($blocks as $block) {
		require $block . '/index.php';
	}
}
add_action('init', 'gutenberg_blocks_init');

add_action('wp_ajax_promotions', 'promotions_ajax');
add_action('wp_ajax_nopriv_promotions', 'promotions_ajax');

function promotions_ajax()
{
	$cat_id = $_POST['cat'];
	if ($_POST['cat'] != 'all') {
		$args = array(
			'post_type' => 'promociones',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
					'taxonomy' => 'promociones-categories',
					'field' => 'slug',
					'terms' => array($cat_id) //excluding the term you dont want.
				)
			)
		);
	} else {
		$args = array(
			'post_type' => 'promociones',
			'posts_per_page' => -1
		);
	}

	global $post;
	$posts = get_posts($args);
	ob_start();
	foreach ($posts as $post) {
		setup_postdata($post);
?>
		<?php $post_id = get_the_ID();  ?>
		<?php $post_categories = get_the_terms($post_id, 'promociones-categories'); ?>
		<div class="promotions__post">
			<a class="promotions__post-image" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
			<div class="promotions__post-content">
				<a class="promotions__post-title" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
				<a class="promotions__post-excerpt" href="<?php the_permalink(); ?>">
					<?php the_field('excerpt'); ?>
				</a>
				<?php if ($post_categories) : ?>
					<div class="promotions__post-categories">
						<?php foreach ($post_categories as $category) :  ?>
							<a class="promotions__post-category" href="?category=<?php echo $category->slug; ?>"><?php echo $category->name; ?></a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		</div>
	<?php }
	wp_reset_postdata();
	$response = ob_get_contents();
	ob_end_clean();
	echo $response;
	die(1);
}


add_action('wp_ajax_accordions', 'accordions_ajax');
add_action('wp_ajax_nopriv_accordions', 'accordions_ajax');

function accordions_ajax()
{
	$currentPage = $_POST['currentPage'];
	$items = $_POST['items'];
	$columns = $_POST['columns'];
	ob_start();
	?>
	<div class="accordions-pagination__inner">
		<?php if ($columns == "1") : ?>
			<?php foreach ($items as $key => $item) : ?>
				<?php if ($key < $currentPage * 20 && $key >= ($currentPage - 1) * 20) : ?>
					<div class="accordions-pagination__item">
						<div class="accordions-pagination__item-header">
							<?php if ($item['title']) : ?>
								<h3 class="accordions-pagination__item-title"><?= $item['title'] ?></h3>
							<?php endif; ?>
						</div>
						<div class="accordions-pagination__item-body">
							<div class="accordions-pagination__item-body-inner">
								<?php if ($item['iframe']) : ?>
									<iframe class="accordions-pagination__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
								<?php endif; ?>
								<?php if ($item['content']) : ?>
									<div class="accordions-pagination__item-content text"><?= $item['content'] ?></div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>
		<?php if ($columns == "2") : ?>
			<div class="accordions-pagination__column">
				<?php foreach ($items as $key => $item) : ?>
					<?php if ($key < $currentPage * 20 && $key >= ($currentPage - 1) * 20) : ?>
						<?php if ($key % 2 == 0) : ?>
							<div class="accordions-pagination__item">
								<div class="accordions-pagination__item-header">
									<?php if ($item['title']) : ?>
										<h3 class="accordions-pagination__item-title"><?= $item['title'] ?></h3>
									<?php endif; ?>
								</div>
								<div class="accordions-pagination__item-body">
									<div class="accordions-pagination__item-body-inner">
										<?php if ($item['iframe'] && $item['iframe']) : ?>
											<iframe class="accordions-pagination__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
										<?php endif; ?>
										<?php if ($item['content'] && $item['content']) : ?>
											<div class="accordions-pagination__item-content text"><?= $item['content'] ?></div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
			<div class="accordions-pagination__column">
				<?php foreach ($items as $key => $item) : ?>
					<?php if ($key < $currentPage * 20 && $key >= ($currentPage - 1) * 20) : ?>
						<?php if ($key % 2 != 0) : ?>
							<div class="accordions-pagination__item">
								<div class="accordions-pagination__item-header">
									<?php if ($item['title'] && $item['title']) : ?>
										<h3 class="accordions-pagination__item-title"><?= $item['title'] ?></h3>
									<?php endif; ?>
								</div>
								<div class="accordions-pagination__item-body">
									<div class="accordions-pagination__item-body-inner">
										<?php if ($item['iframe'] && $item['iframe']) : ?>
											<iframe class="accordions-pagination__item-iframe" src="<?= $item['iframe'] ?>"></iframe>
										<?php endif; ?>
										<?php if ($item['content'] && $item['content']) : ?>
											<div class="accordions-pagination__item-content text"><?= $item['content'] ?></div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
	<div class="accordions-pagination__pagination pagination">
		<?php global $paged;
		$paged = $currentPage;
		custom_pagination($query = '', ceil(count($items) / 20)) ?>
	</div>
	<script>
		document.querySelectorAll('.accordions-pagination').forEach(function(accordions) {
			accordions.querySelectorAll('.accordions-pagination__item').forEach(function(accordion) {
				const triger = accordion.querySelector('.accordions-pagination__item-header')
				const content = accordion.querySelector('.accordions-pagination__item-body')
				triger.addEventListener('click', function() {
					accordion.classList.toggle('active')
				})
			})
		})
	</script>
	<script>
		jQuery(function($) {
			function accordions_ajax_get(page) {
				$.ajax({
					url: '<?php echo admin_url("admin-ajax.php") ?>',
					type: 'POST',
					data: {
						"action": "accordions",
						currentPage: page,
						items: <?php echo json_encode($items) ?>,
						columns: '<?php echo $columns ?>',
					},
					success: function(data) {
						jQuery("#accordions-pagination .accordions-pagination__wrapper").html(data);
						return false;
					}
				});
			}
			document.querySelectorAll('.accordions-pagination__pagination ul li').forEach(function(li) {
				li.addEventListener('click', function(e) {
					e.preventDefault();
					console.log(li.dataset.page);
					if (li.dataset.page) {
						e.preventDefault();
						accordions_ajax_get(li.dataset.page);
					}
				});
			})
		});
	</script>
<?php
	$response = ob_get_contents();
	ob_end_clean();
	echo $response;
	die(1);
}
/**
 * Use Gutenberg for single posts.
 */
// add_filter('use_block_editor_for_post_type', function ($use, $post_type) {
// 	return in_array($post_type, ['page']);
// }, 100, 2);

/**
 * Utilities.
 */
require get_template_directory() . '/inc/utils/post_views.php';
require get_template_directory() . '/inc/utils/custom_pagination.php';
require get_template_directory() . '/inc/utils/custom_post_types.php';

/** 
 * Helpers.
 */
require get_template_directory() . '/inc/helpers/get_block_url.php';
require get_template_directory() . '/inc/helpers/get_slug.php';
require get_template_directory() . '/inc/helpers/get_theme_field.php';
require get_template_directory() . '/inc/helpers/get_theme_url.php';

/**
 * Customizers additions.
 */
require get_template_directory() . '/inc/customizers/customizer_header.php';
require get_template_directory() . '/inc/customizers/customizer_footer.php';
require get_template_directory() . '/inc/customizers/customizer_404.php';
require get_template_directory() . '/inc/customizers/customizer_chat.php';
require get_template_directory() . '/inc/customizers/customizer_currency.php';
require get_template_directory() . '/inc/customizers/customizer_banner.php';

require_once( get_template_directory() . '/inc/utils/pacific_gutenberg.php' );
require_once( get_template_directory() . '/inc/utils/pacific_theme_setup.php' );
require_once( get_template_directory() . '/inc/helpers/pacific_helper.php' );
$theme_setup = new Pacific_theme_setup;

// App style
if ( file_exists( get_template_directory() . '/dist/css/app.min.css' ) ) :
    $csstime = filemtime( get_template_directory() . '/dist/css/app.min.css' );
    wp_enqueue_style( 'app', get_template_directory_uri() . '/dist/css/app.min.css', array(), $csstime );
  endif;

  add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  ?><style>
	html .acf-input  .button,
  html .editor-styles-wrapper .acf-actions .button {
	display: block;
    border-radius: 2px;
    border: 1px solid #757575;
    background: #007cba;
    padding: inherit;
    width: auto;
    height: auto;
    color: #fff;
    padding: 0.2rem 0.8rem;
    min-width: 0;
    display: inline-flex;
}
  </style>
  <?php
}