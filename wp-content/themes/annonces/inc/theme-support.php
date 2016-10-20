<?php

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
