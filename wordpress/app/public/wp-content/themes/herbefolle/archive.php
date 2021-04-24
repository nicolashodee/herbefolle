
<?php
/**
 * Template Name: archives
*/

?>

<?php
$post_by_category = new WP_Query( 'cat=MENUS&posts_per_page=10' );
if ($post_by_category->have_posts()) :
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
        while ($post_by_category -> have_posts()) :
            $post_by_category -> the_post();
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
      <div class="btn--small">&larr;</div>
      <div class="page-number"><h4>1</h4></div>
      <div class="btn--small">&rarr;</div>
    </section>
  </main>

<!--------------X---------- WP FOOTER SECTION ----------X----------->
<?php get_footer(); ?>
