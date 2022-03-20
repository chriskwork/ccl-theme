<article class="mb-4 d-md-flex align-items-start">

  <img class="img-fluid rounded-3 me-3 d-none d-md-flex" src="<?php the_post_thumbnail_url('medium'); ?>" alt="블로그 포스트 이미지" />

  <div>
    <a class="text-decoration-none" href="<?php the_permalink(); ?>">
      <h2 class="text-success"><?php the_title(); ?></h2>
    </a>
    
    <div class="text-muted blog-meta-data">
      <?php the_tags(''); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php the_date(); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
      <?php comments_number(); ?>
    </div>
  
    <p>
      <?php the_excerpt(); ?>
    </p>
  </div>

</article>
