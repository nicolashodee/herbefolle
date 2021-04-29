<?php
/*
* Template Name: Herbe Folle Page par defaut
*/
?>  


<!------------- THE MENU AND HEAD TAG ---------------->
<?php get_header();?>
<!------------- THE PAGE HEADER ------------>
<?php while (have_posts()) : the_post(); ?>
<header class="header__default">
   <div style="color: white;"><h2><?php the_title(); ?> </h2></div>
</header>

<!-------------- THE CONTENT -------------->
<main class="container">

  <div class="thisweek-bg"></div>
  <section class="articles__default">

    
    
     
      <!-- DEFAULT PAGE CONTENT STARTS HERE -->
      
        <div style="padding: 50px;">
          <?php the_content(); ?>
        </div>
        
        
      

      <!-- DEFAULT PAGE CONTENT ENDS HERE -->
    
    
  </section>

</main>
<?php endwhile; ?>




<!-- THE FOOTER  -->
<?php get_footer(); ?>





