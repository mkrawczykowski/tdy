<?php
  global $post;
  $is_front_page;

  if (is_front_page()){
    $is_front_page = true;
    $heading_component = 
      get_field('heading_component', $post->ID) ?  
      '<h1 class="heading heading--white heading--center">' . get_field('heading_component', $post->ID) . '</h1>' 
      : NULL;

    $classes_list = 'text text--white';
    $classes_list .= $text_component_full_width ? 'text--full-width' : NULL;
    $text_component = get_field('text_component', $post->ID) ?
      '<div class="text ' . $classes_list . '">' . get_field('text_component', $post->ID) . '</div>'
      : NULL;

    $text_component_full_width = get_field('text_component_enable_full_width', $post->ID);

    

    $header_section_content = $heading_component . $text_component;
  } else {
    $is_front_page = false;
    $header_section_content = get_the_title($post->ID) ? '<h1 class="heading">' . get_the_title($post->ID) . '</h1>' : NULL;
  }
?>

<section class="featured-image <?php echo $is_front_page ? 'featured-image--front-page' : null; ?>">
  <?php 
  echo $post->ID;
  echo $header_section_content; ?>
</section>