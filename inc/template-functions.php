<?php
function bruno_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
}

function my_theme_styles() {
    $style_dir_url = get_template_directory_uri() . "/assets/css/";
	$standard   = $style_dir_url . "standard.css";
	$header   = $style_dir_url . "header.css";
    $page   = $style_dir_url . "page.css";

    // When the front page is visited.
    if (is_page(69)) {
        $front_page = $style_dir_url . "front-page.css";
        wp_enqueue_style( 'front-page', $front_page );
    }

	wp_enqueue_style( 'standard', $standard );
	wp_enqueue_style( 'header', $header );
    wp_enqueue_style( 'page', $page );
}
