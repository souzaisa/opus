<?php

/*
*    Arquivo para inserir as configurações do Wordpress
*    Existem diversas configurações que o Wordpress disponibiliza para criação de temas
*    e elas devem ser escritas nesse arquivo
*/

if ( class_exists( 'Redux' ) ) {
    require_once 'inc/theme-customizer-redux.php';
    require_once 'inc/theme-customizer-redux-sections.php';
}

global $redux_fields; 

function byron_styles() {

    // Inserir: outros arquivos css se necesśario
    // Inserir as fontes que serão utilizadas

    wp_register_style('materializeicon', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '');
    wp_register_style('materializecss', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
    wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '');
    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.0/css/all.css', array(), '');
    wp_register_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins&display=swap', array(), '');


    wp_enqueue_style('style');
    wp_enqueue_style('materializeicon');
    wp_enqueue_style('materializecss');
    wp_enqueue_style('slick');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('poppins');

    // Inserir: outros arquivos javascript se necesśario
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), false, true );
    wp_register_script('materializejs', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(), false, true);
    wp_register_script('script', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), false, true);
    wp_register_script( 'slick_js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), false, true );


    wp_enqueue_script('jquery');
    wp_enqueue_script('materializejs');
    wp_enqueue_script('script');
    wp_enqueue_script('slick_js');
}
add_action( 'wp_enqueue_scripts', 'byron_styles' );


function byron_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Menu Principal' )
        )
    );
    // Inserir: outros menus se necessário
}
add_action( 'init', 'byron_menus' );


function byron_theme_setup(){
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'byron_theme_setup');

//Criar post type
//Editar os campos quando necessário
function create_post_type() {

    // Register Post Type
    register_post_type( 'Serviços',
      array(
        'labels' => array(
          'name' => __( 'Serviços' ),
          'singular_name' => __( 'Serviços' )
        ),
        'public'      => true,
        'has_archive' => false,
            'menu_icon'   => 'dashicons-hammer',//Modificar o ícone que aparecerá na dashboard
            'taxonomies'  => ['category', 'post_tag'],
            'supports'    => ['title','editor','thumbnail', 'excerpt', 'author'],//Seções presentes no post type
        'rewrite'     => array('slug' => 'Serviços')
      )
    );  
}
add_action( 'init', 'create_post_type' );