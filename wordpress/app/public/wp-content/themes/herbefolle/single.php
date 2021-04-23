<?php /* Template Name: Cette semaine */ ?>

  <?php

  // Start the Loop.
  while ( have_posts() ) :
    the_post();
    
    get_template_part( 'template-parts/content/content', 'single' );

  endwhile; // End the loop.
  ?>

  <!------------- THE MENU AND HEAD TAG ---------------->
  <?php get_header();?>

  <!------------- THE PAGE HEADER ------------>
  <header class="header__thisweek">
    <div class="header--overlay thisweek">
      <h2> <?php the_title(); ?> </h2>
    </div>
  </header>

  <!-------------- THE CONTENT -------------->
  <main class="container">

    <div class="thisweek-bg"></div>
    <section class="articles">
      
      <article class="article__thisweek">
        
        <div class="thisweek-image sketchy">
          <img src="./images/menus/IMG_20200527_154917171.jpg" alt="">
        </div>
        <p class="accent-color"><i class="far fa-clock"></i> &nbsp;Publié le <?php get_the_date('F M Y', '<h2>', '</h2>');  ?></p>
        <!-- POST CONTENT STARTS HERE -->

        <?php the_content(); ?>


        <!-- POST CONTENT ENDS HERE -->
        <a href="buy.html"><div class="btn--medium">&rarr; Je commande !</div></a>
        
      </article>
      <a href="archives.html" class="seebefore" ><div>&rarr; Voir les semaines précédentes</div></a>
    </section>
    
   
  </main>


  <!-- THE FOOTER  -->
  <?php get_footer(); ?>




  
