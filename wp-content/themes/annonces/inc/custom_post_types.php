<?php

add_action("init",'create_custom_post_type');
function create_custom_post_type(){
  
    $labels = array(
        'name'               => 'Annonces',
        'singular_name'      => 'Annonce',
        'all_items'          => 'Toutes les annonces',
        'add_new'            => 'Ajouter une annonce',
        'add_new_item'       => 'Ajouter une annonce',
        'edit_item'          => "modifier l'annonce",
        'new_item'           => 'Nouvelle annonce',
        'view_item'          => "Voir l'annonce",
        'search_items'       => 'Trouver une annonce',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Annonce parentes:',
        'menu_name'          => 'Annonce',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 2,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'annonce' ),
     /* 'capabilities' => array(
        'edit_post'          => 'edit_annonce',
        'read_post'          => 'read_annonce', 
        'create_posts'       => 'create_annonces', 
      ),*/
    );
    register_post_type( 'annonce', $args );
}

add_action("init",'create_custom_post_type_slide');
function create_custom_post_type_slide(){
  
    $labels = array(
        'name'               => 'Slides',
        'singular_name'      => 'Slide',
        'all_items'          => 'Toutes les slides',
        'add_new'            => 'Ajouter une slide',
        'add_new_item'       => 'Ajouter une slide',
        'edit_item'          => "modifier la slide",
        'new_item'           => 'Nouvelle slide',
        'view_item'          => "Voir la slide",
        'search_items'       => 'Trouver une slide',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Slide parente:',
        'menu_name'          => 'Slider',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 2,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'slide' ),
     
    );
    register_post_type( 'slide', $args );
}
