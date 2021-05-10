<?php 
  wp_head(); 
?>

<!DOCTYPE html>
<html lang="en">
 


<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
  <!-----X------ CUSTOM STYLES  ------X------->
  <?php wp_head(); ?>

  <title></title>

</head>


<body>


  <!-------- CUSTOM CURSOR --------->
  <div class="cursor"></div>



  <!---------------------------- MENU SECTION ------------------------------->

  <nav>
    <div class="top-bar">
      <a href="<?php echo home_url(); ?>">

        <div id="site-title">
          <span style="font-family: 'Monoton', cursive;">
            l'HERBE&#8239;&#8239;
          <span id="F" class="letter" style="display: inline-block; transform: rotate(-15deg);">F</span>
          <span id="O" class="letter" style="display: inline-block; transform: rotate(0deg);">O</span>
          <span id="L1" class="letter" style="display: inline-block; transform: rotate(0deg);">L</span>
          <span id="thing" class="letter" style="display: inline-block; transform: rotate(0deg);">L</span>
          <span id="E" class="letter" style="display: inline-block; transform: rotate(0deg);">E</span>
        </div>
      </a>

      <div class="top-bar--right">
        <a href="<?php site_url(); ?>/buy"><div class="animate btn--nav">Réserver maintenant</div></a>
        <!-- NEW HAMBURGER -->
        <div class="animate hamburger">
          <svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="30" onclick="this.classList.toggle('active')">
            <path
                  class="line top"
                  d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path
                  class="line middle"
                  d="m 70,50 h -40" />
            <path
                  class="line bottom"
                  d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
          </svg>
        </div>
      </div>

    </div>
  </nav>
  
  <!-- MENU OPENED -->

  <!------X------ WORDPRESS MENU -----X----->
  <?php
    wp_nav_menu( array( 
        'theme_location' => 'herbefolle-custom-menu', 
        'items_wrap' => '<ul id="herbefolle-menu" class="nav-links">%3$s</ul>' ) ); 
  ?>
