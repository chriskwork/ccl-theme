<?php

// adds dynamic title tag support
function ccl_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ccl_theme_support');

// menus
function ccl_menus(){
  $locations = array(
    'primary' => "header menu",
    'footer' => "footer menu"
  );

  register_nav_menus($locations);
}

add_action('init', 'ccl_menus');


// css, js files link dynamically
function ccl_styles(){
  wp_enqueue_style('ccl-main-style', get_template_directory_uri()."/style.css", array());
}

add_action('wp_enqueue_scripts', 'ccl_styles');

// bootstrap css import
// function bootstrap_styles(){
//   wp_enqueue_style('bootstrap-style', get_template_directory_uri()."/assets/css/bootstrap.min.css", array());
// }

// add_action('wp_enqueue_scripts', 'bootstrap_styles');

function bootstrap_styles(){
  wp_enqueue_style('bootstrap-style', get_template_directory_uri()."/style.min.css", array());
}

add_action('wp_enqueue_scripts', 'bootstrap_styles');

// custom js file import
function ccl_scripts(){
  wp_enqueue_script('ccl-main-script', get_template_directory_uri()."/assets/js/main.js", array(), true);
}

add_action('wp_enqueue_scripts', 'ccl_scripts');

// bootstrap js file import
function bootstrap_scripts(){
  wp_enqueue_script('bootstrap-script', get_template_directory_uri()."/assets/js/bootstrap.min.js", array(), true);
}

add_action('wp_enqueue_scripts', 'bootstrap_scripts');

// side bar
function ccl_widget_areas(){

  register_sidebar(
    array(
      'before_title' => '<h2>',
      'after_title' => '</h2>',
      'before_widget' => '',
      'after_widget' => '',
    ),
    array(
      'name'=>'Sidebar Area',
      'id'=>'sidebar-1',
      'description'=>'Sidebar Widget Area'
    )
    );
}

add_action('widgets_init', 'ccl_widget_areas');

?>



<?php 
  // 워드프레스 글 하단에 표시되는 이전 글/다음 글 내비게이션을 카테고리로 제한
  // Restrict the post navigation to the same category
  add_filter( 'get_next_post_join', 'navigate_in_same_taxonomy_join', 20);
  add_filter( 'get_previous_post_join', 'navigate_in_same_taxonomy_join', 20 );
  function navigate_in_same_taxonomy_join() {
    global $wpdb;
    return " INNER JOIN $wpdb->term_relationships AS tr ON p.ID = tr.object_id INNER JOIN $wpdb->term_taxonomy tt ON tr.term_taxonomy_id = tt.term_taxonomy_id";
  }
  add_filter( 'get_next_post_where' , 'navigate_in_same_taxonomy_where' );
  add_filter( 'get_previous_post_where' , 'navigate_in_same_taxonomy_where' );
  function navigate_in_same_taxonomy_where( $original ) {
    global $wpdb, $post;
    $where   = '';
    $taxonomy   = 'category';
    $op   = ('get_previous_post_where' == current_filter()) ? '<' : '>';
    $where   = $wpdb->prepare( "AND tt.taxonomy = %s", $taxonomy );
    if ( ! is_object_in_taxonomy( $post->post_type, $taxonomy ) )
      return $original ;

    $term_array = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );

    $term_array = array_map( 'intval', $term_array );

    if ( ! $term_array || is_wp_error( $term_array ) )
    return $original ;

    $where   = " AND tt.term_id IN (" . implode( ',', $term_array ) . ")";
    return $wpdb->prepare( "WHERE p.post_date $op %s AND p.post_type = %s AND p.post_status = 'publish' $where", $post->post_date, $post->post_type );
  }
  // Source: https://presscustomizr.com/
?>