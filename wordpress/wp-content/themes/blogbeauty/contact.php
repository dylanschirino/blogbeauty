<?php
/*
Template Name: Contact
*/
get_header();
?>

<nav class="header__menu">
  <h2 aria-level="2" class="menu__title hidden">Navigation Principale</h2>
  <div class="menu__container">
  <a class="menu__link" href="<?php the_permalink('6');?>" title="Vers la page d'accueil">Accueil</a>

  <div class="menu__drophover">
  <a class="menu__link menu__link--categories" href="<?php the_permalink('39');?>" title="Vers la page des catégories">
    Catégories
  </a>
  <ul class="menu__dropdown">
    <li class="menu__element"><a href="<?php echo get_category_link('1'); ?>" class="menu__sublink menu__sublink--makeup" title="Vers la catégorie Maquillage">Maquillages</a></li>
    <li class="menu__element"><a href="<?php echo get_category_link('2'); ?>" class="menu__sublink menu__sublink--nail" title="Vers la catégorie Ongles">Ongles</a></li>
    <li class="menu__element"><a href="<?php echo get_category_link('3'); ?>" class="menu__sublink menu__sublink--hair" title="Vers la catégorie Coiffure">Coiffure</a></li>
    <li class="menu__element"><a href="<?php echo get_category_link('4'); ?>" class="menu__sublink menu__sublink--mode" title="Vers la catégorie Mode">Mode</a></li>
    <li class="menu__element"><a href="<?php echo get_category_link('5'); ?>" class="menu__sublink menu__sublink--lifestyle" title="Vers la catégorie Lifestyle">Lifestyle</a></li>
  </ul>
</div>
  <a class="menu__link menu__link--active" href="<?php the_permalink();?>" title="Vers la page de Contact">Contact</a>

  <a class="menu__link" href="<?php the_permalink('48');?>" title="Vers la page à propos">À Propos</a>

  <?php get_search_form(); ?>
</div>
</nav>
</header>

  <div class="margin">
      <?php get_sidebar();?>
    </aside>
    <main>


      <section class="contact">
        <svg class="contact__img" width="111" height="163" viewBox="0 0 111 163" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>
            Miroir
          </title>
          <defs>
            <path id="a" d="M.46 38.134c0 20.893 16.696 37.83 37.29 37.83 20.594 0 37.288-16.937 37.288-37.83C75.038 17.24 58.344.3 37.75.3 17.157.3.46 17.24.46 38.135z"/>
            <path id="c" d="M.46 38.134c0 20.893 16.696 37.83 37.29 37.83 20.594 0 37.288-16.937 37.288-37.83C75.038 17.24 58.344.3 37.75.3 17.157.3.46 17.24.46 38.135z"/>
            <path id="e" d="M.46 38.134c0 20.893 16.696 37.83 37.29 37.83 20.594 0 37.288-16.937 37.288-37.83C75.038 17.24 58.344.3 37.75.3 17.157.3.46 17.24.46 38.135z"/>
          </defs>
          <g fill="none" fill-rule="evenodd">
            <path d="M.05 43.3h105.664c2.857 0 5.174 2.067 5.174 4.617s-2.317 4.616-5.174 4.616H.05" fill="#E1A99E"/>
            <path d="M9.378 45.46C9.378 20.695 29.165.622 53.573.622S97.767 20.695 97.767 45.46c0 24.762-19.786 44.836-44.194 44.836S9.378 70.222 9.378 45.46" fill="#E1A99E"/>
            <path d="M.402 52.437h4.142c0 25.327 21.84 45.93 48.683 45.93 26.844 0 48.683-20.603 48.683-45.93h4.143c0 27.51-23.697 49.89-52.826 49.89-29.128 0-52.825-22.38-52.825-49.89" fill="#C3BAB2"/>
            <path d="M16.284 45.46c0-20.894 16.694-37.832 37.29-37.832 20.593 0 37.287 16.938 37.287 37.832 0 20.893-16.693 37.83-37.286 37.83-20.596 0-37.29-16.937-37.29-37.83" fill="#E1EFEF"/>
            <g>
              <g transform="translate(15.823 7.326)">
                <mask id="b" fill="#fff">
                  <use xlink:href="#a"/>
                </mask>
                <path d="M-7.136 40.26L48.798-9.2l10.358 7.914-64.22 54.74-2.072-13.19z" fill="#F6F8F8" mask="url(#b)"/>
              </g>
              <g transform="translate(15.823 7.326)">
                <mask id="d" fill="#fff">
                  <use xlink:href="#c"/>
                </mask>
                <path d="M1.842 57.408l60.766-53.42 4.834 3.957-62.148 54.74-3.452-5.277z" fill="#F6F8F8" mask="url(#d)"/>
              </g>
              <g transform="translate(15.823 7.326)">
                <mask id="f" fill="#fff">
                  <use xlink:href="#e"/>
                </mask>
                <path d="M10.128 65.322l60.767-53.42 2.762 1.978-62.15 54.74-1.38-3.298z" fill="#F6F8F8" mask="url(#f)"/>
              </g>
            </g>
            <g fill="#E1A99E">
              <path d="M57.025 148.49H46.668V87.816h10.357v60.672z"/>
              <path d="M24.57 163c0-9.835 8.347-17.807 18.645-17.807H61.17c10.296 0 18.643 7.972 18.643 17.807"/>
            </g>
          </g>
        </svg>
        <h2 aria-level="2" class="contact__title">
          <?php echo the_field('contact_title');?>
        </h2>
        <p class="contact__subtitle">
          <?php echo the_field('contact_subtitle');?>
        </p>
        <p class="contact__explain">
          <?php echo the_field('contact_description');?>
        </p>
      </section>

      <section class="form">
        <h2 class="formulaire__title hidden" aria-level="2">
          Formulaire de Contact
        </h2>

        <div class="formulaire__container">
              <?php echo do_shortcode( '[contact-form-7 id="61" title="Contact"]' ); ?>
        </div>
      </section>
  <section class="instagram">
    <h3 class="instagram__title" aria-level="3">
      J'instagram tout ce qui bouge
    </h3>
    <?php echo do_shortcode('[jr_instagram id="2"]');?>
  </section>

</main>
  </div>
<?php get_footer();?>
