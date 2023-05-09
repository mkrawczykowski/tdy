<?php
  $is_front_page;
  if (is_front_page()){
    $is_front_page = true;
  } else {
    $is_front_page = false;
  }
?>

<section class="featured-image <?php echo $is_front_page ? 'featured-image--front-page' : null; ?>">

</section>