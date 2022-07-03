<?php 

function MyNomadLife() {
    wp_enqueue_script('mainJS', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('fontG', '//fonts.googleapis.com/css2?family=Encode+Sans&display=swap');
    wp_enqueue_style('main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'MyNomadLife');

add_action('after_setu-_theme', 'MyyNomadLife_features');

?>