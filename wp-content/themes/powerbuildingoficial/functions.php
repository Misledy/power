<?php

function powerbuildingoficial_styles(){
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/css/style.css' );
  //  wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" );
         wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'barlow', "https://fonts.googleapis.com/css?family=Barlow+Condensed:400,700|Barlow:400,500,700&display=swap" );
    wp_enqueue_style('style', get_stylesheet_uri() );

    wp_enqueue_script('jquery');
   // wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), '3.3.7', true );
         wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );
    wp_enqueue_script('jquerymin', "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", array('jquery'), '3.3.7', true );
    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', array(), '3.3.7', true );
    wp_enqueue_script( 'ajax', get_template_directory_uri() . '/js/ajax-login-script.js' );
}

add_action('wp_enqueue_scripts', 'powerbuildingoficial_styles');
add_theme_support('post-thumbnails');

/** Nueva Navegacion **/
register_nav_menus(array(
    'menu_principal' => __('Menu Principal', 'powerbuildingoficial')
  
  ) );

// Register Custom Post Type

/*********** BANNER ***********/
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

/*********** TESTIMONIALS ***********/
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

/*********** PUBLICACIÓN ***********/
function custom_post_type_publicacions() {

	$labels = array(
		'name'                  => _x( 'Publicaciones', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Publicaciones', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Publicaciones', 'text_domain' ),
		'name_admin_bar'        => __( 'Publicaciones', 'text_domain' ),
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
		'label'                 => __( 'Publicacions', 'text_domain' ),
		'description'           => __( 'Publicacions image', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
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
	register_post_type( 'publicacions', $args );

}
add_action( 'init', 'custom_post_type_publicacions', 0 );

/*********** ENTRENADORES ***********/
function custom_post_type_entrenador() {

	$labels = array(
		'name'                  => _x( 'Entrenadores', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Entrenadores', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Entrenadores', 'text_domain' ),
		'name_admin_bar'        => __( 'Entrenadores', 'text_domain' ),
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
		'label'                 => __( 'Entrenador', 'text_domain' ),
		'description'           => __( 'Entrenador image', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
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
	register_post_type( 'entrenador', $args );

}
add_action( 'init', 'custom_post_type_entrenador', 0 );

// Register - login

/*********** Bar ***********/

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}


/*********** Register ***********/

add_action('wp_ajax_register_user_front_end', 'register_user_front_end', 0);
add_action('wp_ajax_nopriv_register_user_front_end', 'register_user_front_end');
function register_user_front_end() {
	$new_user_name = stripcslashes($_POST['new_user_name']);
	$new_user_email = stripcslashes($_POST['new_user_email']);
	$new_user_password = $_POST['new_user_password'];
	$password_confirm = $_POST['re_pwd'];;
	$user_nice_name = strtolower($_POST['new_user_email']);
	$user_data = array(
		'user_login' => $new_user_name,
		'user_email' => $new_user_email,
		'user_pass' => $new_user_password,
		'user_nicename' => $user_nice_name,
		'display_name' => $new_user_first_name,
		'role' => 'customer'
	);
	require_once(ABSPATH . WPINC . '/registration.php');
	if (username_exists($new_user_name)){
		error_registro()->add('usuario_repetido' , __('El usuario ya existe'));
	}

	if ($new_user_name = ''){
		error_registro()->add('usuario_vacio' , __('El usuario está vacio'));
	}

	if(!is_email($new_user_email)){
		error_registro()->add('email_invalido' , __('El email es invalido'));
	}

	if(email_exists($new_user_email)){
		error_registro()->add('email_existente' , __('El email ya existe'));
	}

	if($new_user_password != $password_confirm){
		error_registro()->add('pass_mismatch' , __('La contraseña no coincide'));
	}


	$errors = error_registro()->get_error_messages();

	if (empty($errors)){
		$user_id = wp_insert_user($user_data);
		wp_set_password($new_user_password , $user_id);
		$code = sha1( $user_id . time() );    
		global $wpdb;    
		$wpdb->update( 
			'stts_users',   
			array( 'user_activation_key' => $code, ),       
			array( 'ID' =>    $user_id ),     
			array( '%s')
		);
		$activation_link = add_query_arg( array( 'key' => $code, 'user' => $user_id ), get_permalink(37));  
		echo 'Registro exitoso!';
	}else{
		foreach ($errors as $error) {
			echo $error;
		}
	}
	die();
}

function error_registro(){
		static $wp_error; // Will hold global variable safely
		return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
	}


/*********** Login ***********/

function ajax_login_init(){

	wp_register_script('ajax-login-script', get_template_directory_uri() . '/js/ajax-login-script.js', array('jquery') ); 
	wp_enqueue_script('ajax-login-script');

	wp_localize_script( 'ajax-login-script', 'ajax_login_object', array( 
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'redirecturl' => home_url(),
		'loadingmessage' => __('Sending user info, please wait...')
	));

		// Enable the user with no privileges to run ajax_login() in AJAX
	add_action( 'wp_ajax_nopriv_ajaxlogin', 'ajax_login' );
}

// Execute the action only if the user isn't logged in
if (!is_user_logged_in()) {
	add_action('init', 'ajax_login_init');
}


function ajax_login(){
	// First check the nonce, if it fails the function will break
	check_ajax_referer( 'ajax-login-nonce', 'security' );

		// Nonce is checked, get the POST data and sign user on
	$info = array();
	$info['user_login'] = $_POST['username'];
	$info['user_password'] = $_POST['password'];
	$info['remember'] = true;

	$user_signon = wp_signon( $info, false );
	if ( is_wp_error($user_signon) ){
		echo json_encode(array('loggedin'=>false, 'message'=>__('Usuario o contraseña equivocada.')));
	} else {
		echo json_encode(array('loggedin'=>true, 'message'=>__('Logueo exitoso, redireccionando...')));
	}
	die();
}

function error_message($error){
	$error_msg = '<div class="error_msg">';
	$error_msg .= '<h1>' . $error . '</h1>' ;
	$error_msg .= '</div>';
	return $error_msg;
}

/***********LINK ****************/
function link_upload(){
	global $wpdb; 
    $result_link = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."options WHERE option_name = 'siteurl'"); 
    foreach($result_link as $r)
    {
      $link = $r->option_value;
    }            
    $link_file .= $link;
    return $link_file;
}