<?php

  //-------------------------------------------------------------------------- //
  //------X----------- FUNCTIONS FOR CUSTOM THEME L'HERBE FOLLE -------X------ //
  //-------------------------------------------------------------------------- //






  //-------------- ENQUEUING CUSTOM CSS  -------------- //
  function herbefolle_register_styles () {

    wp_enqueue_style('herbefolle_custom_css', get_template_directory_uri() . "/style.css", '1.0', 'all');
    wp_enqueue_style('herbefolle_fontawesome', get_template_directory_uri() . "/assets/fontawesome/css/all.css"); 

  }

  add_action( 'wp_enqueue_scripts', 'herbefolle_register_styles' );





  //-------------- ENQUEUING CUSTOM JAVASCRIPT  -------------- //
  function herbefolle_register_scripts () {

    
    wp_enqueue_script('herbefolle_fontawesome_scripts',   "https://use.fontawesome.com/4c85fb25a3.js", array(), '', true);
    wp_enqueue_script('herbefolle_gsap',                  "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js", array(), false, true);
    wp_enqueue_script('herbefolle_gsap_ScrollTrigger',    "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js", array(), '', true );
    wp_enqueue_script('herbefolle_gsap_TweenMax',         "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js", array(), '', true );
    wp_enqueue_script('herbefolle_custom_javascript_main', get_template_directory_uri() . "/assets/javascript/main.js", array(), '' , true);
    

  }
 

  // loading custom Javascript depending on which page you're on
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
    // FOR ARCHIVE PAGE
    if ( is_page('brunch') ) { 
      wp_enqueue_script('herbefolle_custom_javascript_archives', get_template_directory_uri() . "/assets/javascript/brunch.js", array(), false, true);
    }

}


  add_action( 'wp_enqueue_scripts', 'herbefolle_register_scripts');
  add_action('wp_enqueue_scripts', 'herbefolle_conditional_enqueue_scripts');


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
    echo '<a href="http://nicolashodee.com/" style="border: 2px solid darkgrey; color: black; padding: 5px 25px;">Made with <span class="redheart" style="color: red;">♥</span> by Nicolas HODEE | www.nicolashodee.com</a>';
  } 
  add_filter('admin_footer_text', 'custom_admin_footer');


//-------- CUSTOM MENU ---------- //
function herbefolle_custom_new_menu() {
  register_nav_menu('herbefolle-custom-menu',__( 'MENU HERBE FOLLE CUSTOM' ));
}
add_action( 'init', 'herbefolle_custom_new_menu' );

// ------ PAGINATION FUNCTION FOR ARCHIVES ------ //
function pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        echo "<div class=\"pagination\">";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; Début</a>";
        //if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Page Précédente</a>";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }

        //if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Page suivante &rsaquo;</a>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Fin &raquo;</a>";
        echo "</div>\n";
    }
}
?>