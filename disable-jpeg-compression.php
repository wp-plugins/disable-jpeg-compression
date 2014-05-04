<?php
/*
Plugin Name: Disable JPEG Compression
Plugin URI:
Description: Disable the JPEG compression in WordPress, which enabled by default.
Version: 0.2
Author: Yonatan Ganot
Author URI: http://www.scolpy.net
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_filter('jpeg_quality', create_function('', 'return 100;'));
?>