

<?php
/**
 * Template Name: Brunch
*/

?>

  <!----------------X------------ WP HEADER SECTION --------------X----------------->
  <?php get_header(); ?>  

  <!----------------X------------ HEADER SECTION --------------X----------------->
  <header class="header__brunch">
    <div class="header--overlay brunch">
      <h2>Vous n'y résisterez pas !</h2>
    </div>
  </header>



  <!----------------X------------ MAIN SITE SECTION --------------X----------------->
  <?php
    $args = array (
        'showposts' => '3',
        'category_name' => 'BRUNCH',
        'paged' => $paged
      );
      $the_query = new WP_Query( $args );
  ?>


  <main class="container">

    <section class="main-title">
      <div><h3>Le dimanche devient le rendez vous du brunch !</h3></div>
      
      <h4 class="accent-color">Important: Nous utilisons exclusivement des produits frais, pensez à commander au plus tard le samedi midi.</h4>
    </section>
    
    
    <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>

    <div class="brunch__left">
      <h1> <?php the_title(); ?> </h1>
    </div>

    <section class="buy__section">
      
      <!-- BRUNCH POST CONTENT STARTS HERE -->

          <?php the_content(); ?>

      <!-- BRUNCH POST CONTENT ENDS HERE -->
        

      <a href=" <?php site_url(); ?>/buy "><div class="btn--medium">&rarr; Je commande !</div></a>
        
    </section>

    <?php
        endwhile;
        endif; 
      ?>

  </main>
  

<!--------------X---------- WP FOOTER SECTION ----------X----------->
<?php get_footer(); ?>