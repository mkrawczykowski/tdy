<?php
  global $post;
  $heading_component = get_sub_field('heading_component', $post->ID);
  $text_component = get_sub_field('text_component', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
  $enable_white_version = get_sub_field('enable_white_version', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
  $map = get_sub_field('map_image', $post->ID);
?>

<section class="heading-text-map <?php echo get_modifier_version($enable_white_version, 'heading-text-columns', 'white'); ?>" >
  <div class="container"<?php display_margins_for_page($post->ID) ?>>
    <!-- <div class="section-background <?php echo get_modifier_version($enable_white_version, 'section-background', 'white'); ?>"> -->
      <?php

      get_template_part( 'sections/heading-text', '', array(
        'heading_component' => $heading_component,
        'text_component' => $text_component,
        'enable_white_version' => $enable_white_version
      ) );
      ?>
      
      <div class="heading-text-columns__map">
          <?php 
            echo $map ? wp_get_attachment_image($map, 'image-1640', NULL, array( "class" => "heading-text-columns__icon" )) : NULL; 
          ?>
      </div>
      

    <!-- </div> -->
  </div>
</section>