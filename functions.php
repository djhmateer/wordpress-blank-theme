<?php

// function enqueue_tailwind_styles() {
//     wp_enqueue_style( 'tailwindcss', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css', array(), '2.2.19' );
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_tailwind_styles' );
remove_filter( 'the_content', 'wpautop' );
?>