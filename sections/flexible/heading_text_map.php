<?php
  global $post;
  $heading_component = get_sub_field('heading_component', $post->ID);
  $text_component = get_sub_field('text_component', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
  $enable_white_version = get_sub_field('enable_white_version', $post->ID);
  $map = get_sub_field('map_image', $post->ID);
  $address = get_sub_field('address', $post->ID);
  $phone = get_sub_field('phone', $post->ID);
  $email = get_sub_field('email', $post->ID);
?>

<section class="heading-text-map <?php echo get_modifier_version($enable_white_version, 'heading-text-map', 'white'); ?>" >
  <div class="container"<?php display_margins_for_page($post->ID) ?>>
      <?php

      get_template_part( 'sections/heading-text', '', array(
        'heading_component' => $heading_component,
        'text_component' => $text_component,
        'enable_white_version' => $enable_white_version,
        'text_component_enable_full_width' => $text_component_enable_full_width,
        'heading_in_content' => true,
      ) );
      ?>
      
      <div class="heading-text-map__image">
          <?php 
            echo $map ? wp_get_attachment_image($map, 'image-1640', NULL, array( "class" => "heading-text-columns__icon" )) : NULL; 
          ?>
      </div>
      <div class="heading-text-map__contact-info">
        <?php
          echo $address ? '<div class="heading-text-map__address">' . $address . '</div>' : NULL;
        ?>
        <?php
          echo $phone ? '<div class="heading-text-map__phone">' . $phone . '</div>' : NULL;
        ?>
        <?php
          echo $email ? '<div class="heading-text-map__email">' . $email . '</div>' : NULL;
        ?>
      </div>
  </div>
</section>