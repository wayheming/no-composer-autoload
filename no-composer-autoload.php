<?php
/**
 * Plugin Name: Autoload test no composer
 * Plugin URI: https://mywebsite.com
 * Description: Empty.
 * Author: Ernest Beginov
 * Version: 0.0.1
 * Author URI: https://mywebsite.com
 */

/**
 * Autoloader.
 *
 * @param $class
 *
 * @return void
 */
function wh_custom_autoloader( $class ) {
	echo($class) . '<br>';
	include 'lib/' . $class . '.php';
}


spl_autoload_register( 'wh_custom_autoloader' );

//new Plugin\Includes\Some_Test();
