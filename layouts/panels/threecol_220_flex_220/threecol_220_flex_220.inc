<?php

/**
 * implementation of hook_panels_layouts
 */
// Plugin definition
$plugin = array(
  'title' => t('Three column 220px/variable/220px'),
  'category' => t('Ohio State University'),
  'icon' => 'threecol_220_flex_220.png',
  'theme' => 'panels_threecol_220_flex_220',
  'theme arguments' => array('id', 'content'),
  'css' => 'threecol_220_flex_220.css',
  'regions' => array(
    'sidebar_left' => t('Left sidebar'),
    'content_middle' => t('Middle column'),
    'sidebar_right' => t('Right sidebar')
  ),
);

