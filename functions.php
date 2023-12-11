<?php

function loadingFiles()
{
  wp_enqueue_script("bootstrap", get_theme_file_uri("assets/vendors/bootstrap/bootstrap.bundle.js"), null, null, true);
  wp_enqueue_script("bootstrap3affix", get_theme_file_uri("assets/vendors/bootstrap/bootstrap.affix.js"), null, null, true);
  wp_enqueue_script("johnDoeScript", get_theme_file_uri("assets/js/johndoe.js"), null, null, true);
  // if (is_front_page()) {
  wp_enqueue_style("themifyIcons", get_theme_file_uri("assets/vendors/themify-icons/css/themify-icons.css"));
  wp_enqueue_style("johnDoeCss", get_theme_file_uri("assets/css/johndoe.css"));

  wp_enqueue_script("jquery341", get_theme_file_uri("assets/vendors/jquery/jquery-3.4.1.js"), null, null, true);
  wp_enqueue_script("isotope", get_theme_file_uri("assets/vendors/isotope/isotope.pkgd.js"), null, null, true);

  // }
  wp_enqueue_script("gooogleMaps", get_theme_file_uri("https://maps.googleapis.com/maps/api/js?key=KeyGoesHere&callback=initMap"), null, null, true);
}

add_action("wp_enqueue_scripts", "loadingFiles");