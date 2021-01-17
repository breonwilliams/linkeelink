<?php
/*
Plugin Name: Linkee Link Plugin
Plugin URI: http://breonwilliams.com
Description: adds blank page with custom card links
Version: 1.1
Author: Breon Williams
Author URI: http://breonwilliams.com
License: GPL2
*/

function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style( 'style1', $plugin_url . 'assets/css/style.css' );
    wp_enqueue_style( 'style2', $plugin_url . 'assets/css/hover.css' );
    wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'fontawesome','https://kit.fontawesome.com/5e23ac211b.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );

require __DIR__ . '/functions.php';

add_action( 'plugins_loaded', 'blank_slate_bootstrap' );
