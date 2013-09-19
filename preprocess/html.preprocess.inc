<?php

/**
 * Implements hook_preprocess_html().
 */
function osu_omega_preprocess_html(&$variables) {
  // Link to external CSS file for web fonts
  drupal_add_css('http://www.osu.edu/assets-public/fonts/webfonts.css', array('type'=>'external'));

  // Load the fallback.css for Internet Explorer 8 and lower.
  $path = drupal_get_path('theme', 'osu_omega');
  drupal_add_css("$path/css/osu_omega.fallback.css", array(
    'browsers' => array(
      '!IE' => FALSE,
      'IE' => 'lte IE 8',
    ),
    'group' => CSS_THEME,
    'weight' => 1000,
  ));
}
