<div class="">

  <div class="article-header mb-4">
    <h1 class="text-success"><?php the_title(); ?></h1>
    
    <div class="text-muted blog-meta-data">
      <?php the_category(' '); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php comments_number(); ?>
    </div>
  </div>

  <div class="mt-5">
    <?php the_content(); ?>

  </div>

  <div id="article-tags" class="my-5">
    <small># <?php the_tags(''); ?></small>
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
