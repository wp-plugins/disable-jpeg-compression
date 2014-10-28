<?php
/*
Plugin Name: Disable JPEG Compression
Plugin URI:
Description: Disable the JPEG compression in WordPress, which enabled by default.
Version: 1.3
Author: Yonatan Ganot
Author URI: http://www.scolpy.net
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_filter('jpeg_quality', function($arg){return 100;});
add_filter('wp_editor_set_quality', function($arg){return 100;});
?>