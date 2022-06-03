<?php

namespace WHPlugin\Includes;

defined( 'ABSPATH' ) || exit;

final class Plugin {
	use Trait_Singleton;

	/**
	 * Constructor.
	 */
	public function __construct() {
		Helper::say_hello();
	}
}
