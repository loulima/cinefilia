<?php
function meu_tema_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'meu_tema_scripts');

function carregar_estilos() {
    wp_enqueue_style('meu-tailwind', get_template_directory_uri() . '/style.css', array(), time());
}
add_action('wp_enqueue_scripts', 'carregar_estilos');

?>

