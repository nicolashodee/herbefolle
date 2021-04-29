

  <?php get_header(); ?>


  <!---------------------------- MAIN SITE SECTION ------------------------------->

  <main class="homepage-wrapper">

    <!-----X--- desktop version -----X----->
    <div class="homepage-column col1 desktop">
      <a href=" <?php
                    $my_query = new WP_Query('category_name=MENUS&showposts=1');
                    while ($my_query->have_posts()) : $my_query->the_post(); {
                    the_permalink();
                    } endwhile; 
                ?>
       ">
        <div class="homepage-overlay overlay1">
          <div class="text">Cette semaine</div>
        </div>
      </a>
    </div>
    <div class="homepage-column col2 desktop">
      <a href=" <?php site_url(); ?>/brunch ">
        <div class="homepage-overlay overlay2">
          <div class="text">Les brunchs</div>
        </div>
      </a>
    </div>
    <div class="homepage-column col3 desktop">
      <a href=" <?php site_url(); ?>/about/ ">
        <div class="homepage-overlay overlay3">
          <div class="text">A propos</div>
        </div>
      </a>
    </div>

    <!-----X--- mobile version -----X----->
    <div class="homepage-column col1 mobile">
      <a href=" <?php
                    $my_query = new WP_Query('category_name=MENUS&showposts=1');
                    while ($my_query->have_posts()) : $my_query->the_post(); {
                    the_permalink();
                    } endwhile; 
                ?>
      ">
        <div class="text-mobile">Cette semaine</div>
        <div class="homepage-overlay overlay1">
          
        </div>
      </a>
    </div>
    <div class="homepage-column col2 mobile">
      <a href=" <?php site_url(); ?>/brunch ">
        <div class="text-mobile">Les brunchs</div>
        <div class="homepage-overlay overlay2">
        </div>
      </a>
    </div>
    <div class="homepage-column col3 mobile">
      <a href=" <?php site_url(); ?>/about ">
        <div class="text-mobile">A propos</div>
        <div class="homepage-overlay overlay3">
        </div>
      </a>
    </div>

  </main>


  <!--------------X---------- CALLING THE FOOTER WITH PHP ----------X----------->
  <?php get_footer(); ?>

  