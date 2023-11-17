<?php 
/*The main header*/
 get_header();
 ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <?php
            if(have_posts(  )) : 
              while (have_posts(  )) : the_post();
          ?>

          <div class="blog_area">
             <?php the_content(); ?>
          </div>
          
          <?php
           endwhile;
          else :
            -e('no post found');
          endif;
          ?>   
        </div>
        <div class="col-md-3">
          <h1>This  is  side ber  area <h1>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>