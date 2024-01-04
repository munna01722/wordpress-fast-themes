<?php
/*
*Theme Front Page
*/

get_header();?>


<section id="protfolio_area">
    <div class="container">
        <div class="row">
            <?php query_posts( 'post_type=service&post_status=publish&posts_per_page=3&order=ASC&aged='.get_query_var( 'post')); 
            
            if(have_posts(  )) :
               while(have_posts(  )) : the_post();
            
            ?>

            <div class="col-md-4">
                <div class="child_protfolio">
                <h2> <?php the_title(  ); ?> </h2>
                 <?php echo the_post_thumbnail( 'service' )?>
                 <p><?php the_excerpt(  )?></p>
                </div>
            </div>

            <?php
                endwhile;
                endif;
            ?>

        </div>
    </div>
</section>


 <?php get_footer(); ?>