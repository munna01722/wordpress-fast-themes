<?php

// Theme Title
add_theme_support('title-tag');

//thumbnail Image Area
add_theme_support('post-thumbnails', array('page', 'post'));
add_image_size( 'post-thumbnails', 970, 350, true );

// Eacept tp 40 word
function ft_excerpt_more($more){
    return '<br><br> <a class="readmore" href=" ' .get_permalink( $post->ID) . ' ">' . 'Read More' . '</a>';
}
add_filter( 'excerpt_more', 'ft_excerpt_more');

function ft_excerpt_lenght( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'ft_excerpt_lenght', 999 );
