<?php
/**
 * Plugin Name: HTML Formatting Options
 * Description: Adds all known HTML text formatting options to the post or page text editor.
 * Version: 1.0
 * Author: Irakli Antidze
 * Author URI: https://www.irakli.life
 */

function add_html_formatting_options( $buttons ) {
    array_push( $buttons, 'bold', 'italic', 'underline', 'strikethrough', 'bullist', 'numlist', 'blockquote', 'hr', 'alignleft', 'aligncenter', 'alignright', 'link', 'unlink' );
    return $buttons;
}

add_filter( 'mce_buttons', 'add_html_formatting_options' );

function add_more_html_formatting_options( $init ) {
    $init['extended_valid_elements'] = 'b,strong,i,em,mark,small,del,ins,sub,sup';
    return $init;
}

add_filter( 'tiny_mce_before_init', 'add_more_html_formatting_options' );
