<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {
//print('Setting up Header in /blog/wp-blog-header.php<br />');
	$wp_did_header = true;

	require_once( dirname(__FILE__) . '/wp-load.php' );
//print('ABSPATH & WPINC = ' . ABSPATH . '/' . WPINC . '<br />');
	wp();

	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
