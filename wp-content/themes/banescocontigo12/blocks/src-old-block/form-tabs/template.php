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
    <div class="form-tabs" style="
      --paddings-top: <?= ($attributes['paddings']['desktop']['top']) ? $attributes['paddings']['desktop']['top'] : '0px' ?>;
      --paddings-top--mobile: <?= ($attributes['paddings']['mobile']['top']) ? $attributes['paddings']['mobile']['top'] : '0px' ?>;
      --paddings-bottom: <?= ($attributes['paddings']['desktop']['bottom']) ? $attributes['paddings']['desktop']['bottom'] : '0px' ?>;
      --paddings-bottom--mobile: <?= ($attributes['paddings']['mobile']['bottom']) ? $attributes['paddings']['mobile']['bottom'] : '0px' ?>;
      --margins-top: <?= ($attributes['margins']['desktop']['top']) ? $attributes['margins']['desktop']['top'] : '0px' ?>;
      --margins-top--mobile: <?= ($attributes['margins']['mobile']['top']) ? $attributes['margins']['mobile']['top'] : '0px' ?>;
      --margins-bottom: <?= ($attributes['margins']['desktop']['bottom']) ? $attributes['margins']['desktop']['bottom'] : '0px' ?>;
      --margins-bottom--mobile: <?= ($attributes['margins']['mobile']['bottom']) ? $attributes['margins']['mobile']['bottom'] : '0px' ?>;
      --gradient: <?= ($attributes['gradient']) ? $attributes['gradient'] : '#fff' ?>;
    " data-columns="<?= ($attributes['columns']) ? $attributes['columns'] : '1' ?>">
        <div class="container">

            <?php if ($attributes['title']) : ?>
            <h2 class="form-tabs__title"><?= $attributes['title'] ?></h2>
            <?php endif; ?>

            <div class="form-tabs__tabs" data-tabs>
              <!-- btns -->
                <div class="form-tabs__triggers" data-triggers>
                    <?php if ($attributes['title1']) : ?>
                    <a class="form-tabs__trigger" href="#certificados-financieros"><?= $attributes['title1'] ?></a>
                    <?php endif; ?>
                    <?php if ($attributes['title2']) : ?>
                    <a class="form-tabs__trigger" href="#certificados-financieros"><?= $attributes['title2'] ?></a>
                    <?php endif; ?>
                    <?php if ($attributes['title3']) : ?>
                    <a class="form-tabs__trigger" href="#prestamos-personales"><?= $attributes['title3'] ?></a>
                    <?php endif; ?>
                    <?php if ($attributes['title4']) : ?>
                    <a class="form-tabs__trigger" href="#prestamos-de-vehiculo"><?= $attributes['title4'] ?></a>
                    <?php endif; ?>
                    <?php if ($attributes['title5']) : ?>
                    <a class="form-tabs__trigger" href="#prestamos-de-vehiculo"><?= $attributes['title5'] ?></a>
                    <?php endif; ?>
                </div>

                <div class="form-tabs__body" data-body>

                      <div class="form-tabs__inner" data-id="#certificados-financieros">
                          <?php include(plugin_dir_path( __FILE__ ).'./inc/certificados-financieros.php'); ?>
                      </div>

                      <div class="form-tabs__inner" data-id="#certificados-financieros">
                        <?php include(plugin_dir_path( __FILE__ ).'./inc/certificados-financieros.php'); ?>
                      </div>

                      <div class="form-tabs__inner" data-id="#prestamos-personales">
                        <?php include(plugin_dir_path( __FILE__ ).'./inc/prestamos-personales.php'); ?>
                      </div>

                      <div class="form-tabs__inner" data-id="#prestamos-de-vehiculo">
                        <?php include(plugin_dir_path( __FILE__ ).'./inc/prestamos-hipotecarios-banesco.php'); ?>
                      </div>

                      <div class="form-tabs__inner" data-id="#prestamos-de-vehiculo">
                        <?php include(plugin_dir_path( __FILE__ ).'./inc/prestamos-de-vehiculo.php'); ?>
                      </div>

                </div>

                
            </div>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.form-tabs').forEach(function(form) {

})
</script>

<script>
new class Tabs {

    constructor() {
        this.$wrapper;
        this.$triggers;
        this.$body;
        this.init();
    }

    init() {
        document.querySelectorAll('[data-tabs]').forEach((wrapper) => {
            this.$wrapper = wrapper;
            this.$triggers = [...wrapper.querySelector('[data-triggers]').children];
            this.$body = [...wrapper.querySelector('[data-body]').children];
            this.$triggers[0].classList.add('active');
            this.$body[0].classList.add('active');
            this.update();
            this.addListenerClick();
            this.addListenerHash();
        });
    }

    update(event) {
        const trigger = this.$wrapper.querySelector(`a[href="${window.location.hash}"]`);
        const content = this.$wrapper.querySelector(`[data-id="${window.location.hash}"]`);

        if (window.location.hash && trigger && content) {

            this.$triggers.forEach((trigger) => {
                trigger.classList.remove('active');
            });

            this.$body.forEach((content) => {
                content.classList.remove('active');
            });

            trigger.classList.add('active');
            content.classList.add('active');
        }

        sessionStorage.setItem("last-url", event?.oldURL);
    }

    addListenerClick() {
        this.$triggers.forEach(trigger => {
            trigger.addEventListener('click', this.changeTab.bind(this));
        });
    }

    addListenerHash() {
        window.addEventListener('hashchange', this.update.bind(this));
    }

    changeTab(event) {
        event.preventDefault();

        const trigger = event.target.closest('a[href^="#"]');
        const content = this.$wrapper.querySelector(`[data-id="${trigger.hash}"]`);

        this.$triggers.forEach(trigger => {
            trigger.classList.remove('active');
        });

        this.$body.forEach(content => {
            content.classList.remove('active');
        });

        trigger.classList.add('active');
        content.classList.add('active');

        history.replaceState(undefined, undefined, trigger.hash)
    }
};
</script>