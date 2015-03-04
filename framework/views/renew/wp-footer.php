<?php

// =============================================================================
// VIEWS/RENEW/WP-FOOTER.PHP
// -----------------------------------------------------------------------------
// Footer output for Renew.
// =============================================================================

?>

<?php 

$x_footer_bottom_display = x_get_option( 'x_footer_bottom_display', '1' );

if ( x_is_product() ) {
	$x_footer_bottom_display = 0;
}

?>

  <?php x_get_view( 'global', '_header', 'widget-areas' ); ?>
  <?php x_get_view( 'global', '_footer', 'scroll-top' ); ?>
  <?php x_get_view( 'global', '_footer', 'widget-areas' ); ?>

  <?php if ( $x_footer_bottom_display ) : ?>

    <footer class="x-colophon bottom" role="contentinfo">
      <div class="x-container-fluid max width">

        <?php if ( x_get_option( 'x_footer_social_display', '1' ) == '1' ) : ?>
          <?php x_social_global(); ?>
        <?php endif; ?>

        <?php if ( x_get_option( 'x_footer_menu_display', '1' ) == '1' ) : ?>
          <?php x_get_view( 'global', '_nav', 'footer' ); ?>
        <?php endif; ?>

        <?php if ( x_get_option( 'x_footer_content_display', '1' ) == '1' ) : ?>
          <div class="x-colophon-content">
            <?php echo x_get_option( 'x_footer_content' ); ?>
          </div>
        <?php endif; ?>

      </div>
    </footer>

  <?php endif; ?>

<?php x_get_view( 'global', '_footer' ); ?>