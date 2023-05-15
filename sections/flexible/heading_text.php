<?php
  global $post;
  $heading_component = get_sub_field('heading_component', $post->ID);
  $text_component = get_sub_field('text_component', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
  $enable_white_version = get_sub_field('enable_white_version', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
?>

<section class="heading-text" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
    <div class="section-background <?php echo get_modifier_version($enable_white_version, 'section-background', 'white'); ?>">
      <?php if ($heading_component) : ?>
        <h2 class="heading <?php echo get_modifier_version($enable_white_version, 'heading', 'black'); ?>">
          <?php echo $heading_component; ?>
        </h2>
      <?php endif; ?>
      <?php if ($text_component) : ?>
        <?php
          $classes = 'text ';
          $classes .= get_modifier_version($enable_white_version, 'text', 'black');
          $classes .= ' ';
          $classes .= get_modifier_version($text_component_enable_full_width, 'text', 'full-width');
        ?>
        <div class=" <?php echo $classes; ?>">
          <?php echo $text_component; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>