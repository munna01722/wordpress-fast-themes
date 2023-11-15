<?php
/*
* My Theme Function
*/


// Theme Title
add_theme_support('title-tag');


// Theme CSS and jQuery File calling
function ft_css_js_file_calling(){
  wp_enqueue_style('ft-style', get_stylesheet_uri());
  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
  wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('custom');


  //jQuery
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true' );
  wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true' );

}
add_action('wp_enqueue_scripts', 'ft_css_js_file_calling');


// Google Fonts Enqueue
function ft_add_google_fonts(){
  wp_enqueue_style('ft_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
}
add_action('wp_enqueue_scripts', 'ft_add_google_fonts');


//Theme Function
function ft_customizar_register($wp_customize){

  //Header Area Function
  $wp_customize->add_section('ft_header_area', array(
    'title' =>__('Header Area', 'firstthemes'),
    'description' => 'If you interested to update your header area, you can do it here.'
  ));

  $wp_customize->add_setting('ft_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'ft_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'ft_logo',
    'section' => 'ft_header_area',
  ) ));

  // Menu Position Option
  $wp_customize->add_section('ft_menu_option', array(
    'title' => __('Menu Position Option', 'firstthemes'),
    'description' => 'If you interested to change your menu position you can do it.'
  ));

  $wp_customize->add_setting('ft_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize-> add_control('ft_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'ft_menu_position',
    'section' => 'ft_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
  ));


  // Footer Option
  $wp_customize->add_section('ft_footer_option', array(
    'title' => __('Footer Option', 'firstthemes'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('ft_copyright_section', array(
    'default' => '&copy; Copyright 2021 | Munna BD',
  ));

  $wp_customize-> add_control('ft_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'ft_copyright_section',
    'section' => 'ft_footer_option',
  ));

}

add_action('customize_register', 'ft_customizar_register');


// Menu Register
register_nav_menu( 'main_menu', __('Main Menu', 'fthossain') );

