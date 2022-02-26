<!-- single post -->

<?php get_header(); ?>

<article>
<?php 
  if(have_posts()){
    while(have_posts()){
      the_post(); ?>
      
      <div>
        <h2>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>

        <div>
          <p>작성자: 
            <span><?php the_author_posts_link(); ?></span>,
            <span><?php the_time('Y-n-j'); ?></span>,
            태그:
            <span><?php echo get_the_category(); ?></span>
          </p>
        </div>

        <div>
          <?php the_excerpt(); ?>
          <p><a href="<?php the_permalink(); ?>">계속 읽기 &raquo;</a></p>
        </div>
      </div>
      
    <?php }
    echo paginate_links();
  }
?>
</article>

<!-- max-width-wrapper close div -->
</div>


<?php get_footer(); ?>
