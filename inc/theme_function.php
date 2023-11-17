<?php

function ft_customizar_register($wp_customize){

  //Header Area Function
  $wp_customize->add_section('ft_header_area', array(
    'title' =>__('Header Area', 'fthossain'),
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
    'title' => __('Menu Position Option', 'fastthemes'),
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
    'title' => __('Footer Option', 'ftthemes'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('ft_copyright_section', array(
    'default' => '&copy; Copyright 2021 | Procoder BD',
  ));

  $wp_customize-> add_control('ft_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'ft_copyright_section',
    'section' => 'ft_footer_option',
  ));

}

add_action('customize_register', 'ali_customizar_register');