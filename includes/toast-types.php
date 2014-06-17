<?php 

add_action( 'after_setup_theme', 'toast_types' );
function toast_types() {
    if ( ! class_exists( 'Super_Custom_Post_Type' ) )
        return;

    // Set custom post type
    $homes = new Super_Custom_Post_Type( 'home', 'Home', 'Homes' );
}

?>