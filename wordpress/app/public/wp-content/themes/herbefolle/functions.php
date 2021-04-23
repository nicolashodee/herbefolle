


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
    // wp_enqueue_script('herbefolle_custom_javascript_thisweek', get_template_directory_uri() . "/assets/javascript/thisweek.js", array(), false, true  );
    // wp_enqueue_script('herbefolle_custom_javascript_index', get_template_directory_uri() . "/assets/javascript/index.js", array(), false, true  );
    
    

  }

  function herbefolle_conditional_enqueue_script1() {
    if ( is_single() && in_category( 'MENUS' ) ) { 
        wp_enqueue_script('herbefolle_custom_javascript_thisweek', get_template_directory_uri() . "/assets/javascript/thisweek.js", array(), false, true);
    }
}

  add_action( 'wp_enqueue_scripts', 'herbefolle_register_scripts' );
  add_action('wp_enqueue_scripts', 'herbefolle_conditional_enqueue_script1');

  


?>

