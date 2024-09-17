<?php
/*
Plugin Name: npr plugin
Plugin URI: https://wordpress.org/plugins/npr-plugin
Description: پلاگین نمایش مطالب محبوب,داغ و تصادفی
Author: وحید صالحی
Version: 1.0.0
Licence: GPLv2 or Later
Author URI: http://develop-wp.local
*/
defined('ABSPATH') || exit;

define('NPR_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('NPR_PLUGIN_URL', plugin_dir_URL(__FILE__));


function wp_npr_register_assets()
{
    //CSS
    wp_register_style('npr-style', NPR_PLUGIN_URL . 'assets/front/css/style.css', '', '1.0.0');
    wp_enqueue_style('npr-style');
    //JS
    wp_register_script('npr-main', NPR_PLUGIN_URL . 'assets/front/js/main.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('npr-main');
}

add_action('wp_enqueue_scripts', 'wp_npr_register_assets');
include_once NPR_PLUGIN_DIR.'view/front/npr-tab.php';

if(!is_admin()){
    add_filter('widget_text','do_shortcode',11);
}
var_dump( $GLOBALS['wp_scripts']);