<?php

function protean_scripts() {
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('technology-icons', get_template_directory_uri() . '/css/technology-icons.css');
}

function protean_google_fonts() {
    wp_register_style('Dosis', 'https://fonts.googleapis.com/css?family=Dosis');
    wp_register_style('Fira Mono', 'https://fonts.googleapis.com/css?family=Fira+Mono');
    wp_register_style('Ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700');
    wp_enqueue_style('Dosis');
    wp_enqueue_style('Fira Mono');
    wp_enqueue_style('Ubuntu');
}

add_action('wp_print_styles', 'protean_google_fonts');
add_action('wp_enqueue_scripts', 'protean_scripts');

function theme_title_setup() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_title_setup');

function remove_more_link_scroll($link) {
    $link = preg_replace('|$more-[0-9]+|', '', $link);
    return $link;
}
add_filter('the_content_more_link', 'remove_more_link_scroll');

function reorder_fields( $fields ) {

    static $comment_field = '';
    static $logged_in_as = '';

    if('comment_form_defaults' === current_filter()) {
	$comment_field = $fields['comment_field'];
	$fields['comment_field'] = '';

	$logged_in_as = $fields['logged_in_as'];
	$fields['logged_in_as'] = '';

	return $fields;
    }

    echo apply_filters('comment_form_field_comment', $comment_field);

    if('comment_form_before_fields' === current_filter()) {
	echo '<div class="other-fields">';
    } else {
	echo apply_filters('comment_form_logged_in', $logged_in_as);
    }
}
function close_after_div() {
    echo '</div>';
}
add_filter('comment_form_defaults', 'reorder_fields');
add_action('comment_form_logged_in_after', 'reorder_fields');
add_action('comment_form_before_fields', 'reorder_fields');
add_action('comment_form_after_fields', 'close_after_div');
