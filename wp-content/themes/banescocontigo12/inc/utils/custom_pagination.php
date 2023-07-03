<?php

function custom_pagination($wp_query, $pages = '', $range = 2)
{
	$showitems = ($range * 2) + 1;

	global $paged;
	if (empty($paged)) $paged = 1;

	if ($pages == '') {
		$pages = $wp_query->max_num_pages;
		if (!$pages) {
			$pages = 1;
		}
	}

	if (1 != $pages) {
		echo "<div class=\"pagination\"><nav aria-label=\"Page pagination\"><ul>";
		echo "<li data-page='1' class='";
		if ($paged == 1) echo 'disabled';
		echo "'>
					<a href='" . get_pagenum_link($paged - 1) . "'>
						<div class=\"icon\">
							<svg>
								<use xlink:href=\"" . esc_url(get_template_directory_uri()) . "/assets/images/icons/sprite.svg#arrow-pagination-left\"></use>
							</svg>
						</div>
					</a>
				</li>";

		echo ($paged == 1) ? "<li class='active' data-page='1'><a>1</a></li>" : "<li data-page='1'><a href='" . get_pagenum_link(1) . "'>1</a></li>";

		if ($paged > 3) echo '<li class="dashed"><a>...</a></li>';

		if ($paged == 1) {
			for ($i = $paged - 1; $i < $paged + 3; $i++) {
				if ($i <= 1 || $i == $pages || $i > $pages) continue;
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
					echo ($paged == $i) ? "<li class='active' data-page=" . $i . "><a>" . $i . "</a></li>" : "<li data-page=" . $i . "><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
				}
			}
		}

		if ($paged == $pages) {
			for ($i = $paged - 2; $i < $paged + 2; $i++) {
				if ($i <= 1 || $i == $pages || $i > $pages) continue;
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
					echo ($paged == $i) ? "<li class='active' data-page=" . $i . "><a>" . $i . "</a></li>" : "<li data-page=" . $i . "><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
				}
			}
		}

		if ($paged != 1 && $paged != $pages) {
			for ($i = $paged - 1; $i < $paged + 2; $i++) {
				if ($i <= 1 || $i == $pages || $i > $pages) continue;
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
					echo ($paged == $i) ? "<li class='active' data-page=" . $i . "><a>" . $i . "</a></li>" : "<li data-page=" . $i . "><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
				}
			}
		}

		if ($paged < $pages - 3) echo '<li class="dashed"><a>...</a></li>';

		echo ($paged == $pages) ? "<li class='active' data-page=" . $pages . "><a>" . $pages . "</a></li>" : "<li data-page=" . $pages . "><a href='" . get_pagenum_link($pages) . "'>" . $pages . "</a></li>";

		echo "<li data-page=" . $pages . " class='";
		if ($paged == $pages) echo 'disabled';
		echo   "'>
					<a href='" . get_pagenum_link($paged + 1) . "'>
						<div class=\"icon\">
							<svg>
								<use xlink:href=\"" . esc_url(get_template_directory_uri()) . "/assets/images/icons/sprite.svg#arrow-pagination-right\"></use>
							</svg>
						</div>
					</a>
				</li>";
		echo "</ul></nav></div>\n";
	}
}

