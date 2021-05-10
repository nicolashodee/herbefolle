
    <?php /* Template Name: Commander */ ?>

  <!------------- WP HEADER SECTION ---------------->
  <?php get_header();?>

  <!-- THE HEADER -->
  <header class="header__buy">
    <div class="header--overlay buy">
      <h2>On passe en cuisine ?</h2>
    </div>
  </header>
  <!-- THE CONTENT -->
  <main class="container">
  
    <section class="main-title">
      <div class="animate-buy"><h3>Pré-commandez vos plats ici !</h3></div>
      
      <h4 class="accent-color animate-buy">Important: <br>Nous utilisons exclusivement des produits frais. Merci de nous contacter au plus tard la veille</h4>
    </section>

    <div class="buy__left"><h1>Par téléphone</h1></div>
    <section class="buy__section">
      <div class="buy__telephone">
        <div>envoyez moi un message avec les infos suivantes</div>
        <div>
          <ul>
            <li>Jour souhaité</li>
            <li>Repas du midi, ou du soir (si applicable)</li>
            <li>Nombre de portions (précisez si enfant ou adulte)</li>
            <li>Mode de livraison souhaité (sur Aix en Provence, centre ville seulement)</li>
          </ul>
        </div>
        <div class="flex-column space-between">
          <p></p>
          <a href="tel:+33625334913" class="btn--buy"><div id="" ><i class="fa fa-phone" style="font-size:24px"></i> &#8239; &#8239;Téléphone portable</div></a>
          <a href="tel:+33486313417" class="btn--buy"><div id="" ><i class="fa fa-phone" style="font-size:24px"></i> &#8239; &#8239;Téléphone fixe</div></a>
        </div>
        
      </div>
    </section>
    <div class="buy__left"><h1>Par email</h1></div>
    <section class="buy__section">
      <div class="">
        Cliquez sur le bouton ci dessous, un email pré-rempli va s'ouvrir. 
        <p></p>
        <button class="btn--buy" onclick=' window.location = " mailto:contact@lherbefolle.net " '><i class="far fa-envelope-open" style="font-size:24px"></i>&#8239; &#8239; Envoyer un email</button>

      </div>
    </section>
    <div class="buy__left"><h1>En ligne</h1></div>
    <section class="buy__section">
      <div>Vous souhaiteriez voir l'achat en ligne disponible ? Faites nous le savoir par email !</div>
    </section>
   
  </main>

  <!----------WP FOOTER SECTION --------------->
  <?php get_footer(); ?>
  