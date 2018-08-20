<?php

function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

// Enregistre une sidebar nommée simplement 'sidebar'
function add_widget_Support() {
                register_sidebar( array(
                                'name'          => 'Sidebar',
                                'id'            => 'sidebar',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>',
                ) );
}
// Initialise et lance le widget selectionné
add_action( 'widgets_init', 'add_Widget_Support' );

// Enregistre le menu de navigation
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Initialise et lance le menu de navigation
add_action( 'init', 'add_Main_Nav' );


