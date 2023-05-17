<?php
  global $post;
  $heading_component = get_sub_field('heading_component', $post->ID);
  $text_component = get_sub_field('text_component', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
  $enable_white_version = get_sub_field('enable_white_version', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
?>

<section class="heading-text-prices" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
    <div class="section-background <?php echo get_modifier_version($enable_white_version, 'section-background', 'white'); ?>">
      <?php

      get_template_part( 'sections/heading-text', '', array(
        'heading_component' => $heading_component,
        'text_component' => $text_component,
        'enable_white_version' => $enable_white_version,
        'heading_in_content' => true,
      ) );

      if ( have_rows('prices_repeater', $post->ID) ):
      
      ?>
        <div class="heading-text-prices__rows">
          <?php
            while( have_rows('prices_repeater', $post->ID) ) : the_row(); 
              $name = get_sub_field('prices_repeater__name', $post->ID);
              $description = get_sub_field('prices_repeater__description', $post->ID);
              $price = get_sub_field('prices_repeater__price', $post->ID);
            ?>
            
            <div class="heading-text-prices__row">
              <?php
                echo $name ? '<p class="text text--small">' . $name . '</p>' : NULL;
                echo $description ? '<a class="tooltip"><p class="tooltip__text">' . $description . '</p></a>' : NULL;
                echo $price ? '<p class="text text--small">' . $price . '</p>' : NULL;
              ?>
            </div>

          <?php
          endwhile; ?>
        </div>
      <?php
        endif;
      ?>

    </div>
  </div>
</section>