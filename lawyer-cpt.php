<?php
/**
 *
 * @wordpress-plugin
 * Plugin Name:       Lawyer CPT
 * Plugin URI:        https://github.com/hinayupak/Lawyer-CPT
 * Description:       CPT for Lawyers
 * Version:           1.0.0
 * Author:            Joshua Hernandez
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lawyer-cpt
 * Domain Path:       /languages
 */

function cptui_register_my_cpts_lawyers() {

	/**
	 * Post Type: Lawyers.
	 */

	$labels = [
		"name" => __( "Lawyers", "lawyer-cpt" ),
		"singular_name" => __( "Lawyer", "lawyer-cpt" ),
	];

	$args = [
		"label" => __( "Lawyers", "lawyer-cpt" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "lawyers", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies" => [ "category", "post_tag" ],
		"show_in_graphql" => true,
	];

	register_post_type( "lawyers", $args );
}

add_action( 'init', 'cptui_register_my_cpts_lawyers' );
