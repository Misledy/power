<?php

function powerbuildingoficial_styles(){
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" );
    wp_enqueue_style( 'barlow', "https://fonts.googleapis.com/css?family=Barlow+Condensed:400,700|Barlow:400,500,700&display=swap" );
    wp_enqueue_style('style', get_stylesheet_uri() );

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '3.3.7', true );
    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', array(), '3.3.7', true );
}

add_action('wp_enqueue_scripts', 'powerbuildingoficial_styles');
add_theme_support('post-thumbnails');

/** Nueva Navegacion **/
register_nav_menus(array(
    'menu_principal' => __('Menu Principal', 'powerbuildingoficial')
  
  ) );


// Register Custom Post Type

/*****************BANNER*****************/
function custom_post_type_banner() {

	$labels = array(
		'name'                  => _x( 'Banner', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Banner', 'text_domain' ),
		'name_admin_bar'        => __( 'Banner', 'text_domain' ),
		'archives'              => __( 'Archivos del artículo', 'text_domain' ),
		'attributes'            => __( 'Atributos del artículo', 'text_domain' ),
		'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
		'all_items'             => __( 'Todos los artículos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir artículo nuevo', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
		'edit_item'             => __( 'Editar artículo', 'text_domain' ),
		'update_item'           => __( 'Actualizar artículo', 'text_domain' ),
		'view_items'            => __( 'Ver artículos', 'text_domain' ),
		'search_items'          => __( 'Buscar artículo', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el artículo', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
		'items_list'            => __( 'Lista de artículos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de artículos de navegación', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro lista artículos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'text_domain' ),
		'description'           => __( 'Banner image', 'text_domain' ),
		'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'custom_post_type_banner', 0 );

/*****************TESTIMONIALS*****************/
function custom_post_type_testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonios', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonios', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonios', 'text_domain' ),
		'archives'              => __( 'Archivos del artículo', 'text_domain' ),
		'attributes'            => __( 'Atributos del artículo', 'text_domain' ),
		'parent_item_colon'     => __( 'Artículo principal:', 'text_domain' ),
		'all_items'             => __( 'Todos los artículos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir artículo nuevo', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo artículo', 'text_domain' ),
		'edit_item'             => __( 'Editar artículo', 'text_domain' ),
		'update_item'           => __( 'Actualizar artículo', 'text_domain' ),
		'view_items'            => __( 'Ver artículos', 'text_domain' ),
		'search_items'          => __( 'Buscar artículo', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el artículo', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'text_domain' ),
		'items_list'            => __( 'Lista de artículos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de artículos de navegación', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro lista artículos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonials', 'text_domain' ),
		'description'           => __( 'Testimonials image', 'text_domain' ),
		'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Testimonials', $args );

}
add_action( 'init', 'custom_post_type_testimonials', 0 );