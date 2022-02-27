<?php get_header(); ?>


<!-- get_search_form(); -->


<!-- #####################
CONTENTS HERE
######################### -->

<!-- intro image -->
<div class="container-fluid p-0">
    <!-- <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/landing/intro-img-jpg-1200.jpg" alt="Benvenidos image" /> -->
    <div id="intro-image"></div>
  </div>


<div class="wrapper">



  <!-- 문법 섹션 -->
  <section class="container mb-5">
    <h2 class="mb-4"><small class="text-muted">#</small>스페인어 문법</h2>

    <div class="row">
      <div class="col">
        <h5>기초문법</h5>
        <p class="text-muted">꼭 알아야 할 기초문법.</p>
      </div>
      <div class="col-4">
        <a href="/grammar-basic" class="btn btn-primary py-2 px-4 w-100 shadow-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <h5>전치사</h5>
        <p class="text-muted">헷갈리는 전치사 이거면 끝.</p>
      </div>
      <div class="col-4">
        <a href="#" class="btn btn-primary py-2 px-4 w-100 shadow-sm">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>
    </div>
  </section>

<!-- 테마별 단어 섹션 -->
  <section class="container" >
    <h2 class="mb-4"><small class="text-muted">#</small>테마별 단어</h2>

    <p class="text-muted">현재 <span class="text-danger fw-bold">총 30개 테마, 약 2072개</span> 단어가 테마별로 나뉘어서 정리되어 있습니다.</p>

    <div id="tema-image" class="mb-3 rounded-3"></div>

    <a href="#" class="btn btn-primary w-100 shadow-sm">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
    </a>
  </section>



</div>

<!-- 다운로드 섹션 -->
<section id="download" class="container-fluid py-5 mb-5 bg-info">

  <div class="wrapper">
    <div class="row mb-5">
      <div class="col">
        <img id="download-image"src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/download.svg" alt="다운로드 일러스트">
      </div>
        
      <div class="col d-flex flex-column justify-content-center">
        <h2 class="mb-4"><small class="text-muted">#</small>다운로드</h2>
  
        <p class="text-muted">문법, 전치사, 테마별 단어 등의 모든 자료를 한 눈에 보고, PDF 파일로 다운로드하실 수 있습니다.</p>

        <a href="#" class="btn btn-outline-light py-2 px-4 w-100 shadow-sm d-none d-xl-block mt-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>
    </div>

    <a href="#" class="btn btn-outline-light py-2 px-4 w-100 shadow-sm d-xl-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
    </a>

  </div>
</section>

<!-- 블로그 최신 글 섹션 -->
<div class="wrapper">
  <section class="container mb-5">
    <h2 class="mb-4"><small class="text-muted">#</small>블로그 최신 글</h2>

    <!-- 블로그 최근 글 3개 불러오기 -->
    <div class="d-flex flex-column gap-3 flex-lg-row ">
    
      <?php

        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 3
        ));

        while($homepagePosts -> have_posts()){
          $homepagePosts -> the_post(); ?>

          <div class="card w-100 overflow-hidden">

            <div id="blog-thumbnail-img" class="card-img-top">
              <?php echo get_the_post_thumbnail( $post_id, 'large' ); ?>
            </div>
              
            <div class="card-body">

              <h4 class="card-title">
                <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                  <?php echo wp_trim_words(get_the_title(), 5); ?>
                </a>
              </h4>

              <p class="card-text text-end">
                <small class="text-gray"><?php the_time('Y. m. j'); ?></small>
              </p>

              <p class="card-text text-muted">
                <?php echo wp_trim_words(get_the_content(), 20); ?>
              </p>

              
              <div class="row">
                <div class="col d-flex align-items-center">
                  <span class="blog-tag ">
                    <?php echo get_the_category_list(' '); ?>
                  </span>
                </div>
                <div class="col d-flex align-items-center justify-content-end">
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary shadow-sm w-100 text-white">
                    <small>계속 읽기 &nbsp;&raquo;</small>
                  </a>  
                </div>
  
              </div>
            </div>

          </div>

      <?php  
        }
        wp_reset_postdata();
      ?>
    </div>

    <div class="dots-container">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <a href="<?php echo site_url('/blog'); ?>" class="d-block text-decoration-none text-center mt-3 py-2 text-muted">
      블로그 글 더보기 &nbsp;&raquo;
    </a>
    
  </section>
</div>

<!-- 카페콘레체는.. (About) -->
<div class="wrapper">
  <section class="container mb-5">
    <h2 class="mb-4"><small class="text-muted">#</small>카페콘레체는..</h2>

    <p class="text-muted">
      서른이 넘어 시작한 스페인어는 너무나도 어려웠습니다. 인터넷에 스페인어 공부와 관련된 자료도 은근히 많지 않았기 때문에, '내가 공부한 것들을 정리해서 스페인어를 공부하려는 다른 분들과 공유해야겠다'라는 마음으로 시작하게 되었습니다.<br />
      도움이 되셨다면, 커피 한 잔 사주실래요? ☕
    </p>

    <a href="https://www.buymeacoffee.com/cafeconleche" target="_blank">
      <img class="buymeacoffee-banner" src="<?php echo get_template_directory_uri(); ?>/assets/images/violet-button.png" alt="">
    </a>
  </section>
</div>



<?php get_footer(); ?>
