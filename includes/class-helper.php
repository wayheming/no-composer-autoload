<?php

namespace WHPlugin\Includes;

defined( 'ABSPATH' ) || exit;

class Helper {
	use Trait_Singleton;

	/**
	 * Constructor.
	 */
	public static function say_hello() {
		echo esc_html__( 'Hello no composer', 'wh-plugin' );
	}
}
