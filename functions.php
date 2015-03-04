<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

/**
 * Register our menu areas
 *
 */
function onetribewellness_menus_init() {
	register_nav_menus( array(
		'header-menu' => __( 'Header Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	) );
}
add_action( 'init', 'onetribewellness_menus_init' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function onetribewellness_widgets_init() {
	register_sidebar( array(
		'name' => 'Opt In Form',
		'id' => 'opt_in_form',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="h-widget">',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => 'Contact Form',
		'id' => 'contact_form',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="h-widget">',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => 'Product 1',
		'id' => 'product_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="h-widget">',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => 'Product 2',
		'id' => 'product_2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="h-widget">',
		'after_title' => '</h4>',
	) );
	
	register_sidebar( array(
		'name' => 'Product 3',
		'id' => 'product_3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="h-widget">',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'onetribewellness_widgets_init' );

// Is Front Page
// =============================================================================

function x_is_front_page() {

  if ( function_exists( 'is_front_page' ) && is_front_page() ) {
    return true;
  } else {
    return false;
  }

}


// Is Cart
// =============================================================================

function x_is_cart() {

  if ( function_exists( 'is_cart' ) && is_cart() ) {
    return true;
  } else {
    return false;
  }

}

// Is Checkout
// =============================================================================

function x_is_checkout() {

  if ( function_exists( 'is_checkout' ) && is_checkout() ) {
    return true;
  } else {
    return false;
  }

}

// Is Account
// =============================================================================

function x_is_account() {

  if ( function_exists( 'is_account_page' ) && is_account_page() ) {
    return true;
  } else {
    return false;
  }

}