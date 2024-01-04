<?php
// Sidebar Register Function

function ft_widgets_register(){
  register_sidebar(array(
      'name'          => __('Main Widget Area', 'fastthemes'),
      'id'            => 'sideber-1',
      'description'   => __('Apperas in the sidebar in blog page and also other page', 'fastthemes'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="title">',
      'after_title'   => '</h2>',
    ));

  register_sidebar(array(
      'name'          => __('Footer 1', 'fastthemes'),
      'id'            => 'footer-1',
      'description'   => __('Apperas in the sidebar in blog page and also other page', 'fastthemes'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="title">',
      'after_title'   => '</h2>',
    ));

  register_sidebar(array(
      'name'          => __('Footer 2', 'fastthemes'),
      'id'            => 'footer-2',
      'description'   => __('Apperas in the sidebar in blog page and also other page', 'fastthemes'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="title">',
      'after_title'   => '</h2>',
    ));

  register_sidebar(array(
      'name'          => __('Footer 3', 'fastthemes'),
      'id'            => 'footer-3',
      'description'   => __('Apperas in the sidebar in blog page and also other page', 'fastthemes'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="title">',
      'after_title'   => '</h2>',
    ));

    register_sidebar(array(
      'name'          => __('Footer 4', 'fastthemes'),
      'id'            => 'footer-4',
      'description'   => __('Apperas in the sidebar in blog page and also other page', 'fastthemes'),
      'before_widget' => '<div class="child_sidebar">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="title">',
      'after_title'   => '</h2>',
    ));
}

add_action('widgets_init', 'ft_widgets_register'); 