<?php
/*
Plugin Name: realmaker Local Google Fonts
Plugin URI: http://www.realmaker.de
Description: Google Fonts werden entsprechend der DSGVO lokal geladen.
Version: 1.0
Author: Michael Rademacher
Author URI: http://www.realmaker.de
License: GPL2
*/

// Register style sheet.
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

/**
 * Register style sheet.
 */
function register_plugin_styles() {
  wp_register_style( 'realmaker_local_google_fonts', plugins_url( 'realmaker_local_google_fonts/css/realmaker_local_google_fonts.css' ) );
  wp_enqueue_style( 'realmaker_local_google_fonts' );
}




?>