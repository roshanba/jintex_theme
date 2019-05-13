<?php
// This is the main function file for our worpdpress theme

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
    'main' => esc_html__( 'main', 'jintex_solutions' ),
) );

register_nav_menus( array(
    'footer' => esc_html__( 'footer', 'jintex_solutions' ),
) );



function jintex_enque_scripts() {
    // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts 
   
   

  wp_enqueue_script( 'popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'); // all the bootstrap javascript goodness

  wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'); // all the bootstrap javascript goodness


}
add_action('wp_enqueue_scripts', 'jintex_enque_scripts');

function jintex_enque_styles() {
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

    // this will add the stylesheet from it's default theme location if your theme doesn't already
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'jintex_enque_styles');


add_theme_support( 'custom-logo' );

$args = array(
    'label'=>'features',
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'rewrite' => array('slug' => 'features'),
      'menu_icon' => 'dashicons-video-alt',
      'add_new_item'=>'Add new Features'
      );
  register_post_type( 'features', $args );

  $args2=array(
    'title','editor'

  );
  remove_post_type_support( 'features', 'title' );
  remove_post_type_support( 'features', 'editor' );



  $testimonail_args = array(
    'label'=>'testimonials',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'features'),
    'menu_icon' => 'dashicons-format-quote',
    'add_new_item'=>'Add new testimonail'
    );
register_post_type( 'testimonails',   $testimonail_args );


remove_post_type_support( 'testimonails', 'title' );
remove_post_type_support( 'testimonails', 'editor' );



function sidebar_widgets(){
    register_sidebar( array(
        'name'          => 'Main Sidebar',
        'id'            => 'sidebar-1',
        'description'   => 'sidebar',
        'before_widget' => '<div class="blog-post">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h3 class="side_widget">',
        'after_title'   => "</h3>\n",
    ) );

}

add_action('widgets_init','sidebar_widgets');



function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div>
    <input type="text"  value="' . get_search_query() . '" name="s" id="s" />
    <input class="btn btn-success" type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form', 100 );

?>