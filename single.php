<!-- single post -->

<?php get_header(); ?>

<div class="wrapper">

  <div class="container mb-5">
    
    <article>
      <?php 
        if(have_posts()){
          while(have_posts()){
            the_post();
            
            get_template_part('template-parts/content', 'article');
          }
        }
      ?>
    </article>
  
  </div>

</div>



<?php get_footer(); ?>
