<?php
/*
Template Name: About
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
  <a class="menu__link" href="<?php the_permalink('51');?>" title="Vers la page de Contact">Contact</a>

  <a class="menu__link menu__link--active" href="<?php the_permalink();?>" title="Vers la page à propos">À Propos</a>

  <?php get_search_form(); ?>
</div>
</nav>
</header>

<main>
  <div class="margin">
<section class="whoami">
  <h2 aria-level="2" class="whoami__title">
      <?php echo the_field('about_title');?>
  </h2>
    <div class="whoami__imgContainer" id="apparition">
      <svg class="whoami__svg" width="739" height="94" viewBox="0 0 739 94" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <path id="a" d="M0 .002h225.555V94H0"/>
        <path id="c" d="M69 4.002h225.555V98H69V4.002z"/>
      </defs>
      <g fill="none" fill-rule="evenodd">
        <path d="M.5 92.5h738" stroke="#000" stroke-linecap="square"/>
        <path d="M252.763 16.994h12.4V0h-12.4v16.994z" fill="#FFF"/>
        <path d="M257.145 7.35c0-1.13.916-2.046 2.047-2.046 1.13 0 2.047.917 2.047 2.046 0 1.13-.917 2.047-2.048 2.047-1.13 0-2.047-.916-2.047-2.047" fill="#333"/>
        <g transform="translate(69)">
          <mask id="b" fill="#fff">
            <use xlink:href="#a"/>
          </mask>
          <path d="M171.52 94h39.182c8.972-6.217 14.853-16.582 14.853-28.324 0-19.024-15.422-34.444-34.443-34.444-19.024 0-34.446 15.42-34.446 34.444 0 11.742 5.88 22.107 14.854 28.324" fill="#FFF" mask="url(#b)"/>
        </g>
        <path d="M242.184 91.334h35.854c8.21-5.69 13.59-15.172 13.59-25.918 0-17.406-14.11-31.518-31.516-31.518-17.408 0-31.518 14.112-31.518 31.518 0 10.746 5.38 20.23 13.59 25.918" fill="#ECB7AC"/>
        <path d="M260.487 31.107c2.85 0 5.617.352 8.266 1.004V16.64h-18.37v15.975c3.194-.98 6.586-1.508 10.104-1.508" fill="gray"/>
        <path d="M135.968 89.268c0 1.656-1.344 2.998-3 2.998h-22c-1.657 0-3-1.342-3-2.998V60.602c0-1.658 1.343-3 3-3h22c1.656 0 3 1.342 3 3v28.666z" fill="#FFF"/>
        <path d="M134.634 87.903c0 1.498-1.215 2.713-2.715 2.713h-19.905c-1.498 0-2.714-1.215-2.714-2.713V61.967c0-1.5 1.217-2.714 2.715-2.714h19.904c1.5 0 2.714 1.214 2.714 2.714v25.936z" fill="#FC7A77"/>
        <path d="M127.634 57.602h-11.666v-1.334h11.666v1.334z" fill="#FFF"/>
        <path d="M120.55 56.87H129.574c0-17.576-3.52-34.2-3.52-34.2H117.356s-3.522 16.624-3.522 34.2h6.715z" fill="#4D4D4D"/>
        <path d="M180.636 89.268c0 1.656-1.344 2.998-3 2.998h-22c-1.657 0-3-1.342-3-2.998V60.602c0-1.658 1.343-3 3-3h22c1.656 0 3 1.342 3 3v28.666z" fill="#FFF"/>
        <path d="M179.3 87.903c0 1.498-1.214 2.713-2.714 2.713h-19.904c-1.497 0-2.713-1.215-2.713-2.713V61.967c0-1.5 1.215-2.714 2.713-2.714h19.904c1.5 0 2.715 1.214 2.715 2.714v25.936z" fill="#85C0CE"/>
        <path d="M172.3 57.602h-11.665v-1.334H172.3v1.334z" fill="#FFF"/>
        <path d="M165.218 56.87H174.24c0-17.576-3.522-34.2-3.522-34.2h-8.695s-3.523 16.624-3.523 34.2h6.715z" fill="#4D4D4D"/>
        <mask id="d" fill="#fff">
          <use xlink:href="#c"/>
        </mask>
        <path d="M201.085 36.768h-2.688V55.1h2.688V36.768z" fill="#85C0CE" mask="url(#d)"/>
        <path d="M198.39 37.008l-1.683-9.375 6.25.062-1.88 9.297" fill="#85C0CE" mask="url(#d)"/>
        <path d="M201.09 39.102h-2.704v-2.125h2.704v2.125z" fill="#65ACB7" mask="url(#d)"/>
        <path d="M200.694 55h-9.025c0 17.577 3.52 34.204 3.52 34.204h8.697S207.41 72.577 207.41 55h-6.716z" fill="#4D4D4D" mask="url(#d)"/>
        <path d="M80.635 46.823H70.528v-9.71h10.107v9.71z" fill="#FFF" mask="url(#d)"/>
        <path d="M81.253 39.982c0 .222-.183.402-.41.402H70.21c-.227 0-.41-.18-.41-.402 0-.222.183-.402.41-.402h10.633c.227 0 .41.18.41.402M81.253 41.593c0 .22-.183.4-.41.4l-10.634.002c-.227 0-.41-.18-.41-.402 0-.224.183-.403.41-.403h10.633c.227 0 .41.18.41.403M81.253 44.97c0 .224-.183.404-.41.404H70.21c-.227 0-.41-.18-.41-.403 0-.22.183-.4.41-.4h10.633c.227 0 .41.18.41.4" fill="#FFF" mask="url(#d)"/>
        <path d="M82.398 93.5H69V46.824h13.398V93.5z" fill="#EC9B6B" mask="url(#d)"/>
        <path d="M82.36 47H69.11V16.5h13.25V47z" fill="#4D4D4D" mask="url(#d)"/>
      </g>
    </svg>

  <?php $image_about = get_field('photo_de_fanny');            $about__imagesize='thumb-aboutimage';?>
  <?php echo wp_get_attachment_image( $image_about['id'], $about__imagesize );?>
</div>

<div class="whoami__col">
  <p class="whoaim__text whoaim__text--left">
    <?php echo the_field('description_de_fanny');?>
  </p>
</div>

  <img src ="<?php bloginfo('template_url');?>/img/signature.svg" class="whoami__signature" alt="ShowYourGlitters" width="220" height="66">
</section>
</div>
  <section class="instagram">
    <h3 class="instagram__title" aria-level="3">
      J'instagram tout ce qui bouge
    </h3>
      <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/60f1ff59c6745cc78c90529f8265a05b.html" class="instagram__slider" id="lightwidget_60f1ff59c6" name="lightwidget_60f1ff59c6"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
  </section>

</main>
<?php get_footer();?>
