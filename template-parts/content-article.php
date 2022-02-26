<div class="">

  <div class="article-header mb-4">
    <h1><?php the_title(); ?></h1>
    
    <div class="text-muted blog-meta-data">
      <?php the_tags(''); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php comments_number(); ?>
    </div>
  </div>

  <?php the_content(); ?>

  <!-- 사이드바 -->
  <div class="container">
    <?php dynamic_sidebar('sidebar-1'); ?>

  </div>

  <br />
  <hr />
  <br />

  <?php comments_template(); ?>
  
</div>
