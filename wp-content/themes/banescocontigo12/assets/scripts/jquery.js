jQuery(function () {
  jQuery(document).on('gform_post_render', function () {
    jQuery('.sidebar-form input[type=file]').on('change', function () {
      const fileName = jQuery(this).val().split('\\').pop()
      jQuery('.gfield_description', jQuery(this).parent().parent()).html(fileName)
    })
  })
})