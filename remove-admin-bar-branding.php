<?php
   /*
   Plugin Name: Remove Admin Bar Branding
   Plugin URI: https://zettago.tech/product/remove-admin-bar-branding/
   Description: Removes the Wordpress logo from the admin-bar for a cleaner look. No settings needed. Just enable the plugin and it will work instantly.
   Version: 1.0.0
   Author: Zettago Technologies
   Author URI: https://zettago.tech
   License: GPLv2 or later
   */
   
    function Zettago_Remove_Logo() {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu( 'wp-logo' );
    }
    add_action( 'wp_before_admin_bar_render', 'Zettago_Remove_Logo', 0 );
	
?>