<?php
/*
* Plugin Name: Functionality Plugin
* Description: This plugin will display a fixed link on your website's footer.
* Version: 1.0.0
* Author: Your Name or Your Company
* Author URI: http://yourdomain.com
* License: GPL2
*/

//require CSS and JS
function dl_enqueue_assets () {
	wp_enqueue_style( 'functionality-styles', plugin_dir_url( __FILE__ ) . 'styling/style.css' );
    wp_enqueue_script( 'functionality-scripts', plugin_dir_url( __FILE__ ) . 'styling/script.js', array('jquery') );
}
add_action ("wp_enqueue_scripts", "dl_enqueue_assets");

// action fixed button
function dl_fixed_button (){
    ?>
    <a href="#" class="dl_fixed_button">Click Here!</a>
<?php
}
add_action ("wp_footer","dl_fixed_button");
