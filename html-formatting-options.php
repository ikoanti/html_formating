<?php
/**
 * Plugin Name: HTML Formatting Options
 * Description: Adds all known HTML text formatting options to the post or page text editor.
 * Works with Wordpress Classic Editor.
 * Version: 1.0
 * Author: Irakli Antidze
 * Author URI: https://www.irakli.life
 * License: CC0 1.0 Universal
 */

add_action('admin_init', 'add_html_text_formatting_options');

//Add filters to the "mce_buttons" and "mce_external_plugins" hooks. 
function add_html_text_formatting_options() {
    add_filter('mce_buttons', 'register_html_text_formatting_buttons');
    add_filter('mce_external_plugins', 'register_html_text_formatting_plugins');
}

function register_html_text_formatting_buttons($buttons) {
    array_push($buttons, 'underline', 'unlink', 'sub', 'sup');
    return $buttons;
}

//Register the "htmltextformatting.js" file as a plugin for the Classic Editor. 
function register_html_text_formatting_plugins($plugins) {
    $plugins['htmltextformatting'] = plugins_url('/htmltextformatting.js', __FILE__);
    return $plugins;
}
