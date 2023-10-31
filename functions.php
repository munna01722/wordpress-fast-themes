<?php
/*
 My Theme Function
*/
// theme title 
 add_theme_support('title tag');

 // Theme css and jQuery fill calling
  function ft_css_js_calling(){
    wp_enqueue_style('ft_style', get_stylesheet_uri(  ));
    // css  
    wp_register_style( 'bootstrap', get_template_directory_uri(  ).'/css/bootstrap.css', array( ), '3.0.3', 'all');
    wp_enqueue_style( 'bootstrap' );
   
    wp_register_style( 'custom', get_template_directory_uri(  ).'/css/custom.css', array( ), '1.0.0', 'all');
    wp_enqueue_style( 'custom' );
    

    //jQuery
   // wp_enqueue_script( , $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean );
   wp_enqueue_script( 'jquery' );
   
   wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array(), '3.3.7','true' );//true hoccha  jquery   gula   footer a thakar jonno
   wp_enqueue_script( 'main', get_template_directory_uri(). '/js/main.js', array(), '1.0.0','true' );
   
  }
  add_action( 'wp_enqueue_scripts', 'ft_css_js_calling');


  //google Fonts Enqueue

  // theme function
  function ft_customizar_register($wp_customize){

    $sections = [
      [
        'id' => 'ft_header_area',
        'title' => 'Header area',
        'controls' => [
          [
            'id' => 'c-id-1',
            'label' => 'logo Upload',
            'description' => 'If you intersted to change or update your logo you can do it.',
            'section' => 'ft_header_area',
            'setting' => 'ft_logo',
          ],
          [
            'id' => 'c-id-2',
             'label' => 'logo Upload',
            'description' => 'If you intersted to change or update your logo you can do it.',
            'section' => 'ft_header_area',
            'setting' => 'ft_logo',
          ],
          [
            'id' => 'c-id-3',
             'label' => 'logo Upload',
            'description' => 'If you intersted to change or update your logo you can do it.',
            'section' => 'ft_header_area',
            'setting' => 'ft_logo',
          ],
        ],        
      ],
    ];

    foreach(  $sections as  $section ){

      $wp_customize->add_section('ft_header_area', array(
      'title' =>__('Header area', 'text domain'/*text domain ar name ay  khane  dita hobe ,, jano language chnag hoy */),
        'description' => 'if you interested to update your header arae , you can do it here.',
      ));

      foreach( $section['controls'] as $control) {

        $wp_customize->add_setting('ft_logo',array(
          'default' => get_bloginfo('template_directory') . '/img/logo.jpg', 
        ));
        
        $wp_customize-> add_control(new wp_customize_image_control($wp_customize, 'ft_logo', array(
          'label' => 'logo Upload',
          'description' => 'If you intersted to change or update your logo you can do it.',
          'section' => 'ft_header_area',
          'setting' => 'ft_logo',
        )));

        
      }
    }
        



    $wp_customize->add_section('ft_header_area', array(
    'title' =>__('Header area', 'text domain'/*text domain ar name ay  khane  dita hobe ,, jano language chnag hoy */),
      'description' => 'if you interested to update your header arae , you can do it here.',
    ));

    $wp_customize->add_setting('ft_logo',array(
      'default' => get_bloginfo('template_directory') . '/img/logo.jpg', 
    ));
    
    $wp_customize-> add_control(new wp_customize_image_control($wp_customize, 'ft_logo', array(
      'label' => 'logo Upload',
      'description' => 'If you intersted to change or update your logo you can do it.',
      'section' => 'ft_header_area',
      'setting' => 'ft_logo',
    )));

    $wp_customize->add_setting('h-text');
    $wp_customize->add_control( 'h-text', array(
      'id'=> 'id',
      'label' => __( 'First Name:', 'TextDomain' ),
      'section' => 'ft_header_area'
  ) );

  };
  add_action( 'customize_register', 'ft_customizar_register');

// Menu  Register
register_nav_menu('mani_menu', __('Main Menu', 'fastthemes' ));