<!-- single page -->

<?php get_header(); ?>

<div class="wrapper">

  <div class="container mb-5">
    <?php 
      if(have_posts()){
        while(have_posts()){
          the_post();
          
          get_template_part('template-parts/content', 'page');
        }
      }
    ?>
  </div>
  
</div>

<?php get_footer(); ?>
