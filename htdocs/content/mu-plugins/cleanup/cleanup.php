<?php
/*
Plugin Name: Clean Up Functionality
Description: This plugin changes defaults
Author: Kevin Kiel
Author URI: http://www.impres.nl
*/

/**
 * Cleans Up Functionality
 *
 * Class Clean_Up
 */
class Clean_Up {

	/**
	 * Add default actions / filters
	 */
	public function add_hooks() {

		/*
		 * Execute when install WordPress
		 */
		add_action( 'wp_install', array( $this, 'default_settings' ) );
		add_action( 'phpmailer_init', array( $this, 'mu_plugins_set_email_sender' ) );

		/*
		 * Clean up header information
		 */
		add_action( 'init', array( $this, 'cleanup_head' ) );

		/*
		 * Disables comments and pingbacks for all posts.
		 */
		add_action( 'init', array( $this, 'comments_pings_closed' ) );

		/*
		 * Disable ping back scanner and complete xmlrpc class.
		 */
		add_action( 'init', array( $this, 'pingback' ) );


		/*
		 * We don't want WordPress to send us a mail everytime an update is available.
		 * The admin email address will be set to the client's address so they get the mail.
		 * This can cause a lot of confusion.
		 */
		add_filter( 'send_core_update_notification_email', '__return_false' );

		/*
		 * Prevent unneccecary info from being displayed
		 */
		add_filter( 'login_errors', create_function( '$a', 'return null;' ) );

		/*
		 * remove wp version meta tag and from rss feed
		 */
		add_filter( 'the_generator', '__return_false' );

		/*
		 * Yoast GA menu at the bottom
		 */
		add_filter( 'wpga_menu_on_top', '__return_false' );

		/*
		 * remove xpingback header
		 */
		add_filter( 'wp_headers', array( $this, 'remove_x_pingback' ) );

		$this->remove_versions();
	}

	/**
	 * remove wp version param from any enqueued scripts
	 */
	public function remove_versions() {
		add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
		add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

		function vc_remove_wp_ver_css_js( $src ) {
			if ( strpos( $src, 'ver=' ) ) {
				$src = remove_query_arg( 'ver', $src );
			}

			return $src;
		}
	}

	/**
	 * Function to change the default settings in a WordPress install to what we
	 * want/what users expect.
	 */
	public static function default_settings() {
		update_option( 'image_default_link_type', 'none' );
		update_option( 'uploads_use_yearmonth_folders', false );
		update_option( 'timezone_string', 'Europe/Amsterdam' );
	}

	/**
	 * If Sender is invalid we set it to the value of From
	 *
	 * @param $params
	 */
	public function mu_plugins_set_email_sender( $params ) {

		if ( filter_var( $params->Sender, FILTER_VALIDATE_EMAIL ) !== true ) {
			$params->Sender = $params->From;
		}

	}

	/**
	 * Disables comments and pingbacks for all posts.
	 * If you want to enable this, just remove these lines.
	 */
	public function comments_pings_closed() {
		add_filter( 'comments_open', '__return_false' );
		add_filter( 'pings_open', '__return_false' );
	}

	/**
	 * Disable ping back scanner and complete xmlrpc class.
	 */
	public function pingback() {
		add_filter( 'wp_xmlrpc_server_class', '__return_false' );
		add_filter( 'xmlrpc_enabled', '__return_false' );
	}

	public function cleanup_head() {
		/*
		 * EditURI link
		 */
		remove_action( 'wp_head', 'rsd_link' );

		/*
		 * Category feed links
		 */
		remove_action( 'wp_head', 'feed_links_extra', 3 );

		/*
		 * Post and comment feed links
		 */
		remove_action( 'wp_head', 'feed_links', 2 );

		/*
		 * Windows Live Writer
		 */
		remove_action( 'wp_head', 'wlwmanifest_link' );

		/*
		 * Index link
		 */
		remove_action( 'wp_head', 'index_rel_link' );

		/*
		 * Previous link
		 */
		remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

		/*
		 * Start link
		 */
		remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );

		/*
		 * Canonical
		 */
		remove_action( 'wp_head', 'rel_canonical', 10, 0 );

		/*
		 * Shortlink
		 */
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

		/*
		 * Links for adjacent posts
		 */
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

		/*
		 * WP version
		 */
		remove_action( 'wp_head', 'wp_generator' );

		/*
		 * Remove Emoji and smiley js and css
		 */
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}

	/**
	 * Remove xpingback header
	 *
	 * @param $headers
	 *
	 * @return mixed
	 */
	public function remove_x_pingback( $headers ) {
		unset( $headers['X-Pingback'] );

		return $headers;
	}

}

$cleanup = new Clean_Up();
$cleanup->add_hooks();