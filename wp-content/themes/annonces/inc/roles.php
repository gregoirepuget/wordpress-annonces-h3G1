<?php
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