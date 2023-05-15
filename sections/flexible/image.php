<?php
  global $post;
  $image = get_sub_field('image', $post->ID);
  $set_section_below = get_sub_field('set_section_below', $post->ID);
?>

<section class="image <?php echo get_modifier_version($set_section_below, 'image', 'below'); ?>" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
    <div class="row">
      <div class="image__picture">
        <?php
          echo wp_get_attachment_image($image, 'image-1640', NULL, array());
        ?>
      </div>
    </div>
  </div>
</section>