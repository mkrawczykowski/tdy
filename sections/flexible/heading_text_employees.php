<?php
  global $post;
  $heading_component = get_sub_field('heading_component', $post->ID);
  $text_component = get_sub_field('text_component', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
  $enable_white_version = get_sub_field('enable_white_version', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
?>

<section class="heading-text-employees <?php echo get_modifier_version($enable_white_version, 'heading-text-employees', 'white'); ?>">
  <div class="container " <?php display_margins_for_page($post->ID) ?>>
      <?php
        get_template_part( 'sections/heading-text', '', array(
          'heading_component' => $heading_component,
          'text_component' => $text_component,
          'enable_white_version' => $enable_white_version,
          'text_component_enable_full_width' => $text_component_enable_full_width,
          'heading_in_content' => true,
        ) );

        if ( have_rows('employees_repeater', $post->ID) ): 
      ?>
        <div class="heading-text-employees__columns">
          <?php
          while( have_rows('employees_repeater', $post->ID) ) : the_row(); 
            $employee = get_sub_field('employers_repeater__image', $post->ID);
            ?>
            
            <div class="heading-text-employees__column">
              <?php 
                echo $employee ? wp_get_attachment_image($employee, 'image-260', NULL, array( "class" => "heading-text-employees__icon" )) : NULL; 
              
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
  </div>
</section>