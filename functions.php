<?php
define('ALAMA_ASSURANCE', dirname(__FILE__));

if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}

remove_action('wp_head', 'wp_generator');

// Nettoyer les lignes de codes inutiles ajoutées par WordPress dans le header
//automatic_feed_links(false);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'wp_dlmp_l10n_style' );
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'Header') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
require_once ( ALAMA_ASSURANCE ."/template-parts/simple_walker.php");
require_once (ALAMA_ASSURANCE . '/includes/class-themes-front.php');
require_once (ALAMA_ASSURANCE . '/includes/class-themes-admin.php');
global $vvm;
$vvm = new WP_Theme_Front();

