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
  <div class="posts-latest" style="
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
        <h2 class="posts-latest__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>
      <?php if ($attributes['items']) : ?>
        <div class="posts-latest__inner">
          <div class="posts-latest__left">
            <?php if ($attributes['items'][0]) : ?>
              <div class="posts-latest__item">
                <?php if ($attributes['items'][0]['image']['url'] || $attributes['items'][0]['mImage']['url']) : ?>
                  <div class="posts-latest__item-image">
                    <?php if ($attributes['items'][0]['image']['url']) : ?>
                      <?php if ($attributes['items'][0]['image']['url'] == '1.jpg') : ?>
                        <img class="<?= ($attributes['items'][0]['mImage']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/1.jpg" alt="image" />
                      <?php elseif ($attributes['items'][0]['image']['url'] == '2.jpg') : ?>
                        <img class="<?= ($attributes['items'][0]['mImage']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/2.jpg" alt="image" />
                      <?php elseif ($attributes['items'][0]['image']['url'] == '3.jpg') : ?>
                        <img class="<?= ($attributes['items'][0]['mImage']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/3.jpg" alt="image" />
                      <?php elseif ($attributes['items'][0]['image']['url']) : ?>
                        <img class="<?= ($attributes['items'][0]['mImage']) ? 'only-desktop' : '' ?>" src="<?= $attributes['items'][0]['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($attributes['items'][0]['mImage']['url']) : ?>
                      <?php if ($attributes['items'][0]['mImage']['url'] == 'm-1.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-1.jpg" alt="image" />
                      <?php elseif ($attributes['items'][0]['mImage']['url'] == 'm-2.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-2.jpg" alt="image" />
                      <?php elseif ($attributes['items'][0]['mImage']['url'] == 'm-3.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-3.jpg" alt="image" />
                      <?php elseif ($attributes['items'][0]['mImage']['url']) : ?>
                        <img class="only-mobile" src="<?= $attributes['items'][0]['mImage']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($attributes['items'][0]['title'] || $attributes['items'][0]['description'] || $attributes['items'][0]['button']) : ?>
                  <div class="posts-latest__item-content">
                    <?php if ($attributes['items'][0]['title']) : ?>
                      <h3 class="posts-latest__item-title"><?= $attributes['items'][0]['title'] ?></h3>
                    <?php endif; ?>
                    <?php if ($attributes['items'][0]['description']) : ?>
                      <h4 class="posts-latest__item-description"><?= $attributes['items'][0]['description'] ?></h4>
                    <?php endif; ?>
                    <div class="posts-latest__item-buttons">
                      <?php if ($attributes['items'][0]['button']) : ?>
                        <div class="posts-latest__item-link-button">
                          <a class="link-button" href="<?= $attributes['items'][0]['target'] ?>">
                            <?= $attributes['items'][0]['button'] ?>
                          </a>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="posts-latest__right">
            <?php if ($attributes['items'][1]) : ?>
              <div class="posts-latest__item">
                <?php if ($attributes['items'][1]['image']['url'] || $attributes['items'][1]['mImage']['url']) : ?>
                  <div class="posts-latest__item-image">
                    <?php if ($attributes['items'][1]['image']['url']) : ?>
                      <?php if ($attributes['items'][1]['image']['url'] == '1.jpg') : ?>
                        <img class="<?= ($attributes['items'][1]['mImage']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/1.jpg" alt="image" />
                      <?php elseif ($attributes['items'][1]['image']['url'] == '2.jpg') : ?>
                        <img class="<?= ($attributes['items'][1]['mImage']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/2.jpg" alt="image" />
                      <?php elseif ($attributes['items'][1]['image']['url'] == '3.jpg') : ?>
                        <img class="<?= ($attributes['items'][1]['mImage']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/3.jpg" alt="image" />
                      <?php elseif ($attributes['items'][1]['image']['url']) : ?>
                        <img class="<?= ($attributes['items'][1]['mImage']) ? 'only-desktop' : '' ?>" src="<?= $attributes['items'][1]['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($attributes['items'][1]['mImage']['url']) : ?>
                      <?php if ($attributes['items'][1]['mImage']['url'] == 'm-1.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-1.jpg" alt="image" />
                      <?php elseif ($attributes['items'][1]['mImage']['url'] == 'm-2.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-2.jpg" alt="image" />
                      <?php elseif ($attributes['items'][1]['mImage']['url'] == 'm-3.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-3.jpg" alt="image" />
                      <?php elseif ($attributes['items'][1]['mImage']['url']) : ?>
                        <img class="only-mobile" src="<?= $attributes['items'][1]['mImage']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($attributes['items'][1]['title'] || $attributes['items'][1]['description'] || $attributes['items'][1]['button']) : ?>
                  <div class="posts-latest__item-content">
                    <?php if ($attributes['items'][1]['title']) : ?>
                      <h3 class="posts-latest__item-title"><?= $attributes['items'][1]['title'] ?></h3>
                    <?php endif; ?>
                    <?php if ($attributes['items'][1]['description']) : ?>
                      <h4 class="posts-latest__item-description"><?= $attributes['items'][1]['description'] ?></h4>
                    <?php endif; ?>
                    <div class="posts-latest__item-buttons">
                      <?php if ($attributes['items'][1]['button']) : ?>
                        <div class="posts-latest__item-link-button">
                          <a class="link-button" href="<?= $attributes['items'][1]['target'] ?>">
                            <?= $attributes['items'][1]['button'] ?>
                          </a>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            <?php endif; ?>
            <?php if ($attributes['items'][2]) : ?>
              <div class="posts-latest__item">
                <?php if ($attributes['items'][2]['image']['url'] || $attributes['items'][2]['mImage']['url']) : ?>
                  <div class="posts-latest__item-image">
                    <?php if ($attributes['items'][2]['image']['url']) : ?>
                      <?php if ($attributes['items'][2]['image']['url'] == '1.jpg') : ?>
                        <img class="<?= ($attributes['items'][2]['mImage']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/1.jpg" alt="image" />
                      <?php elseif ($attributes['items'][2]['image']['url'] == '2.jpg') : ?>
                        <img class="<?= ($attributes['items'][2]['mImage']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/2.jpg" alt="image" />
                      <?php elseif ($attributes['items'][2]['image']['url'] == '3.jpg') : ?>
                        <img class="<?= ($attributes['items'][2]['mImage']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/3.jpg" alt="image" />
                      <?php elseif ($attributes['items'][2]['image']['url']) : ?>
                        <img class="<?= ($attributes['items'][2]['mImage']) ? 'only-desktop' : '' ?>" src="<?= $attributes['items'][2]['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($attributes['items'][2]['mImage']['url']) : ?>
                      <?php if ($attributes['items'][2]['mImage']['url'] == 'm-1.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-1.jpg" alt="image" />
                      <?php elseif ($attributes['items'][2]['mImage']['url'] == 'm-2.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-2.jpg" alt="image" />
                      <?php elseif ($attributes['items'][2]['mImage']['url'] == 'm-3.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-3.jpg" alt="image" />
                      <?php elseif ($attributes['items'][2]['mImage']['url']) : ?>
                        <img class="only-mobile" src="<?= $attributes['items'][2]['mImage']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($attributes['items'][2]['title'] || $attributes['items'][2]['description'] || $attributes['items'][2]['button']) : ?>
                  <div class="posts-latest__item-content">
                    <?php if ($attributes['items'][2]['title']) : ?>
                      <h3 class="posts-latest__item-title"><?= $attributes['items'][2]['title'] ?></h3>
                    <?php endif; ?>
                    <?php if ($attributes['items'][2]['description']) : ?>
                      <h4 class="posts-latest__item-description"><?= $attributes['items'][2]['description'] ?></h4>
                    <?php endif; ?>
                    <div class="posts-latest__item-buttons">
                      <?php if ($attributes['items'][2]['button']) : ?>
                        <div class="posts-latest__item-link-button">
                          <a class="link-button" href="<?= $attributes['items'][2]['target'] ?>">
                            <?= $attributes['items'][2]['button'] ?>
                          </a>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>