<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');


function childhood_scripts() {
    //Подключаем стили
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri(  ));

    //Подключаем скрипт
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri(  ) . '/assets/js/main.min.js', array(), null, true);
}

?>