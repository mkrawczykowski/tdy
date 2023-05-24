<?php
  global $post;
  $image = get_sub_field('image', $post->ID);
  $set_section_below = get_sub_field('set_section_below', $post->ID);
  $ignore_margin_top_small_screens = get_sub_field('ignore_margin_top_small_screens', $pageID);
?>

<section class="image <?php echo get_modifier_version($set_section_below, 'image', 'below'); echo ' ' .  get_modifier_version($ignore_margin_top_small_screens, 'image', 'no-top-margin'); ?>" <?php display_margins_for_page($post->ID) ?>>
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