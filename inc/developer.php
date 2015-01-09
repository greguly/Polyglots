<?php
/**
 * @package Polyglots
 *
 * Supporting tools for plugin and theme developers
 */

// Make sure we don't expose any info if called directly
if ( ! defined('ABSPATH') ) {
	exit;
}

class Polyglots_GlotPress {

	public function __construct() {
		add_filter( 'extra_plugin_headers', array( $this, 'add_customer_header' ) );
	}

	public function add_customer_header( $headers ) {
		$headers[] = 'Translation Project';
		$headers[] = 'Translation Site';

		return $headers;
	}

}