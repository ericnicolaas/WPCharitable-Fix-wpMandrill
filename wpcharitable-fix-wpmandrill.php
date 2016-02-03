<?php
/**
 * Plugin Name:         WP Charitable - Fix wpMandrill
 * Description:         Fix wpMandrill with PHP7 support.
 * Version:             0.1
 * Author:              WP Charitable
 * Author URI:          https://www.wpcharitable.com/
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! function_exists( 'set_magic_quotes' ) ) {
    function set_magic_quotes($value) { 
        return true;
    }
}

if ( ! function_exists( 'set_magic_quotes_runtime' ) ) {
    function set_magic_quotes_runtime($value) { 
        return true;
    }
}