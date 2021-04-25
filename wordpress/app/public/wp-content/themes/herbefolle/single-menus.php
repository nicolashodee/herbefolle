<?php
/*
* Template Name: Cette semaine
* Template Post Type: post
*/
?>


  
  <!------------- THE MENU AND HEAD TAG ---------------->
  <?php get_header();?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!------------- THE PAGE HEADER ------------>
  <header class="header__thisweek">
    <div class="header--overlay thisweek">
      <h2><?php the_title(); ?> </h2>
    </div>
  </header>

  <!-------------- THE CONTENT -------------->
  <main class="container">

    <div class="thisweek-bg"></div>
    <section class="articles">
      
      <article class="article__thisweek">
        
        <div class="thisweek-image sketchy">
          <?php
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail( 'large' );
            }
          ?>
        </div>
        <p class="accent-color"> <i class="far fa-clock"></i>  &nbsp;Publié le <?php the_date(); ?> par : <?php echo get_the_author(); ?>
 </p>
        <!-- POST CONTENT STARTS HERE -->

        <?php the_content(); ?>


        <!-- POST CONTENT ENDS HERE -->
        <a href=" <?php site_url(); ?>/buy "><div class="btn--medium">&rarr; Je commande !</div></a>
        
      </article>
      <a href=" <?php site_url(); ?>/archives " class="seebefore" ><div>&rarr; Voir les semaines précédentes</div></a>
    </section>
  
  </main>
  <?php endwhile; endif; ?>



  <!-- THE FOOTER  -->
  <?php get_footer(); ?>




  
