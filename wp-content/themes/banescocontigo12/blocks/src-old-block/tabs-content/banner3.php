<section class="wp-block-banescocontigo-text-image-slider">
    <div class="text-image-slider">
        <div class="container">
            <div class="text-image-slider__inner">
                <div class="text-image-slider__image"><img decoding="async"
                        src="<?= $attributes['items3'][0]['banner_image']['url']; ?>" alt="image"></div>
                <div class="text-image-slider__text">
                    <h2 class="text-image-slider__title"><?= $attributes['items3'][0]['banner_title']; ?></h2>
                    <div class="text-image-slider__content">
                        <?= $attributes['items3'][0]['banner_text']; ?>
                    </div>
                    <?php
                    if(!empty($attributes['items3'][0]['initial_opened'])): ?>
                    <div class="text-image-slider__modal text-image-slider__modal-popup-feature threelink">+ Ver todos los
                        detalles</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="text-image-slider__modal-content modalone">
<?php if(!empty($attributes['items3'][0]['modal_title'])): ?>
        <h2 class="text-image-slider__modal-content-title"><?php echo $attributes['items3'][0]['modal_title']; ?></h2>
    <?php endif; ?>
    <?php if(!empty($attributes['items3'][0]['modal_text'])): ?>
        <div>
            <?php echo $attributes['items3'][0]['modal_text']; ?>
        </div>
    <?php endif; ?>
    <span class="text-image-slider__modal-close closethree">
        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12.1159 9.22559L18.5659 3.10827C18.8483 2.83976 19.007 2.47558 19.007 2.09585C19.007 1.71611 18.8483 1.35193 18.5659 1.08342C18.2834 0.814911 17.9003 0.664062 17.5009 0.664062C17.1014 0.664062 16.7183 0.814911 16.4359 1.08342L10.0009 7.215L3.56589 1.08342C3.28343 0.814911 2.90034 0.664062 2.50089 0.664062C2.10143 0.664063 1.71834 0.814911 1.43588 1.08342C1.15343 1.35193 0.994747 1.71611 0.994747 2.09585C0.994747 2.47558 1.15343 2.83976 1.43588 3.10827L7.88589 9.22559L1.43588 15.3429C1.29529 15.4755 1.1837 15.6332 1.10755 15.8069C1.0314 15.9807 0.992188 16.1671 0.992188 16.3553C0.992188 16.5436 1.0314 16.73 1.10755 16.9037C1.1837 17.0775 1.29529 17.2352 1.43588 17.3678C1.57533 17.5014 1.74123 17.6075 1.92402 17.6799C2.10681 17.7523 2.30287 17.7895 2.50089 17.7895C2.6989 17.7895 2.89496 17.7523 3.07775 17.6799C3.26054 17.6075 3.42644 17.5014 3.56589 17.3678L10.0009 11.2362L16.4359 17.3678C16.5753 17.5014 16.7412 17.6075 16.924 17.6799C17.1068 17.7523 17.3029 17.7895 17.5009 17.7895C17.6989 17.7895 17.895 17.7523 18.0778 17.6799C18.2605 17.6075 18.4264 17.5014 18.5659 17.3678C18.7065 17.2352 18.8181 17.0775 18.8942 16.9037C18.9704 16.73 19.0096 16.5436 19.0096 16.3553C19.0096 16.1671 18.9704 15.9807 18.8942 15.8069C18.8181 15.6332 18.7065 15.4755 18.5659 15.3429L12.1159 9.22559Z"
                fill="#708090" />
        </svg>
    </span>
</div>
<div class="text-image-slider__modal-content-overlay overlay1"></div>

<script>
const threelink = document.getElementsByClassName("threelink");

if (threelink.length > 0) {
    document.querySelectorAll('.threelink').forEach(function(item) {
        item.addEventListener('click', function(e) {
            e.preventDefault()
            document.querySelector('.modalone').classList.add('active-modal')
            document.querySelector('.overlay1').classList.add(
                'active-modal')
        })
    })

    document.querySelector('.closethree')?.addEventListener('click', function(e) {
        e.preventDefault()

        document.querySelector('.modalone').classList.remove('active-modal')
        document.querySelector('.overlay1').classList.remove('active-modal')
    })
}
</script>