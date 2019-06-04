<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 class WP_Theme_Admin{

 	protected static $instance = NULL, $theme;
		public function __construct()
		{
			static::$theme = basename(ALAMA_ASSURANCE);
			$this->set_file();
		}
		public function set_file()
		{
			add_action( 'init', array($this,'custom_post_type_equipes'),0);
		}
		public function custom_post_type_equipes(){
        $icon = get_theme_file_uri('/assets/imgs/alama.png');
        add_theme_support( 'post-thumbnails' );
        $labels = array(
            'name'                => _x( 'Equipes', 'Post Type General Name', 'alama' ),
            'singular_name'       => _x( 'Equipes', 'Post Type Singular Name', 'alama' ),
            'menu_name'           => __( 'Equipes', 'alama' ),
            'parent_item_colon'   => __( 'Parent Equipes', 'alama' ),
            'all_items'           => __( 'All Equipes', 'alama' ),
            'view_item'           => __( 'View Equipes', 'alama' ),
            'add_new_item'        => __( 'Add New Equipes', 'alama' ),
            'add_new'             => __( 'Add New', 'alama' ),
            'edit_item'           => __( 'Edit Equipes', 'alama' ),
            'update_item'         => __( 'Update Equipes', 'alama' ),
            'search_items'        => __( 'Search Equipes', 'alama' ),
            'not_found'           => __( 'Not Found', 'alama' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'alama' ),
        );
        $args = array(
            'label'               => __( 'equipes', 'alama' ),
            'description'         => __( 'Equipes news and reviews', 'alama' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => $icon,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'equipes', $args );
 
    }
	
}
$admin = new WP_Theme_Admin();
return $admin;