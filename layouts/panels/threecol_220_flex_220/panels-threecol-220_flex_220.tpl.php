<?php
/**
 * @file
 * Template for the 3 column panel layout.
 *
 * This template provides a three column 220px - variable - 220px panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['sidebar_left']: Content in the left column.
 *   - $content['content_middle']: Content in the middle column.
 *   - $content['sideabar_right']: Content in the right column.
 */

 /*
  * Additional CSS clases that are added in to adjust the width of elements in case the sidebar(s) are empty.
  */

 $add_to_css_classes = '';
 if (!$content['sidebar_right']) {
 	$add_to_css_classes .= ' panel-no-right-sidebar';
  }
 if (!$content['sidebar_left']) {
 	$add_to_css_classes .= ' panel-no-left-sidebar';
  }

?>
<div class="panel-display panel-3col clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel panel-col-first">
    <div class="inside"><?php print $content['sidebar_left']; ?></div>
  </div>

  <div class="panel-panel panel-col<?php print $add_to_css_classes; ?>">
    <div class="inside"><?php print $content['content_middle']; ?></div>
  </div>

  <div class="panel-panel panel-col-last">
    <div class="inside"><?php print $content['sidebar_right']; ?></div>
  </div>
</div>
