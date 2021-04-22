


<!DOCTYPE html>
<html lang="en">
 


<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-----X------ CUSTOM STYLES  ------X------->
  <?php wp_head(); ?>

  <title>l'Herbe Folle, cantine bio à Aix en Provence</title>
  
  <!-----X------ FAVICON ---X------>
  <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>

</head>



<body>

  <!-------- CUSTOM CURSOR --------->
  <div class="cursor"></div>



  <!---------------------------- MENU SECTION ------------------------------->

  <nav>
    <div class="top-bar">
      <a href="index.html">

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
        <a href="buy.html"><div class="animate btn--nav">Réserver maintenant</div></a>
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
  <ul class="nav-links">
    <li><a href="about.html"><h2>A propos</h2></a></li>
    <li><a href="thisweek.html"><h2>Menu de la semaine</h2></a></li>
    <li><a href="brunch.html"><h2>Les brunchs</h2></a></li>
    <li><a href="traiteur.html"><h2>Espace traiteur</h2></a></li>
    <li><a href="archives.html"><h2>Archives</h2></a></li>
  </ul>

  <!---------------------------- MAIN SITE SECTION ------------------------------->

  <main class="homepage-wrapper">

    <!-----X--- desktop version -----X----->
    <div class="homepage-column col1 desktop">
      <a href="thisweek.html">
        <div class="homepage-overlay overlay1">
          <div class="text">Menu de la semaine</div>
        </div>
      </a>
    </div>
    <div class="homepage-column col2 desktop">
      <a href="brunch.html">
        <div class="homepage-overlay overlay2">
          <div class="text">Les brunchs</div>
        </div>
      </a>
    </div>
    <div class="homepage-column col3 desktop">
      <a href="about.html">
        <div class="homepage-overlay overlay3">
          <div class="text">A propos</div>
        </div>
      </a>
    </div>

    <!-----X--- mobile version -----X----->
    <div class="homepage-column col1 mobile">
      <a href="thisweek.html">
        <div class="text-mobile">Menu de la semaine</div>
        <div class="homepage-overlay overlay1">
          
        </div>
      </a>
    </div>
    <div class="homepage-column col2 mobile">
      <a href="brunch.html">
        <div class="text-mobile">Les brunchs</div>
        <div class="homepage-overlay overlay2">
        </div>
      </a>
    </div>
    <div class="homepage-column col3 mobile">
      <a href="about.html">
        <div class="text-mobile">A propos</div>
        <div class="homepage-overlay overlay3">
        </div>
      </a>
    </div>

  </main>

  <!---------------------------- FOOTER SECTION ------------------------------->

<footer>
    <!-- ROW 1 -->
    <div class="footer__info flex-row space-between text-strong">
      <div>
          <h4>L'herbe Folle - Café d'hôte à Aix en Provence</h4>
          <ul>
            <li>email: <a href="mailto:contact@lherbefolle.net">contact@lherbefolle.net</a></li>
            <li>fixe: <a href="tel:+33486313417">04.86.31.34.17</a></li>
            <li>mobile: <a href="tel:+33625334913">06.25.33.49.13</a></li>
          </ul>
      </div>
      <div class="footer__social">
        <ul>
          <li> <a href="https://goo.gl/maps/AbcdYEoqVkxavS3K9" target="_blank"><i class="fas fa-map-marker-alt"></i> Google Maps</a></li>
          <li> <a href="https://www.instagram.com/lherbefolle.aix/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
          <li><a href="https://www.tripadvisor.fr/" target="_blank"><i class="fab fa-tripadvisor"></i> TripAdvisor</a></li>
        </ul>
      </div>
    </div>

    <!-- ROW 2 -->
    <div class="flex-row space-between credits">
      <div><p>Copyright 2021 Denis Hayoun. All Rights Reserved</p></div>
      <div><p>Réalisation site internet : <a href="http://www.nicolashodee.com" target="_blank">www.nicolashodee.com</a></p></div>
    </div>
      
  </footer>

</body>
</html>

  <!--------------X---------- CALLING THE FOOTER WITH PHP ----------X----------->
  <?php get_footer(); ?>

  