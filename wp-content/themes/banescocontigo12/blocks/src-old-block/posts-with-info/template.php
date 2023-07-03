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
  <div class="posts-with-info" style="
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
        <h2 class="posts-with-info__title"><?= $attributes['title'] ?></h2>
      <?php endif; ?>
      <div class="posts-with-info__inner">
        <?php if ($attributes['items1']) : ?>
          <div class="posts-with-info__left">
            <?php foreach ($attributes['items1'] as $item1) : ?>
              <div class="posts-with-info__item" data-size="<?= ($item1['big']) ? 'big' : 'small' ?>" data-green="<?= ($item1['green']) ? 'true' : 'false' ?>" data-color="<?= ($item1['whiteText']) ? 'white' : 'default' ?>" data-mhidden="<?= ($item1['mHide']) ? 'true' : 'false' ?>">
                <?php if ($item1['image']['url'] || $item1['mImage']['url']) : ?>
                  <div class="posts-with-info__item-image">
                    <?php if ($item1['image']['url']) : ?>
                      <?php if ($item1['image']['url'] == '1.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/1.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '2.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/2.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '3.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/3.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '4.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/4.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '5.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/5.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '6.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/6.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '7.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/7.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '8.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/8.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '9.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/9.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '10.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/10.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '11.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/11.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '12.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/12.jpg" alt="image" />
                      <?php elseif ($item1['image']['url'] == '13.jpg') : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/13.jpg" alt="image" />
                      <?php elseif ($item1['image']['url']) : ?>
                        <img class="<?= ($item1['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?= $item1['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($item1['mImage']['url']) : ?>
                      <?php if ($item1['mImage']['url'] == 'm-1.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-1.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-2.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-2.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-3.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-3.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-4.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-4.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-5.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-5.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-6.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-6.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-7.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-7.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-8.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-8.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-9.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-9.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-10.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-10.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-11.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-11.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-12.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-12.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url'] == 'm-13.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-13.jpg" alt="image" />
                      <?php elseif ($item1['mImage']['url']) : ?>
                        <img class="only-mobile" src="<?= $item1['mImage']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($item1['title'] || $item1['description']) : ?>
                  <div class="posts-with-info__item-content">
                    <?php if ($item1['tags']) : ?>
                      <div class="posts-with-info__item-tags">
                        <?php foreach (explode(",", $item1['tags']) as $tag) : ?>
                          <div class="posts-with-info__item-tag">
                            <?= $tag ?>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
                    <?php if ($item1['title']) : ?>
                      <h3 class="posts-with-info__item-title"><?= $item1['title'] ?></h3>
                    <?php endif; ?>
                    <?php if ($item1['description']) : ?>
                      <div class="posts-with-info__item-description text"><?= $item1['description'] ?></div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($item1['button'] || $item1['primaryButton']) : ?>
                  <div class="posts-with-info__item-buttons">
                    <?php if ($item1['button']) : ?>
                      <div class="posts-with-info__item-link-button">
                        <a class="link-button" href="<?= $item1['target'] ?>">
                          <?= $item1['button'] ?>
                        </a>
                      </div>
                    <?php endif; ?>
                    <?php if ($item1['primaryButton']) : ?>
                      <div class="posts-with-info__item-primary-button">
                        <a class="primary-button" href="<?= $item1['primaryTarget'] ?>">
                          <?= $item1['primaryButton'] ?>
                        </a>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <?php if ($attributes['items2']) : ?>
          <div class="posts-with-info__right">
            <?php foreach ($attributes['items2'] as $item2) : ?>
              <div class="posts-with-info__item" data-size="<?= ($item2['big']) ? 'big' : 'small' ?>" data-green="<?= ($item2['green']) ? 'true' : 'false' ?>" data-color="<?= ($item2['whiteText']) ? 'white' : 'default' ?>" data-mhidden="<?= ($item2['mHide']) ? 'true' : 'false' ?>">
                <?php if ($item2['image']['url'] || $item2['mImage']['url']) : ?>
                  <div class="posts-with-info__item-image">
                    <?php if ($item2['image']['url']) : ?>
                      <?php if ($item2['image']['url'] == '1.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/1.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '2.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/2.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '3.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/3.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '4.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/4.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '5.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/5.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '6.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/6.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '7.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/7.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '8.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/8.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '9.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/9.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '10.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/10.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '11.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/11.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '12.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/12.jpg" alt="image" />
                      <?php elseif ($item2['image']['url'] == '13.jpg') : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?php the_block_url(__DIR__); ?>/assets/13.jpg" alt="image" />
                      <?php elseif ($item2['image']['url']) : ?>
                        <img class="<?= ($item2['mImage']['url']) ? 'only-desktop' : '' ?>" src="<?= $item2['image']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($item2['mImage']['url']) : ?>
                      <?php if ($item2['mImage']['url'] == 'm-1.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-1.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-2.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-2.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-3.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-3.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-4.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-4.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-5.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-5.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-6.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-6.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-7.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-7.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-8.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-8.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-9.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-9.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-10.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-10.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-11.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-11.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-12.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-12.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url'] == 'm-13.jpg') : ?>
                        <img class="only-mobile" src="<?php the_block_url(__DIR__); ?>/assets/m-13.jpg" alt="image" />
                      <?php elseif ($item2['mImage']['url']) : ?>
                        <img class="only-mobile" src="<?= $item2['mImage']['url'] ?>" alt="image" />
                      <?php endif; ?>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($item2['title'] || $item2['description']) : ?>
                  <div class="posts-with-info__item-content">
                    <?php if ($item2['tags']) : ?>
                      <div class="posts-with-info__item-tags">
                        <?php foreach (explode(",", $item1['tags']) as $tag) : ?>
                          <div class="posts-with-info__item-tag">
                            <?= $tag ?>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
                    <?php if ($item2['title']) : ?>
                      <h3 class="posts-with-info__item-title"><?= $item2['title'] ?></h3>
                    <?php endif; ?>
                    <?php if ($item2['description']) : ?>
                      <div class="posts-with-info__item-description text"><?= $item2['description'] ?></div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($item2['button'] || $item2['primaryButton']) : ?>
                  <div class="posts-with-info__item-buttons">
                    <?php if ($item2['button']) : ?>
                      <div class="posts-with-info__item-link-button">
                        <a class="link-button" href="<?= $item2['target'] ?>">
                          <?= $item2['button'] ?>
                        </a>
                      </div>
                    <?php endif; ?>
                    <?php if ($item2['primaryButton']) : ?>
                      <div class="posts-with-info__item-primary-button">
                        <a class="primary-button" href="<?= $item2['primaryTarget'] ?>">
                          <?= $item2['primaryButton'] ?>
                        </a>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($attributes['extraText']) : ?>
        <div class="posts-with-info__extra-text">
          <?= $attributes['extraText'] ?>
        </div>
      <?php endif; ?>
      <?php if ($attributes['items']) : ?>
        <div class="posts-with-info__items2">
          <?php foreach ($attributes['items'] as $item) : ?>
            <div class="posts-with-info__item2">
              <?php if ($item['image']['url']) : ?>
                <div class="posts-with-info__item2-image">
                  <?php if ($item['image']['url'] == 'pin.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/pin.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == 'mail.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/mail.svg" alt="icon" />
                  <?php elseif ($item['image']['url'] == 'tel.svg') : ?>
                    <img src="<?php the_block_url(__DIR__); ?>/assets/tel.svg" alt="icon" />
                  <?php elseif ($item['image']['url']) : ?>
                    <img src="<?= $item['image']['url'] ?>" alt="icon" />
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ($item['title'] || $item['link']) : ?>
                <div class="posts-with-info__item2-content">
                  <?php if ($item['title']) : ?>
                    <h3 class="posts-with-info__item2-title"><?= $item['title'] ?></h3>
                  <?php endif; ?>
                  <?php if ($item['link']) : ?>
                    <a class="posts-with-info__item2-link link-button" href="<?= $item['target'] ?>"><?= $item['link'] ?></a>
                  <?php endif; ?>
                  <?php if ($item['text']) : ?>
                    <div class="posts-with-info__item2-text text"><?= $item['text'] ?></div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>