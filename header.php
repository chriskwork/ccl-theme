<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-04FC9XFX9M"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-04FC9XFX9M');
    </script>
    
  </head>
  <body>


    <header id="header">
      <?php
        if(function_exists('the_custom_logo')) {
          // the_custom_logo();

          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
        }
      ?>

      
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow-sm">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?php print get_home_url(); ?>"><img id="logo" src="<?php echo $logo[0]; ?>" alt="카페콘레체 로고"></a>
  
            
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      스페인어 문법
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/grammar-basic">기초문법</a></li>
                      <li><a class="dropdown-item" href="/prepositions">전치사</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/vocabulary">테마별 단어</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/downloads">다운로드</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/blog">블로그</a>
                  </li>
                  <!-- <li>
                    <span id="darkmode-toggle" class="nav-link" style="cursor: not-allowed;">어두운 모드 On/Off</span>
                  </li> -->
                </ul>
                <!-- <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->          
              </div>
          </div>
        </nav>

      

      
    </header>

    