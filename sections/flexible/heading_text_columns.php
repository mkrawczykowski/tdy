<?php
  global $post;
  $heading_component = get_sub_field('heading_component', $post->ID);
  $text_component = get_sub_field('text_component', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
  $enable_white_version = get_sub_field('enable_white_version', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
?>

<section class="heading-text-columns <?php echo get_modifier_version($enable_white_version, 'heading-text-columns', 'white'); ?>" >
  <div class="container"<?php display_margins_for_page($post->ID) ?>>
    <!-- <div class="section-background <?php echo get_modifier_version($enable_white_version, 'section-background', 'white'); ?>"> -->
      <?php

      get_template_part( 'sections/heading-text', '', array(
        'heading_component' => $heading_component,
        'text_component' => $text_component,
        'enable_white_version' => $enable_white_version,
        'heading_in_content' => true,
      ) );

      if ( have_rows('columns_repeater', $post->ID) ):
      
      ?>
        <div class="heading-text-columns__columns">
          <?php
          while( have_rows('columns_repeater', $post->ID) ) : the_row(); 
            $icon = get_sub_field('columns_repeater__icon', $post->ID);
            $heading = get_sub_field('columns_repeater__heading', $post->ID);
            $text = get_sub_field('columns_repeater__text', $post->ID);
            ?>
            
            <div class="heading-text-columns__column">
              <?php 
                echo $icon ? wp_get_attachment_image($icon, 'image-1640', NULL, array( "class" => "heading-text-columns__icon" )) : NULL; 
              
                echo $heading ? '<h3 class="heading heading--red-small">' . $heading . '</h3>' : NULL;
                
                echo $text ? '<p class="text text--small">' . $text . '</p>' : NULL;
              ?>
            </div>

          <?php
          endwhile; ?>
        </div>
      <?php
        endif;
      ?>

    <!-- </div> -->
  </div>
</section>