
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
        <a href=" mailto:contact@lherbefolle.net?subject=Pr%C3%A9commande%20sur%20le%20site%20de%20l'Herbe%20Folle&body=Bonjour%20Denis%2C%20je%20souhaiterais%20vous%20commander%20un%20plat%20!%0D%0A%0D%0AVoici%20le%20d%C3%A9tail%3A%0D%0A%0D%0A-%20Jour%20souhait%C3%A9%0D%0A-%20Repas%20du%20midi%2C%20ou%20du%20soir%2C%20ou%20brunch%20(si%20applicable)%0D%0A-%20Nombre%20de%20portions%20(pr%C3%A9cisez%20si%20enfant%20ou%20adulte)%0D%0A-%20Mode%20de%20livraison%20souhait%C3%A9%20(voir%20conditions)%0D%0A%0D%0APourriez%20vous%20me%20confirmer%20la%20disponibilit%C3%A9%20%3F%0D%0AMerci%20d'avance%20et%20bonne%20journ%C3%A9e%20! "><div class="btn--buy">&rarr;  Envoyer un email</div></a>
      </div>
    </section>
    <div class="buy__left"><h1>En ligne</h1></div>
    <section class="buy__section">
      <div>Vous souhaiteriez voir l'achat en ligne disponible ? Faites nous le savoir par email !</div>
    </section>
   
  </main>

  <!----------WP FOOTER SECTION --------------->
  <?php get_footer(); ?>
  