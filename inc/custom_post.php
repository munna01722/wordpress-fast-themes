<?php

function custom_service(){
  register_post_type ('service',
    array(
      'labels'              => array(
        'name'              => ('Protfolio'),
        'singular_name'     => ('Protfolio'),
        'add_new'           => ('Add New Protfolio'),
        'add_new_item'      => ('Add New Service'),
        'edit_item'         => ('Edit Service'),
        'new_item'          => ('New Service'),
        'view_item'         => ('View Service'),
        'not_found'         => ('Sorry, we cound\'n find the service you are looking for.'),
      ),
      'menu_icon'           => 'dashicons-networking',
      'public'              => true,
      'publicly_queryable'  => true,
      'exclude_from_search' => true,
      'menu_position'       => 5, 
      'has_archive'         => true,
      'hierarchial'         => true,
      'show_ui'             => true,
      'capability_type'     => 'post',
      'supports' => array('title', 'thumbnail', 'editor', 'excerpt', 'custom-fields'),
      )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_service');

function create_custom_post_type() {
  register_post_type('your_custom_post_type', array(
      'labels' => array(
          'name' => __('Custom Post Type'),
          'singular_name' => __('Custom Post'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
  ));
}

add_action('init', 'create_custom_post_type');

//fields

function custom_add_meta_boxes() {
    add_meta_box(
        'post_metadata_events_post',         // Meta box ID (unique)
        'Custom Informations',                   // Meta box title
        'post_meta_box_events_post',         // Callback function to display the meta box content
        'service',                      // Post type where the meta box should appear
        'normal',                         // Context (normal, side, advanced)
        'core'                           // Priority (high, core, default, low)
    );
}
add_action( "add_meta_boxes", "custom_add_meta_boxes");

function custom_save_meta_boxes(){
    global $post;
    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
        return;
    }
    update_post_meta($post->ID, '_event_date', sanitize_text_field( $_POST['_event_date'] ));

}

add_action( 'save_post', 'custom_save_meta_boxes' );

function post_meta_box_events_post(){
    global $post;
    $custom =get_post_custom( $post->ID );
    $fieldData = $custom['_event_date'][0];
    echo "<br> <br>";
    echo "<label for='_price'>Date:</label>";
    echo "<input type=\"date\" name=\"_event_date\" value=\"".$fieldData."\" placeholder=\" Data\">";
    echo "<br> <br>";
    echo "<label for='_price'>Price:</label>";
    echo "<input type='text' name='_price' value='" . esc_attr($fieldData) . "' placeholder='Price'>";
}



