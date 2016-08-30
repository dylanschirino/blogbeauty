<?php
$aside = get_option("easy_page_options");
 ?>
<footer class="footer">

  <div class="margin">
  <section class="footer__plan">
    <h3 class="plan__title scale">
      Plan du site
    </h3>

    <ul class="plan__list">
      <li class="plan__element">
        <a class="plan__link" href="<?php the_permalink('6');?>" title="Accéder à la page d'accueil">Accueil</a>
      </li>
      <li class="plan__element">
        <a class="plan__link" href="<?php the_permalink('39');?>" title="Accéder a la page des Catégories">Archive</a>
      </li>
      <li class="plan__element">
        <a class="plan__link" href="<?php the_permalink('48');?>" title="Accéder a la page À propos ">À propos</a>
      </li>
      <li class="plan__element">
        <a class="plan__link" href="<?php the_permalink('51');?>" title="Accéder a la page de Contact">Contact</a>
      </li>
    </ul>
  </section>

  <section class="footer__contact">
    <div class="contact__container">
      <h3 class="contact__title scale">
        Me contacter
      </h3>
      <a class="contact__link contact__link--twitter" href="<?php echo $aside[4];?>" title="Accéder à mon twitter">Twitter</a>

      <a class="contact__link contact__link--facebook" href="<?php echo $aside[5];?>" title="Accéder à mon">Facebook</a>

      <a class="contact__link contact__link--insta" href="<?php echo $aside[6];?>" title="Accéder à mon Instagram">Instagram</a>

      <p class="contact__email">Mon email&nbsp;:&nbsp;
        <a class="contact__link contact__link--mail" href="mailto:<?php echo $aside[10];?>" title="M'envoyez un email avec votre gestionnaire de Mail"><?php echo $aside[10];?></a>
      </p>

    </div>
    <a class="latest__button" href="#haut" title="Prendre l'ascenseur pour remonter en haut de la page">Haut de page</a>
  </section>

</div>
</footer>
<script src="<?php echo get_template_directory_uri().'/scripts/jquery-2.2.1.min.js';?>"></script>
<script src="<?php echo get_template_directory_uri().'/scripts/scrollreveal.min.js';?>"></script>
<script>
window.sr = ScrollReveal();
sr.reveal('.apparition', {delay:300,opacity:0,mobile:true});
sr.reveal('#deplacement', { delay: 300,duration:600,origin:'left',distance:'50%',mobile:false});
sr.reveal('.scale',{delay:300,scale:'1',mobile:false});
</script>
</body>
</html>
