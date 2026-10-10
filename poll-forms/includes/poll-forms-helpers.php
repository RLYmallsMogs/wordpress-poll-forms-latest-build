<?php
/**
 * Utilidades auxiliares para Poll Forms.
 *
 * @package Poll_Forms
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function poll_forms_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
