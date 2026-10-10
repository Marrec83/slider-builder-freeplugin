<?php
/**
 * Helper utilities for Slider Builder.
 *
 * @package Slider_Builder
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function slider_builder_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
