<?php
add_action('init', 'my_custom_init');
function my_custom_init(){
    register_post_type('team', array(
        'labels'             => array(
            'name'               => 'Team Post',
            'singular_name'      => 'Team Post',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new a Team post',
            'edit_item'          => 'Edit a Team Post',
            'new_item'           => 'New Team Post',
            'view_item'          => 'View Team Post',
            'search_items'       => 'Find Team Post',
            'not_found'          =>  'Not Found Team Post',
            'not_found_in_trash' => 'In trash Not Found Team Post',
            'parent_item_colon'  => '',
            'menu_name'          => 'Team Post'

        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 10,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );
}