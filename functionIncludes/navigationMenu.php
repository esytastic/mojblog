<?php

register_nav_menus(array(
  'primary' => __('Primary menu')
));

function add_link_atts($atts) {
  $atts['class'] = 'nav-link';
  return $atts;
}

add_filter('nav_menu_link_attributes','add_link_atts');