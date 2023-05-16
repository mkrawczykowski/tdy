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
    <?php
      get_template_part( 'sections/heading-text', '', array(
        'heading_component' => $heading_component,
        'text_component' => $text_component,
        'enable_white_version' => $enable_white_version,
        'heading_in_content' => true,
      ) );
    ?>
  </div>
</section>