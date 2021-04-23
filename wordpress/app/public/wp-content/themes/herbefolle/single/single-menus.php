<?php /* Template Name: Cette semaine */ ?>
<?php 
  get_header(); 
?>

  <!-- THE HEADER -->
  <header class="header__thisweek">
    <div class="header--overlay thisweek">
      <h2> <?php the_title(); ?> </h2>
    </div>
  </header>


  <!-- THE CONTENT -->
  <main class="container">

    <div class="thisweek-bg">Hello</div>
    <section class="articles">
      
      <article class="article__thisweek">
        
        <div class="thisweek-image sketchy">
          <img src="./images/menus/IMG_20200527_154917171.jpg" alt="">
        </div>
        <p class="accent-color"><i class="far fa-clock"></i> &nbsp;Publié le <?php the_date(); ?></p>
        <!-- POST CONTENT STARTS HERE -->
        
        
          <?php

            // Start the Loop.
            while ( have_posts() ) :
              the_post();

              get_template_part( 'template-parts/content/content', 'single' );

              if ( is_singular( 'attachment' ) ) {
                // Parent post navigation.
                the_post_navigation(
                  array(
                    /* translators: %s: Parent post link. */
                    'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
                  )
                );
              } elseif ( is_singular( 'post' ) ) {
                // Previous/next post navigation.
                the_post_navigation(
                  array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
                      '<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
                      '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
                      '<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
                      '<span class="post-title">%title</span>',
                  )
                );
              }

              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) {
                comments_template();
              }

            endwhile; // End the loop.
          ?>




        <!-- POST CONTENT ENDS HERE -->
        <a href="buy.html"><div class="btn--medium">&rarr; Je commande !</div></a>
        
      </article>
      <a href="archives.html" class="seebefore" ><div>&rarr; Voir les semaines précédentes</div></a>
    </section>
    
   
  </main>
 
  <?php get_footer(); ?>