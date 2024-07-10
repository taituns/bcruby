<?php
	
	/* Limitar Caracteres Extracro */
	function new_excerpt_length($length) {
		return 20;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
	
	/* Limpiar Codigo de nuestro Header */
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

	/* Desarrollo de Menús principales */
	function register_my_menu() {
		register_nav_menu('menuhome',__('Menu Home'));
  	}
  	add_action('init', 'register_my_menu');

	// ACF Shortcode
	add_action( 'acf/init', 'enable_acf_shortcode' );
	function enable_acf_shortcode() {
	  acf_update_setting( 'enable_shortcode', true );
	}

	function my_acf_prevent_access_to_options( $access_prevented, $atts, $decoded_post_id, $decoded_post_type ) {
		if ( 'option' === $decoded_post_type ) {
			return true;
		}
		return $access_prevented;
	}
	add_filter( 'acf/shortcode/prevent_access', 'my_acf_prevent_access_to_options', 10, 4 );

	function my_acf_prevent_access_to_fields_on_private_posts( $access_prevented, $atts, $decoded_post_id, $decoded_post_type ) {
		if ( 'post' === $decoded_post_type && ! is_post_publicly_viewable( $decoded_post_id ) ) {
			return true;
		}
		return $access_prevented;
	}
	add_filter( 'acf/shortcode/prevent_access', 'my_acf_prevent_access_to_fields_on_private_posts', 10, 4 );

	function my_acf_prevent_access_to_all_but_one_field( $access_prevented, $atts, $decoded_post_id, $decoded_post_type, $field_type, $field_array ) {
		if ( 'my_field_name' === $field_array['name'] ) {
			return false;
		}
		return true;
	}
	add_filter( 'acf/shortcode/prevent_access', 'my_acf_prevent_access_to_all_but_one_field', 10, 6 );

?>