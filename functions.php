<?php

function sample_files()
{
    wp_enqueue_style('main-style', get_stylesheet_uri('./dist/output.css'));
    
    wp_enqueue_style('main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'sample_files');

//tailwind css enqueue scripts 
function tailwindcss_setup_scripts()
{
    wp_enqueue_style('tailwindcss_setup-style', get_stylesheet_uri(), array(), 'all');
    wp_style_add_data('tailwind_setup-style', 'rtl', 'replace');
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/dist/output.css', array(), 'all');
    wp_enqueue_script('tailwindss_setup-navigation', get_template_directory_uri(), '/js/navigation.js', array(), 'all', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'tailwindcss_setup_scripts');


?>