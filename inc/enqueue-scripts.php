<?php

function theme_setup_scripts() {

     // Main style and js
     wp_enqueue_script("main", get_theme_file_uri('/assets/js/script.js'), NULL, '1.0', true);
     wp_register_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), 'microtime()', 'all');
     wp_enqueue_style('styles'); // Enqueue it!
     // --> Change microtime to version number (for example '1.1') before release!

     //Bootstrap
     wp_enqueue_style("bootstrap-stylesheet", 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
     wp_enqueue_script("jquery", 'https://code.jquery.com/jquery-3.5.1.min.js');
     wp_enqueue_script("jquery-form-plugin", 'https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js');
     wp_enqueue_script("bootstrap-popper", 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
     wp_enqueue_script("bootstrap-js", 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'theme_setup_scripts');