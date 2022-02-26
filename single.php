<!-- single post -->

<?php get_header(); ?>

<div class="wrapper">

  <div class="container mt-5 pt-5">
    
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



  <!-- 사이드바 -->
  <div class="container">
    <?php dynamic_sidebar('sidebar-1'); ?>

  </div>
</div>



<?php get_footer(); ?>
