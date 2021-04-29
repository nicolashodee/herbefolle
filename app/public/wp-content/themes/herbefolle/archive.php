
<?php
/**
 * Template Name: archives
*/

?>

<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'posts_per_page' => 6,
  'paged' => $paged, 
  'cat' => 2
);
$custom_query = new WP_Query( $args );
if ($custom_query -> have_posts()) :
?>

  <!----------------X------------ WP HEADER SECTION --------------X----------------->
  <?php get_header(); ?>


  <!----------------X------------ HEADER SECTION --------------X----------------->
  <header class="header__archives">
    <div class="header--overlay archives flex-column">
      <div>
        <div><h2>Archives</h2></div>
        <h5 style="color: white;">Ces bons petits plats se sont bien battus. R.I.P</h5>
      </div>
    </div>
  </header>
  <!----------------X------------ MAIN SITE SECTION --------------X----------------->
  <main class="container">

      


    <section class="archives">
      
      
      <?php
        while ($custom_query -> have_posts()) :
          $custom_query -> the_post();
      ?>
      
      <article class="article__archive desaturate sketchy">
        <a href="<?php the_permalink() ?>">
          <div class="pastweek-image ">
            <?php
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
              the_post_thumbnail( 'small' );
              }
            ?>
          </div>
          <div class="pastweek-text">
            <h4 style="text-align: left;"> <?php the_title(); ?> </h4>
            <p>
              <?php echo get_excerpt(); ?>
            </p>
            <p>Publié le <?php the_date(); ?></p>
          </div>
        </a>
      </article>  
        
      <?php
        endwhile;
        endif; 
      ?>
      
    </section>

  
    <section class="archives_navigation">

    <?php if (function_exists("pagination")) {
          pagination($custom_query->max_num_pages);
      } ?>
    </section>
  </main>

<!--------------X---------- WP FOOTER SECTION ----------X----------->
<?php get_footer(); ?>
