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
      'capabilities' => array(
        'edit_post'          => 'edit_annonce',
        'read_post'          => 'read_annonce', 
        'create_posts'       => 'create_annonces', 
      ),
    );
    register_post_type( 'annonce', $args );
}


add_action('init','create_taxonomy');
function create_taxonomy(){
  
  $taxonomy="categorie-annonce";
  $object_type=array("annonce");
  $args = array(
          'label' => 'Catégorie de l\'annonce',
          'rewrite' => array( 'slug' => 'categorie-annonce' ),
          'hierarchical' => true,
      );
  register_taxonomy( $taxonomy, $object_type, $args );
  
  
  $taxonomy="categorie-mots-cles";
  $object_type=array("annonce");
  $args = array(
          'label' => 'Mots clés de l\'annonce',
          'rewrite' => array( 'slug' => 'mots-cles-annonce' ),
          'hierarchical' => false,
      );
  register_taxonomy( $taxonomy, $object_type, $args );
}

add_action('after_switch_theme', 'create_new_role');
function create_new_role(){
  add_role(
    'internaute',
    'Internaute',
    array(
        'read'         => true,  // true allows this capability
        'edit_annonce'   => true,
        'read_annonce'   => true,
        'create_annonces'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
  );
  
  $role = get_role( 'administrator');
  $role->add_cap('edit_annonce');
  $role->add_cap('create_annonces');
  $role->add_cap('read_annonce');
  
}


function ajout_scripts() {

// enregistrement d'un nouveau script
wp_register_script('bootstrap-script', get_template_directory_uri() . '/scripts/bootstrap.min.js', array('jquery-ui'),'1.1', true);

// appel du script dans la page
wp_enqueue_script('bootstrap-script');

// enregistrement d'un nouveau style
wp_register_style( 'bootstrap-style', get_template_directory_uri() . '/styles/bootstrap.min.css' );

// appel du style dans la page
wp_enqueue_style( 'bootstrap-style' );
  
// enregistrement d'un nouveau style
wp_register_style( 'main-style', get_template_directory_uri() . '/styles/main.css' );

// appel du style dans la page
wp_enqueue_style( 'main-style' );

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );


add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'images_sizes' );
function images_sizes()
{
add_image_size("thumbnail_annonce_small",600,450,true);
add_image_size("thumbnail_annonce_full",1600,600,false);
}



























