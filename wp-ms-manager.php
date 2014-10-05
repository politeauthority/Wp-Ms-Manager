<?php
/*
Plugin Name: Wp-Ms-Manager
Plugin URI: https://github.com/politeauthority/WpDebug/
Description: 
Version: .01
Author: Alix Fullerton
Author URI: http://www.politeauthority.com/
Release Date: 2014-10-05
*/

define( 'WP_MS_MANAGER_PATH', plugin_dir_path( __FILE__ ) );
require WP_MS_MANAGER_PATH . 'includes/wp-ms-manager.php';

new WpMsManager();

if( is_admin() ){
  require WP_MS_MANAGER_PATH . 'includes/wp-ms-manager-admin.php';
  new WpMsManagerAdmin();
}

/* ENDFILE: includes/wp-debug-admin.php */