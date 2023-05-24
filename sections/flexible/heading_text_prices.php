<?php
  global $post;
  $heading_component = get_sub_field('heading_component', $post->ID);
  $text_component = get_sub_field('text_component', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
  $enable_white_version = get_sub_field('enable_white_version', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
?>

<section class="heading-text-prices <?php echo get_modifier_version($enable_white_version, 'heading-text-prices', 'white'); ?>" >
  <div class="container" <?php display_margins_for_page($post->ID) ?>>
    <?php

      get_template_part( 'sections/heading-text', '', array(
          'heading_component' => $heading_component,
          'text_component' => $text_component,
          'enable_white_version' => $enable_white_version,
          'text_component_enable_full_width' => $text_component_enable_full_width,
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
                $final_description = $description ? '<span class="tooltip"><span class="tooltip__text">' . $description . '</span></span>' : NULL;
                echo $name ? '<p class="heading-text-prices__row-name">' . $name . $final_description . '</p>' : NULL;
                echo $price ? '<div class="heading-text-prices__row-price"><span class="heading-text-prices__price-button">' . $price . '</span></div>' : NULL;
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