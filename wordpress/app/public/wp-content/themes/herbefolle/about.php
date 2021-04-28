
<?php
/**
 * Template Name: About
*/

?>

  <!----------------X------------ WP HEADER SECTION --------------X----------------->
  <?php get_header(); ?>

  <!----------------X------------ HEADER SECTION --------------X----------------->
  <header class="header__about">
    <div class="header--overlay apropos">
      <h2>L'herbe Folle, c'est quoi ?</h2>
    </div>
  </header>

  <!----------------X------------ MAIN SITE SECTION --------------X----------------->
  <main class="container">

    <!-- PRESENTATION -->
    <section id="about_main">

      <div class="animate-about">
        <h2 style="text-align: center;">C'est une cuisine <br class="mobile"> <span id="text"></span><span class="text__decorator">_</span></h2></div>
      <div>
        <h4 style="text-align: center;" class="animate-about">sur Aix en Provence.</h4><br>
        <h4 style="text-align: center; padding: 10px;" class="animate-about">Des compositions saines et simples, composées autour des végétaux, accompagnées parfois de viande ou de poisson.</h4>
      </div>

    </section>

    <!-- QUI ? -->
    <section class="about who anim-right">
        <!-- text -->
        <div class="text ">
          <h1>Par Qui ?</h1>
          <p>Par Denis, votre chef dévoué et passionné.<br> Un esprit sain dans une cuisine saine !</p> 
        </div>
        <!-- image -->
        <div class="image">
          <div>
            <img src="/wp-content/themes/herbefolle/assets/images/male.jpg" alt="">
          </div>
          <div class="salade">
            <img src="/wp-content/themes/herbefolle/assets/images/WP_20180605_11_35_06_Pro-1024x576.jpg" alt="" >
          </div>
        </div>
      
    </section>

    <!-- QUAND -->
    <section class="about when anim-left">
      <!-- image -->
      <div class="image ">
        <img src="/wp-content/themes/herbefolle/assets/images/calendar-minimal.jpg" alt="">
      </div>
        
      <div class="bg_flowers1"></div>
      <!-- text -->
      <div class="text ">
        <h1>Quand ?</h1>
        <p>
          <ul style="font-size: 20px; list-style: none;">
            <li>du Mardi au Samedi, le midi seulement</li>
            <li>Hors vacances scolaires et jours fériés</li>
            <li>Consultez le menu de la semaine pour être sûr !</li>
          </ul>
        </p>
        <p><a href="
        
        <?php
          $my_query = new WP_Query('category_name=MENUS&showposts=1');
          while ($my_query->have_posts()) : $my_query->the_post(); {
          the_permalink();
          } endwhile; 
        ?>
        
        " class="btn--buy" style="text-align: right;">&rarr; Voir le menu </a></p>
      </div>
      
    </section>

    <!-- OU -->
    <section class="about where anim-right">
        
      <!-- text -->
      <div class="text">
        <h1>Où ?</h1>
        <p>Dans notre petit refuge au coeur d'Aix en Provence, au milieu des herbes folles !</p> 
        <p>Nous avons un poullailler, un potager, une cave, et une cuisine toute équipée (et aux normes) pour exprimer toute la fraicheur des produits du petit marché d'Aix.</p>
      </div>
      <!-- image -->
      <div class="image">

        <div>
          <img src="/wp-content/themes/herbefolle/assets/images/maison.jpg" alt="">
        </div>

      </div>

    </section>

    <!-- COMMENT ? -->
    <section class="about how anim-left">
      
      <!-- image -->
      <div class="image">
        
        <img src="/wp-content/themes/herbefolle/assets/images/portion2.jpg" alt="">
        <!-- <img src="./images/portion.png"></div> -->

      </div>

      <!-- text -->
      <div class="text">

        <h1>Comment ?</h1>
        <h4 style="text-align: right;">Des portions individuelles, souvent pour moins de 10€ !<br> A venir chercher sur place ou délivrées à proximité.</h4>
        <p>Nous utilisons des emballages compostables et couverts en bois <i class="fas fa-leaf" style="color: green;"></i> <br><br>
        Livraisons possibles à l'hopital d'Aix Nord. <i class="fas fa-hospital" style="color: red;"></i></p>
        <a href="

        <?php
          $my_query = new WP_Query('category_name=MENUS&showposts=1');
          while ($my_query->have_posts()) : $my_query->the_post(); {
          the_permalink();
          } endwhile; 
        ?>
        
        " class="btn--buy" style="text-align: right;">&rarr; Voir le menu </a>

      </div>
      
    </section>
    
    <!-- NOTRE HISTOIRE -->
    <section class="about historique">
      <h1 class="anim-left">Notre histoire</h1>
      <div class="category active anim-left">
        <div class="left">
          <h2>Hier</h2>
        </div>
        <div class="right">
          <p>
            Elle poussait depuis un certain temps déjà dans ma tête, et en est sortie un jour de printemps 2017, après mon départ d’un métier passionnant mais dans lequel je ne me retrouvais plus.
            L’envie de partage, de bien être individuel et collectif, de naturel, de simplicité en composait déjà la sève depuis longtemps. 
          </p>
          <p>
            La découverte de notre nouveau lieu de vie, petite maison située non loin de l’hôpital public d’Aix, nous a tout de suite donné l’envie de planter ici un lieu d’accueil, de convivialité et de transition.
            L’histoire en voudra autrement. Dans un premier temps, au lieu de ce lieu mixte restaurant-maison de quartier que nous voulions créer, sortira en juillet 2018 une Herbe Folle différente, plus sauvage… une cuisine de saison en livraison.
          </p> 
          <p>Fin décembre 2019, après une pousse d’un an et demi, l’Herbe Folle produira enfin cette cantine d’hôte initialement semée.</p>
          
        </div>
      </div>
  
      <div class="category anim-right">
        <div class="left"><h2>Aujourd'hui</h2></div>
        <div class="right">
          <p style="font-weight:300;">
            Avec la complicité de producteurs locaux, comme Ludivine et Jérôme, de Cucuron, l’aide des herbes aromatiques fraîches de notre potager, le regard (peu) inspiré mais (toujours) soutenu de nos poules et surtout les avis critiques, éclairés et constructifs de ma femme et ma fille, de notre famille et nos amis, je cuisine avec envie et sers avec plaisir les produits de notre région.
          </p>
        </div>
      </div>
      <div class="category anim-left">
        <div class="left"><h2>Demain</h2></div>
        <div class="right">
          <p>
            L’Herbe Folle grandira, s’enrichira de bien de nouveaux terreaux… n’hésitez pas à franchir notre porte pour les découvrir!
          </p>
        </div>
      </div>
    </section>

  </main>


  <!--------------X---------- WP FOOTER SECTION ----------X----------->
  <?php get_footer(); ?>