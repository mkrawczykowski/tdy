<?php

/**
 *
 * Create inline margin styles from ACF fields for section
 *
 * @param   integer  $pageID  Page ID
 * @return  string   Inline CSS styles
 *
 */

function display_margins_for_page($pageID){
  $margin_padding_styles = 'style="';

  //generating margins
  $margin_padding_styles .= get_sub_field('margin_top', $pageID) ? 'margin-top: ' . strval(get_sub_field('margin_top', $pageID)) . 'px; ' : null;
  $margin_padding_styles .= get_sub_field('margin_bottom', $pageID) ? 'margin-bottom: ' . strval(get_sub_field('margin_bottom', $pageID)) . 'px; ' : null;

  //generating paddings
  $margin_padding_styles .= get_sub_field('padding_top', $pageID) ? 'padding-top: ' . strval(get_sub_field('padding_top', $pageID)) . 'px; ' : null;
  $margin_padding_styles .= get_sub_field('padding_bottom', $pageID) ? 'padding-bottom: ' . strval(get_sub_field('padding_bottom', $pageID)) . 'px;' : null;
  $margin_padding_styles .= '"';

  echo $margin_padding_styles;
}
?>