<?php
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