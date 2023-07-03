<?php

/**
 * @param array    $attributes     The array of attributes for this block.
 * @param string   $content        Rendered block output. ie. <InnerBlocks.Content />.
 * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
 *
 * @package banescocontigo
 */

?>

<section <?php echo wp_kses_data(get_block_wrapper_attributes()); ?>>
  <div class="posts-new" style="
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
    <div class="container">
      <?php if ($attributes['title']) : ?>
        <h2 class="posts-new__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>
      <div class="posts-new__inner">
        <div class="posts-new__left">
          <div class="posts-new__item">
            <?php $item = $attributes['items'][0]; ?>
            <?php if ($item['image']['url'] || $item['mImage']['url']) : ?>
              <div class="posts-new__item-image <?= ($item['big']) ? 'posts-new__item-image--big' : '' ?>">
                <?php if ($item['image']['url']) : ?>
                  <?php if ($item['image']['url'] == '1.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/1.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '2.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/2.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '3.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/3.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '4.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/4.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '5.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/5.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '6.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/6.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '7.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/7.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '8.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/8.png" alt="image" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?= $item['image']['url'] ?>" alt="image" />
                  <?php endif; ?>
                <?php endif; ?>
                <?php if ($item['mImage']['url']) : ?>
                  <?php if ($item['mImage']['url'] == 'm-1.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-1.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-2.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-2.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-3.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-3.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-4.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-4.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-5.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-5.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-6.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-6.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-7.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-7.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-8.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-8.png" alt="image" />
                  <?php elseif ($item['mImage']['url']) : ?>
                    <img class="only-mobile" src="<?= $item['mImage']['url'] ?>" alt="image" />
                  <?php endif; ?>
                <?php endif; ?>
              </div>
            <?php endif; ?>
            <div class="posts-new__item-content">
              <?php if ($attributes['items'][0]['tags']) : ?>
                <div class="posts-new__item-tags">
                  <?php foreach (explode(",", $attributes['items'][0]['tags']) as $tag) : ?>
                    <div class="posts-new__item-tag">
                      <?= $tag ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <?php if ($attributes['items'][0]['title']) : ?>
                <h3 class="posts-new__item-title"><?= $attributes['items'][0]['title'] ?></h3>
              <?php endif; ?>
              <?php if ($attributes['items'][0]['description']) : ?>
                <h4 class="posts-new__item-description"><?= $attributes['items'][0]['description'] ?></h4>
              <?php endif; ?>
              <?php if ($attributes['items'][0]['button']) : ?>
                <div class="posts-new__item-buttons">
                  <a class="posts-new__item-link-button link-button" href="<?= $attributes['items'][0]['target'] ?>">
                    <?= $attributes['items'][0]['button'] ?>
                  </a>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="posts-new__right">
          <div class="posts-new__item">
            <?php $item = $attributes['items'][1]; ?>
            <?php if ($item['image']['url'] || $item['mImage']['url']) : ?>
              <div class="posts-new__item-image <?= ($item['big']) ? 'posts-new__item-image--big' : '' ?>">
                <?php if ($item['image']['url']) : ?>
                  <?php if ($item['image']['url'] == '1.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/1.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '2.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/2.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '3.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/3.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '4.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/4.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '5.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/5.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '6.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/6.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '7.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/7.png" alt="image" />
                  <?php elseif ($item['image']['url'] == '8.png') : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/8.png" alt="image" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img class="<?= ($item['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?= $item['image']['url'] ?>" alt="image" />
                  <?php endif; ?>
                <?php endif; ?>
                <?php if ($item['mImage']['url']) : ?>
                  <?php if ($item['mImage']['url'] == 'm-1.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-1.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-2.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-2.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-3.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-3.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-4.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-4.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-5.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-5.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-6.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-6.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-7.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-7.png" alt="image" />
                  <?php elseif ($item['mImage']['url'] == 'm-8.png') : ?>
                    <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-8.png" alt="image" />
                  <?php elseif ($item['mImage']['url']) : ?>
                    <img class="only-mobile" src="<?= $item['mImage']['url'] ?>" alt="image" />
                  <?php endif; ?>
                <?php endif; ?>
              </div>
            <?php endif; ?>
            <div class="posts-new__item-content">
              <?php if ($attributes['items'][1]['tags']) : ?>
                <div class="posts-new__item-tags">
                  <?php foreach (explode(",", $attributes['items'][1]['tags']) as $tag) : ?>
                    <div class="posts-new__item-tag">
                      <?= $tag ?>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <?php if ($attributes['items'][1]['title']) : ?>
                <h3 class="posts-new__item-title"><?= $attributes['items'][1]['title'] ?></h3>
              <?php endif; ?>
              <?php if ($attributes['items'][1]['description']) : ?>
                <h4 class="posts-new__item-description"><?= $attributes['items'][1]['description'] ?></h4>
              <?php endif; ?>
              <?php if ($attributes['items'][1]['button']) : ?>
                <div class="posts-new__item-buttons">
                  <a class="posts-new__item-link-button link-button" href="<?= $attributes['items'][1]['target'] ?>">
                    <?= $attributes['items'][1]['button'] ?>
                  </a>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>