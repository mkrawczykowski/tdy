<?php
  global $post;
  $heading_component = get_sub_field('heading_component', $post->ID);
  $text_component = get_sub_field('text_component', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
  $enable_white_version = get_sub_field('enable_white_version', $post->ID);
  $text_component_enable_full_width = get_sub_field('text_component_enable_full_width', $post->ID);
?>

<section class="heading-text-gallery <?php echo get_modifier_version($enable_white_version, 'heading-text-employees', 'white'); ?>">
  <div class="container " <?php display_margins_for_page($post->ID) ?>>
      <?php
        get_template_part( 'sections/heading-text', '', array(
          'heading_component' => $heading_component,
          'text_component' => $text_component,
          'enable_white_version' => $enable_white_version,
          'text_component_enable_full_width' => $text_component_enable_full_width,
          'heading_in_content' => true,
        ) );

        if ( have_rows('gallery_repeater', $post->ID) ): 
      ?>
        <div class="heading-text-gallery__gallery">
          <?php
            while( have_rows('gallery_repeater', $post->ID) ) : the_row(); 
              $image_or_film = get_sub_field('gallery_repeater__image_or_film', $post->ID);
              $image = get_sub_field('gallery_repeater__image', $post->ID);
              $url = get_sub_field('gallery_repeater__film_url', $post->ID);

              $icon_image = '
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96"><g transform="translate(-2 -2)"><path d="M88,2H12A10,10,0,0,0,2,12V88A10,10,0,0,0,12,98H88A10,10,0,0,0,98,88V12A10,10,0,0,0,88,2Z" fill="#c12525"/><path d="M98,88V54.582L73.717,30.3A1.048,1.048,0,0,0,73,30H27a1,1,0,0,0-1,1V69c0,.01.01.02.01.03a1.008,1.008,0,0,0,.05.25.647.647,0,0,0,.04.13.619.619,0,0,0,.11.17.878.878,0,0,0,.12.15L54.6,98H88A10,10,0,0,0,98,88Z" fill="#9f1e1e"/><path d="M34.99,44a5,5,0,1,0-5-5A5.008,5.008,0,0,0,34.99,44Z" fill="#fff"/><path d="M73,30H27a1,1,0,0,0-1,1V69c0,.01.006.02.006.03a.979.979,0,0,0,.05.245.87.87,0,0,0,.038.135,2.631,2.631,0,0,0,.229.316c.01.01.015.024.026.033a.9.9,0,0,0,.166.1,1.1,1.1,0,0,0,.12.07.974.974,0,0,0,.318.064c.016,0,.03.01.047.01H73a1,1,0,0,0,1-1V31A1,1,0,0,0,73,30ZM51.89,68H29.16L42.465,52.373,45.04,54.94a.992.992,0,0,0,1.41.01l3.43-3.42,3.41,3.41a.978.978,0,0,0,1.41,0l2.712-2.7,3.26,3.82ZM72,58.43l-5.15-8.44a1,1,0,0,0-1.66-.07l-3.3,4.488L58.23,50.121,50.76,41.35a1.024,1.024,0,0,0-1.52,0l-7.582,8.891s-.008.005-.011.009L28,66.279V32H72Z" fill="#fff"/></g></svg>
              ';

              $icon_film = '
                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 96 96"><g transform="translate(2.498 0.312)"><path d="M88,2H12A10,10,0,0,0,2,12V88A10,10,0,0,0,12,98H88A10,10,0,0,0,98,88V12A10,10,0,0,0,88,2Z" transform="translate(-4.498 -2.312)" fill="#c12525"/><path d="M98,88V64.534L78.767,44.779c-.19-.18-13.426,6.746-13.426,6.746l-1.777-4.862c-.55,0-37.238-1.434-37.238-.884L26,69c0,.01.01.02.01.03a1.008,1.008,0,0,0,.05.25.647.647,0,0,0,.04.13.619.619,0,0,0,.11.17.878.878,0,0,0,.12.15L54.6,98H88A10,10,0,0,0,98,88Z" transform="translate(-4.498 -2.312)" fill="#9f1e1e"/><path d="M162.2,170.835l-10.224-5.5V156.9l10.224-5.5ZM148.23,172.1H115.378v-21.96h32.852V172.1h0ZM122.353,131.69a6.976,6.976,0,1,1-6.975,6.977A6.984,6.984,0,0,1,122.353,131.69Zm8.222,13.857a7.865,7.865,0,0,0,.534.839h-1.32a10.144,10.144,0,0,0,.785-.839Zm6.458-7.1a3.6,3.6,0,1,1-3.6,3.6A3.6,3.6,0,0,1,137.033,138.452Zm28.008,8.2a1.872,1.872,0,0,0-1.849-.041l-11.212,6.028v-4.376a1.874,1.874,0,0,0-1.875-1.875h-7.149a7.341,7.341,0,0,0-10.2-10.31,10.724,10.724,0,1,0-17.844,10.31H113.5a1.874,1.874,0,0,0-1.875,1.875v25.71a1.875,1.875,0,0,0,1.875,1.875h36.6a1.875,1.875,0,0,0,1.875-1.875v-4.378l11.212,6.028a1.875,1.875,0,0,0,2.762-1.651v-25.71a1.879,1.879,0,0,0-.914-1.611Z" transform="translate(-90.29 -104.206)" fill="#fefefe" fill-rule="evenodd"/></g></svg>
              ';

              $final_url = $image_or_film === 'image' ? 
                  wp_get_attachment_image_url($image, 'large') : $url;
              
              $data_for_film = $image_or_film === 'film' ? 'data-autoplay="true" data-vbtype="video"' : NULL;

              $final_icon = $image_or_film === 'image' ? $icon_image : $icon_film;
            ?>
             
            
            <a class="heading-text-gallery__image-film venobox" <?php echo $data_for_film; ?> href="<?php echo $final_url; ?>">
              <?php 
                echo '<div class="heading-text-gallery__icon">' . $final_icon . '</div>';
                echo $image ? wp_get_attachment_image($image, 'image-398', NULL, array( "class" => "heading-text-employees__thumbnail" )) : NULL; 
              ?>
            </a>

          <?php
          endwhile; ?>
        </div>
      <?php
        endif;
      ?>
  </div>
</section>