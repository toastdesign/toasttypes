<?php 

    add_action( 'after_setup_theme', 'toast_types' );
    function toast_types() {
        if ( ! class_exists( 'Super_Custom_Post_Type' ) )
            return;

        // Set custom post type(s)
        $huizen = new Super_Custom_Post_Type( 'huis', 'Huis', 'Huizen' );
        // $foos = new Super_Custom_Post_Type( 'foo', 'Foo', 'Foos' );

        // Set custom taxonomy(s)
        $steden = new Super_Custom_Taxonomy( 'stad', 'Stad', 'Steden', 'category' );
        $straten = new Super_Custom_Taxonomy( 'straat', 'Straat', 'Straten', 'category' );
        $tags = new Super_Custom_Taxonomy( 'tag', 'Tag', 'Tags' );
        
        // Connect taxonomy met custom post type(s)
        connect_types_and_taxes( $huizen, array($steden, $straten, $tags) );

        // Set custom icon(s)
        $huizen->set_icon( 'home' );

    }

?>