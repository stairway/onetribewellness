<?php

// =============================================================================
// VIEWS/GLOBAL/_TOPBAR.PHP
// -----------------------------------------------------------------------------
// Includes topbar output.
// =============================================================================

?>

<?php 

$x_topbar_display = x_get_option( 'x_topbar_display', '' );

if ( !x_is_front_page() ) {
	$x_topbar_display = 0;
}

?>

<?php if ( $x_topbar_display ) : ?>

  <div class="x-topbar">
    <div class="x-topbar-inner x-container max width">
      <?php if ( x_get_option( 'x_topbar_content' ) != '' ) : ?>
      <p class="p-info"><?php echo x_get_option( 'x_topbar_content' ); ?></p>
      <?php else: ?>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      <?php endif; ?>
      <?php x_social_global(); ?>
    </div>
  </div>

<?php endif; ?>