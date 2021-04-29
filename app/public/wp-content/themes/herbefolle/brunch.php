

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
        'showposts' => '1',
        'category_name' => 'BRUNCH',
        'paged' => $paged
      );
      $the_query = new WP_Query( $args );
  ?>





  <main class="container">

    <section class="main-title animate-brunch">
      <div><h3>Le dimanche devient le rendez vous du brunch !</h3></div>
      
      <h4 class="accent-color animate-brunch">Important: Nous utilisons exclusivement des produits frais, pensez à commander au plus tard le samedi midi.</h4>
    </section>

    <?php
        while ($the_query -> have_posts()) :
          $the_query -> the_post();
      ?>
    

    <div class="brunch__left">
      <h1> <?php the_title(); ?> </h1>
    </div>

    <section class="brunch__section">
      
      <!-- BRUNCH POST CONTENT STARTS HERE -->

        
      <div class="brunch_text"> 
          <?php the_content(); ?>
          <a href=" <?php site_url(); ?>/buy "><div class="btn--medium">&rarr; Je commande !</div></a>
      </div>

      <div  class="brunch_image">
        
        <?php
          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail( 'small' );
          }
        ?>
          
      </div>
        

      <!-- BRUNCH POST CONTENT ENDS HERE -->
        

      
        
      
        
    </section>
    
    <?php
        endwhile;
      ?>
    <section class="archives_navigation">

      <?php if (function_exists("pagination")) {
            pagination($the_query->max_num_pages);
        } ?>

    </section>
    

  </main>
  

<!--------------X---------- WP FOOTER SECTION ----------X----------->
<?php get_footer(); ?>