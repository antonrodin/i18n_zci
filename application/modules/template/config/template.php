<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['template'] = array(
    
    //Just Admin Template Parts
    'admin_header' => 'admin/header',
    'admin_footer' => 'admin/footer',
    'admin_sidebar' => 'admin/sidebar',
    
    //Just Home Template Parts
    'main_header' => 'main/header',
    'social_media' => 'main/social-media',
    'main_footer' => 'main/footer',
    'main_sidebar' => 'main/sidebar',
    
    //Admin Top Menu
    'admin_menu' => array(
        'Opciones' => 'template/all',
        'Usuarios' => 'user/all',
    ),
    
    //Main menu
    'main_menu' => array(
        'Portada' => '/',
        'Catálogo' => 'catalogo',
        'Contacto' => array(
            'Formulario' => 'formulario',
            'Localización' => 'map'
        )
    ),
    
    //JavaScript for Admin Template
    'admin_js' => array(
        base_url('public/js/bootstrap.min.js'),
        base_url("public/js/holder.js")
    ),
    
    //Styles for Admin Template
    'admin_css' => array(
        'bootstrap.min.css',
        'font-awesome.min.css',
        'admin.css'
    ),
    
    //JavaScript for Main template
    'home_js' => array(
        base_url('public/js/bootstrap.min.js'),
        base_url("public/js/holder.js")
    ),
    
    //Styles for Admin Template
    'main_css' => array(
        'bootstrap.min.css',
        'font-awesome.min.css',
        'main.css'
    )
    
);