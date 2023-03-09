<?php
/**
 * Title: Meta
 * Slug: twentytwentythreechild/meta
 * Categories: query
 * Keywords: meta
 * Block Types: core/template-part/post-meta
 */
?>


<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">


  <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"fontSize":"small"} -->
  <div class="wp-block-columns alignwide has-small-font-size" style="margin-top:var(--wp--preset--spacing--30)">
    <!-- wp:column {"style":{"spacing":{"blockGap":"0px"}}} -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"blockGap":"0.5ch"}},"layout":{"type":"flex"}} -->
      <div class="wp-block-group">
        <!-- wp:post-date /-->
        <!-- wp:paragraph -->
        <p>
          <?php echo esc_html_x( 'in', 'Preposition to show the relationship between the post and its categories', 'twentytwentythree' ); ?>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:post-terms {"term":"category"} /-->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->


  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->