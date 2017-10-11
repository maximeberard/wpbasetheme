<?php
    function register_type() {
      $labels = array(
        'name' => 'Type',
        'singular_name' => 'Type',
        'add_new' => 'Ajouter un type',
        'add_new_item' => 'Ajouter un nouveau type',
        'edit_item' => 'Editer un type',
        'new_item' => 'Nouveau Type',
        'all_items' => 'Tous les type',
        'view_item' => 'Voir le type',
        'search_items' => 'Rechercher un type',
        'not_found' =>  'Aucun Type',
        'not_found_in_trash' => 'Aucun type dans la corbeille',
        'menu_name' => 'Type'
      );

      $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'show_in_menu' => true, 
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true, 
        'hierarchical' => false,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title','editor','thumbnail')
      ); 
      register_post_type('type', $args);
    }

    add_action( 'init', 'register_type' );

?>