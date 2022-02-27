<div class="">

  <div class="article-header mb-4">
    <h1><?php the_title(); ?></h1>
    
    <div class="text-muted blog-meta-data">
      <?php the_category(' '); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php comments_number(); ?>
    </div>
  </div>

  <?php the_content(); ?>

  <div id="article-tags" class="my-5">
    <small>태그- <?php the_tags(''); ?></small>
  </div>

  <!-- 사이드바 -->
  <div id="side-bar-nav" class="bg-light p-3 rounded-3">
    <?php dynamic_sidebar('sidebar-1'); ?>

  </div>

  <br />
  <hr />
  <br />

  <?php comments_template(); ?>
  
</div>
