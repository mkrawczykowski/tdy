<?php
  global $post;
  $image_or_text_right = get_sub_field('image_or_text_right', $post->ID);
  $image_or_text_left = get_sub_field('image_or_text_left', $post->ID);
  $text_below = get_sub_field('text_below', $post->ID);
  $enable_white_version = get_sub_field('enable_white_version', $post->ID);
?>

<section class="columns-image-text <?php echo get_modifier_version($enable_white_version, 'columns-image-text', 'white'); ?>" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
    <div class="row">
      <div class="col col--first">
        <?php display_column_content('left', $image_or_text_left); ?>
      </div>
      <div class="col col--second">
        <?php display_column_content('right', $image_or_text_right); ?>
      </div>
    </div>

    <?php
    if ($text_below) : ?>
      <div class="row">
        <div class="col">
          <div class="columns-image-text__text">
            <?php echo apply_filters('the_content', get_sub_field('text_below', $post->ID)); ?>
          </div>
        </div>
    </div>
    <?php endif; ?>

  </div>
</section>