<?php
  $footer_top_text = get_field('footer_top_text', 'options');
  $normal_text = get_field('normal_text', 'options');
  $footer_bottom_image = get_field('footer_bottom_image', 'options');
  $copyright_text = get_field('copyright_text', 'options');
  $mobile_background = $footer_bottom_image['url'];
  
  $footer_top_text = Pacific_Helper::generate_paragraph(array(
    'text' => $footer_top_text,
    'class' => 'footer__top-text',
  ));

  $normal_text = Pacific_Helper::generate_paragraph(array(
    'text' => $normal_text,
    'class' => 'footer__normal-text',
  ));

  $footer_bottom_image  = Pacific_Helper::generate_image( array(
    'image' => $footer_bottom_image,
    'class' => 'footer__bottom-image',
    'attributes' => array(
      'title' => $footer_bottom_image ? $footer_bottom_image['title'] : null,
      'alt' => $footer_bottom_image ? $footer_bottom_image['title'] : null
    )
  ));

  $copyright_text = Pacific_Helper::generate_wysiwyg(array(
    'content' => $copyright_text,
    'classes' => array( 'footer__copyright-text' ),
  ));
?>

<footer class="footer" style="
  --mobile-background: url('<?php echo esc_attr($mobile_background); ?>');
">
  <div class="footer__top-part">
    <?php echo $footer_top_text; ?>
    <?php echo $normal_text; ?>
  </div>
    <?php get_template_part('templates/quiz-middle-part'); ?>
  <div class="footer__bottom-part">
    <div class="footer__copyrights">
      <?php get_template_part('templates/footer-links'); ?>
      <?php echo $copyright_text; ?>
    </div>
    <?php echo $footer_bottom_image; ?>
  </div>
</footer>

<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=dxrx4dacogxxrmx5nusjeg" async="true"></script>
<script src="https://cdn.jsdelivr.net/npm/trig-js/src/trig.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>
