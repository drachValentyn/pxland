<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';


add_action('init', 'my_custom_init');
function my_custom_init()
{
    register_post_type('team', array(
        'labels' => array(
            'name' => 'Team Post',
            'singular_name' => 'Team Post',
            'add_new' => 'Add new',
            'add_new_item' => 'Add new a Team post',
            'edit_item' => 'Edit a Team Post',
            'new_item' => 'New Team Post',
            'view_item' => 'View Team Post',
            'search_items' => 'Find Team Post',
            'not_found' => 'Not Found Team Post',
            'not_found_in_trash' => 'In trash Not Found Team Post',
            'parent_item_colon' => '',
            'menu_name' => 'Team Post'

        ),
        'description' => '',
        'public' => true,
        'publicly_queryable' => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui' => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        'show_in_admin_bar' => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus' => null, // зависит от public
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => 10,
        'menu_icon' => null,
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => array(),
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ));


    register_post_type('case', array(
        'labels' => array(
            'name' => 'Case',
            'singular_name' => 'Case',
            'add_new' => 'Add new case',
            'add_new_item' => 'Add new a Case',
            'edit_item' => 'Edit a Case',
            'new_item' => 'New Case',
            'view_item' => 'View Case',
            'search_items' => 'Find Case',
            'not_found' => 'Not Found Case',
            'not_found_in_trash' => 'In trash Not Found Case',
            'parent_item_colon' => '',
            'menu_name' => 'Case Post'

        ),
        'description' => '',
        'public' => true,
        'publicly_queryable' => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui' => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        'show_in_admin_bar' => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus' => null, // зависит от public
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => 10,
        'menu_icon' => null,
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => array(),
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ));
}


if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key' => 'group_1',
        'title' => 'Room for Env Section',
        'fields' => array(

            array(
                'key' => 'title-field',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'prefix' => '',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),

            array(
                'key' => 'subtitle-field',
                'label' => 'Sub Title',
                'name' => 'sub_title',
                'type' => 'text',
                'prefix' => '',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),

            array(                   /*image for section*/


                'key' => 'img-field',
                'label' => 'Image',
                'name' => 'img-sect',
                'type' => 'image',
                'prefix' => '',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 0,
                'min_height' => 0,
                'min_size' => 0,
                'max_width' => 0,
                'max_height' => 0,
                'max_size' => 0,
                'mime_types' => '',
            )

        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));

endif;