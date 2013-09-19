<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * OSU Omega theme.
 */

/*function osu_omega_preprocess_html(&$variables, $hook) {
	// Add external CSS file for webfonts 
  drupal_add_css('http://www.osu.edu/assets-public/fonts/webfonts.css', array('type'=>'external'));
}
*/

/**
 *
 * Simplified rendering - only returns the HTML markup of the input element(s)
 *
 * @param $element The element(s) being input
 * @return string Containing just the HTML markup from the element(s)
 */
function osu_omega_simple_render(&$element) {
    //echo "<pre>"; print_r($element); echo "</pre>";
    if (is_array($element)) {
        $output = "";
        foreach ($element as $subname => $subdata) {
            if (is_array($subdata) && isset($subdata['#markup']) && $subname{0} != '#') {

                $output .= $subdata['#markup'];
            }
        }
        return $output;
    }
    else {
        // Safe-guard for inappropriate use of render() on flat variables: return
        // the variable as-is.
        return $element;
    }
}
