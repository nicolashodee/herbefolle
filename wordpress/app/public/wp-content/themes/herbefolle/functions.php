


<?php

  //------- FUNCTIONS FOR OUR CUSTOM THEME L'HERBE FOLLE ----------- //


  //-------------- ADDING CUSTOM CSS  -------------- //
  function herbefolle_register_styles () {

    wp_enqueue_style('herbefolle_custom_css', get_template_directory_uri() . "/style.css", '1.0', 'all');
    wp_enqueue_style('herbefolle_fontawesome', get_template_directory_uri() . "/assets/fontawesome/css/all.css"); 

  }

  add_action( 'wp_enqueue_scripts', 'herbefolle_register_styles' );

  //-------------- ADDING CUSTOM JAVASCRIPT  -------------- //
  function herbefolle_register_scripts () {

    
    wp_enqueue_script('herbefolle_fontawesome_scripts',   "https://use.fontawesome.com/4c85fb25a3.js", array(), false, true);
    wp_enqueue_script('herbefolle_gsap',                  "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js", array(), false, true);
    wp_enqueue_script('herbefolle_gsap_ScrollTrigger',    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js", array(), false, true );
    wp_enqueue_script('herbefolle_gsap_TweenMax',         "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js", array(), false, true );

    wp_enqueue_script('herbefolle_custom_javascript_main', get_template_directory_uri() . "/assets/javascript/main.js", array(), false, true  );
    

  }

  function herbefolle_conditional_enqueue_scripts() {

    // FOR THIS WEEK POST PAGE
    if ( is_single() && in_category( 'MENUS' ) ) { 
        wp_enqueue_script('herbefolle_custom_javascript_thisweek', get_template_directory_uri() . "/assets/javascript/thisweek.js", array(), false, true);
    }
    // FOR HOME PAGE
    if ( is_front_page() ) { 
      wp_enqueue_script('herbefolle_custom_javascript_index', get_template_directory_uri() . "/assets/javascript/index.js", array(), false, true);
    }
    // FOR A PROPOS PAGE
    if ( is_page('about') ) { 
      wp_enqueue_script('herbefolle_custom_javascript_about', get_template_directory_uri() . "/assets/javascript/about.js", array(), false, true);
    }
    // FOR ESPACE TRAITEUR PAGE
    if ( is_page('traiteur') ) { 
      wp_enqueue_script('herbefolle_custom_javascript_traiteur', get_template_directory_uri() . "/assets/javascript/traiteur.js", array(), false, true);
    }
    // FOR BUY PAGE
    if ( is_page('buy') ) { 
      wp_enqueue_script('herbefolle_custom_javascript_buy', get_template_directory_uri() . "/assets/javascript/buy.js", array(), false, true);
    }
    // FOR ARCHIVE PAGE
    if ( is_page('archives') ) { 
      wp_enqueue_script('herbefolle_custom_javascript_archives', get_template_directory_uri() . "/assets/javascript/archives.js", array(), false, true);
    }

}

  add_action( 'wp_enqueue_scripts', 'herbefolle_register_scripts' );
  add_action('wp_enqueue_scripts', 'herbefolle_conditional_enqueue_scripts');

  
//------------ CUSTOM POST TEMPLATE BASED ON CATEGORY ------------//

// add_filter('single_template', 'check_for_category_single_template');
// function check_for_category_single_template( $t )
// {
//   foreach( (array) get_the_category() as $cat ) 
//   { 
//     if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php"; 
//     if($cat->parent)
//     {
//       $cat = get_the_category_by_ID( $cat->parent );
//       if ( file_exists(get_stylesheet_directory() . "/single-category-{$cat->slug}.php") ) return get_stylesheet_directory() . "/single-category-{$cat->slug}.php";
//     }
//   } 
//   return $t;
// }



//------------ ENABLING POST THUMBNAILS ------------//
add_theme_support( 'post-thumbnails' );

//------------ REDUCING EXCERPT LENGTH FOR ARCHIVE PAGE ------------//
function get_excerpt() {
  $excerpt = get_the_content();
  $excerpt = preg_replace(" ([.*?])",'',$excerpt);
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, 150);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
  $excerpt = $excerpt.'... <a href="'.get_the_permalink().'">more</a>';
  return $excerpt;
  }

//------------ Custom Admin Footer ------------//
  function custom_admin_footer() {
    echo '<a href="http://nicolashodee.com/">Made with <span class="redheart" style="color: red;">♥</span> by Nicolas HODEE | www.nicolashodee.com</a>';
  } 
  add_filter('admin_footer_text', 'custom_admin_footer');

?>

