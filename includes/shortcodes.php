<?php

function button_function($atts, $content = null) {
	$a = shortcode_atts( array(
		'ikona' => 'gloves',
		'link' => 'https://',
		'wyrownanie' => 'lewa',
	), $atts );

  $icons = array(
    "rekawice" => "gloves",
    "kalendarz" => "calendar",
  );

  $align = array(
    "lewa" => "left",
    "srodek" => "center",
    "prawa" => "right",
  );

  $final_icon = $icons[$a['ikona']];
  $final_align = $align[$a['wyrownanie']];


  return '<div class="button button--' . $final_icon . ' button--' . $final_align . '"><a class="button__link" href="' . $a['link'] . '">' . $content . '</a></div>';
}
add_shortcode( 'button', 'button_function' );
?>
