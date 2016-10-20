<?php
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