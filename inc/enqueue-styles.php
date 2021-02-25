<?php

function theme_setup_styles() {

    // Google fonts and Fontawesome
wp_enqueue_style('google-fonts-lato', '//fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap');
wp_enqueue_style('google-fonts-pacifico', '//fonts.googleapis.com/css2?family=Pacifico&display=swap');
wp_enqueue_style('google-fonts-baloo-tammudu-2', '//fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;800&display=swap');
wp_enqueue_style('google-fonts-nunito', '//fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap');
wp_enqueue_script("fontawesome", 'https://kit.fontawesome.com/0c707c1c12.js');

}

add_action('wp_enqueue_scripts', 'theme_setup_styles');

