<?php
/*
Template Name: HomePage
*/;?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <meta charset="utf-8">
  <meta name="description" content="Blog Beauté de ShowYourGlitters">
  <meta name="author" content="ShowYourGlitters">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/styles.css';?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri().'img/favicon.png';?>">
  <title><?php bloginfo();?>-<?php the_title();?></title>
</head>
<body id="haut">
  <header class="header">
    <div class="header__banner">
      <h1 aria-level="1" class="header__title" id="deplacement">
        <?php echo bloginfo('name');?>
      </h1>
      <p class="header__subtitle">
        <?php echo bloginfo('description');?>
      </p>
    </div>
    <?php
/*WP query global pour charger les 2 derniers post*/
if(is_page()){
  query_posts([
    'posts_per_page' =>1,
    'orderby' => 'date',
    'order' => 'ASC',
    'post_type' => 'post'
  ]);
}
?>

<nav class="header__menu">
  <h2 aria-level="2" class="menu__title hidden">Navigation Principale</h2>
  <div class="menu__container">
    <label for="show-menu" class="menu__show"><span class="hidden">Menu</span></label>
    <input type="checkbox" id="show-menu" class="menu__hamburger">
    <div class="menu__burger">
    <a class="menu__link menu__link--active" href="<?php the_permalink();?>" title="Vers la page d'accueil">Accueil</a>
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

    <a class="menu__link" href="<?php the_permalink('48');?>" title="Vers la page à propos">À Propos</a>
  </div>
      <?php get_search_form(); ?>

  </div>
</nav>
</header>


<div class="margin">
  <div class="sidebar__off">
  <?php get_sidebar();?>
  <div class="apparition">
  <svg width="114px" height="74px" viewBox="0 0 114 74" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <rect id="path-1" x="0" y="0" width="671.280765" height="599"></rect>
      <path id="path-3" d="M79.9663211,62.969875 L93.7275768,39.08475 C94.9023181,36.98825 93.979307,34.367625 91.6298244,33.2445 L20.9775239,0.8985 C19.4671422,0.224625 17.7050302,0.2995 16.3624686,1.04825 C15.6072778,1.422625 14.935997,2.021625 14.5164465,2.770375 L0.75519086,26.6555 C0.335640382,27.40425 0.167820191,28.227875 0.251730287,29.0515 C0.419550478,30.474125 1.34256153,31.821875 2.85294325,32.49575 L73.5052437,64.84175 C75.7708163,65.964875 78.7076697,65.14125 79.9663211,62.969875 L79.9663211,62.969875 Z"></path>
      <path id="path-5" d="M79.9663211,62.969875 L93.7275768,39.08475 C94.9023181,36.98825 93.979307,34.367625 91.6298244,33.2445 L20.9775239,0.8985 C19.4671422,0.224625 17.7050302,0.2995 16.3624686,1.04825 C15.6072778,1.422625 14.935997,2.021625 14.5164465,2.770375 L0.75519086,26.6555 C0.335640382,27.40425 0.167820191,28.227875 0.251730287,29.0515 C0.419550478,30.474125 1.34256153,31.821875 2.85294325,32.49575 L73.5052437,64.84175 C75.7708163,65.964875 78.7076697,65.14125 79.9663211,62.969875 L79.9663211,62.969875 Z"></path>
    </defs>
    <g id="Accueil" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g id="Desktop" transform="translate(-640.000000, -1325.000000)">
        <g id="Découvrez-plus" transform="translate(51.000000, 1040.000000)">
          <g id="Décoration">
            <g id="Groupe">
              <g id="Objects_1_">
                <g id="Clippede" transform="translate(31.187575, 0.000000)">
                  <mask id="mask-2" fill="white">
                    <use xlink:href="#path-1"></use>
                  </mask>
                  <g id="SVGID_9_"></g>
                  <g id="Group" mask="url(#mask-2)">
                    <g transform="translate(558.000000, 285.000000)">
                      <g transform="translate(60.000000, 19.000000)">
                        <g transform="translate(0.417404, 0.741250)" id="Clipped">
                          <g>
                            <mask id="mask-4" fill="white">
                              <use xlink:href="#path-3"></use>
                            </mask>
                            <g id="XMLID_400_"></g>
                            <path d="M6.29325717,13.32775 L90.8746335,53.685375 L100.943845,29.0515 L34.4031392,-2.470875 L11.9152336,-7.4875 L6.29325717,13.32775 Z" id="Shaped" fill="#000000" mask="url(#mask-4)"></path>
                          </g>
                        </g>
                      </g>
                      <g transform="translate(0.002136, 0.273750)">
                        <g>
                          <path d="M30.0398142,1.94675 C30.0398142,1.94675 29.9559041,1.94675 30.0398142,1.94675 C31.2984657,3.369375 29.7880839,5.99 22.3200854,9.958375 C12.6704244,15.049875 6.04152688,15.648875 2.76903315,14.82525 C7.97145908,17.22125 26.7673205,25.90675 35.3261502,29.95 L46.7379232,10.108125 C40.6963964,6.963375 32.2214767,2.6955 30.0398142,1.94675 L30.0398142,1.94675 Z" id="Shapea" fill="#E4A1A8"></path>
                          <path d="M47.9126646,8.011625 L46.7379232,10.03325 L35.3261502,29.875125 L34.0674988,32.121375 L49.6747766,39.309375 L63.6038524,15.199625 L47.9126646,8.011625 Z" id="Shapae" fill="#D0D2D3"></path>
                          <path d="M56.8910448,42.454125 L70.6523005,18.569 C71.071851,17.82025 71.7431317,17.22125 72.4983226,16.846875 L64.6946837,13.252875 L63.6038524,15.199625 L49.7586867,39.38425 L48.6678554,41.331 L56.4714943,44.925 C56.3036741,44.0265 56.4714943,43.202875 56.8910448,42.454125 L56.8910448,42.454125 Z" id="Shapeda" fill="#A6A8AB"></path>
                          <g transform="translate(56.219764, 15.723750)">
                            <g id="XMLID_397a_-link" fill="#A2CAA5">
                              <path d="M79.9663211,62.969875 L93.7275768,39.08475 C94.9023181,36.98825 93.979307,34.367625 91.6298244,33.2445 L20.9775239,0.8985 C19.4671422,0.224625 17.7050302,0.2995 16.3624686,1.04825 C15.6072778,1.422625 14.935997,2.021625 14.5164465,2.770375 L0.75519086,26.6555 C0.335640382,27.40425 0.167820191,28.227875 0.251730287,29.0515 C0.419550478,30.474125 1.34256153,31.821875 2.85294325,32.49575 L73.5052437,64.84175 C75.7708163,65.964875 78.7076697,65.14125 79.9663211,62.969875 L79.9663211,62.969875 Z" id="XMLID_397d_"></path>
                            </g>
                            <g id="Clippeda">
                              <mask id="mask-6" fill="white">
                                <use xlink:href="#path-5"></use>
                              </mask>
                              <g id="XMLID_397x_"></g>
                              <path d="M6.29325717,13.32775 L90.8746335,53.685375 L100.943845,29.0515 L34.4031392,-2.470875 L11.9152336,-7.4875 L6.29325717,13.32775 Z" id="Shapce" fill="#799B7B" mask="url(#mask-6)"></path>
                            </g>
                          </g>
                          <path d="M22.2361753,9.958375 C29.7880839,5.99 31.2145556,3.44425 29.9559041,1.94675 C28.948983,0.74875 26.0960397,0.2995 23.0752763,0.374375 C15.0199071,0.673875 -0.923011051,9.509125 0.335640382,13.178 C0.587370669,13.851875 1.34256153,14.450875 2.68512306,14.750375 C6.04152688,15.648875 12.5865143,15.049875 22.2361753,9.958375 L22.2361753,9.958375 Z" id="Shapex" fill="#C67581"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </g>
          </g>
        </g>
      </g>
    </g>
  </svg>
</div>
</aside>
</div>
<main id="content">
  <section class="article">
    <h2 aria-level="2" class="article__title hidden">
      Article
    </h2>
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <article class="article__latest">
      <figure class="latest__imgcontainer">
        <?php $image_article = get_field('article__image');            $article__imagesize='thumb-bigimage';?>
        <a href="<?php the_permalink(); ?>" title="Accéder à la fiche de l'article">
        <?php echo wp_get_attachment_image( $image_article['id'], $article__imagesize );?>
      </a>
      </figure>
      <div class="article__share">
        <?php echo share_button($content);?>
      </div>
      <div class="latest__container">

        <h3 aria-level="3" class="latest__title">
          <?php echo the_title();?>
        </h3>
        <ul class="latest__list">
          <li class="latest__element">
            Catégorie(s)&nbsp;:&nbsp;
            <ul class="list__sublist">
              <li class="sublist__element">
                <?php the_category( ', ' ); ?>
              </li>
            </ul>
          </li>
          <li class="latest__element latest__element--time">
            <?php echo the_field('article__date');?>
          </li>
          <li class="latest__element latest__element--like">
            <?php echo do_shortcode('[dot_recommends]');?>
          </li>
        </ul>
      <p class="latest__text">
      <?php echo substr(get_field('resume'), 0,500).'...'; ?>
    </p>

        <a class="latest__button" href=" <?php the_permalink(); ?> " title="Découvrir plus sur cette article">
          Lire l'article
        </a>
      </div>
    </article>
    <?php endwhile; endif;?>

    <?php wp_reset_query();?>
    <div class="apparition">
    <svg class="article__decoration" width="652" height="162" viewBox="0 0 652 162" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <defs>
        <path id="a" d="M0 0h671.28v599H0z"/>
        <path id="c" d="M67.46 11.38c1.77-2.25 3.1-7.04 2.1-7.7L64.78.6c-1-.67-5.8 2.1-7.55 4.2L55.2 3.5 1.5 70.02c-1.42 1.7-1.25 3.96.35 5l8.4 5.4c1.58 1.04 4 .44 5.44-1.35l53.7-66.5-1.94-1.2z"/>
      </defs>
      <g fill="none" fill-rule="evenodd">
        <g transform="translate(-20.157)">
          <mask id="b" fill="#fff">
            <use xlink:href="#a"/>
          </mask>
          <g mask="url(#b)">
            <path d="M612.3 122.8c40.6-20.52 66.2-48.67 57.13-62.9L665 52.86c9.05 14.23-16.54 42.38-57.16 62.9-40.6 20.5-80.8 25.6-89.86 11.38l4.44 7.04c9.07 14.22 49.34 9.13 89.87-11.38z" fill="#E1A99E"/>
            <path d="M607.84 115.83c40.62-20.5 66.2-48.67 57.15-62.9-9.07-14.22-49.27-9.13-89.88 11.4-40.6 20.5-66.2 48.66-57.14 62.88 9.06 14.16 49.34 9.07 89.86-11.37zm-30.7-48.52c35.74-18.03 71.23-22.52 79.2-10.02 7.98 12.58-14.6 37.36-50.34 55.4-35.75 18.05-71.24 22.54-79.2 10.04-7.98-12.5 14.5-37.36 50.33-55.4z" fill="#C77083"/>
            <path d="M526.7 122.72c7.98 12.58 43.4 8.1 79.2-10.03 35.76-18.06 58.33-42.92 50.36-55.42-7.97-12.58-43.38-8.1-79.2 10.03-35.76 18.06-58.24 42.92-50.36 55.42zm123.1-66.7c.17.3.42.66.5 1.03.25.3.6.68.76 1.05 7.05 11.08-14.35 33.7-47.75 50.54-33.38 16.85-66.1 21.57-73.16 10.5-.25-.4-.42-.76-.58-1.14-.26-.3-.5-.6-.67-.9-6.3-9.95 15.68-31.67 49-48.5 33.4-16.86 65.6-22.48 71.9-12.6z" fill="#E1A99E"/>
            <g>
              <path d="M600.7 104.53c-32.3 16.32-63.42 22.08-71.14 13.47.16.38.33.75.58 1.13 7.05 11.08 39.78 6.36 73.17-10.5 33.4-16.83 54.72-39.45 47.76-50.53-.25-.37-.5-.67-.76-1.05 4.28 10.34-17.28 31.15-49.6 47.48z" fill="#FBB662"/>
              <path d="M528.9 117.1c.15.3.4.6.66.9 7.72 8.6 38.85 2.85 71.15-13.47 32.32-16.33 53.88-37.14 49.6-47.48-.16-.37-.33-.67-.5-1.04-6.3-9.95-38.43-4.34-71.83 12.6-33.4 16.83-55.38 38.55-49.08 48.5z" fill="#FFD485"/>
            </g>
            <g>
              <path d="M603.57-27.03c-20.4-32.2-66.2-43.5-102.3-25.3-36.07 18.26-48.83 59.07-28.35 91.27 20.47 32.2 66.2 43.5 102.28 25.3 36.1-18.2 48.76-59.07 28.37-91.27zm-32.73 84.38c-31.8 16.1-72.16 6.07-90.2-22.3-18.04-28.4-6.8-64.4 25-80.5 31.8-16.1 72.16-6.06 90.2 22.3 17.96 28.4 6.8 64.48-25 80.5z" fill="#E1A99E"/>
              <path d="M505.64-45.45c-31.8 16.1-42.96 52.1-25 80.5 18.04 28.37 58.4 38.33 90.2 22.3 31.8-16.02 42.96-52.1 24.92-80.5-17.96-28.36-58.32-38.32-90.12-22.3zm63.02 99.36c-16.1 8.17-34.57 9.07-50.77 4.05-1.43-.45-2.86-.97-4.2-1.5-.25-.07-.5-.22-.84-.3-1.26-.52-2.43-1.04-3.6-1.57-.5-.22-1.02-.52-1.52-.74-1-.53-2-.98-2.94-1.58-.84-.45-1.6-.97-2.35-1.42-5.8-3.67-10.9-8.24-15.1-13.7-1-1.27-1.93-2.62-2.85-4.05-.84-1.28-1.5-2.63-2.18-3.9-9.32-17.82-7.05-38.19 4.6-53.76.1-.15.26-.3.35-.45 1.1-1.43 2.26-2.78 3.44-4.13l1.26-1.34c4.45-4.5 9.65-8.4 15.86-11.53 1.6-.83 3.28-1.58 4.95-2.25l1.77-.68 3.27-1.12 2.1-.67c1.52-.45 3.03-.83 4.54-1.13 25.93-5.24 53.62 4.87 67.38 26.6 16.95 26.57 6.46 60.18-23.16 75.16z" fill="#C77083"/>
              <path d="M524.52-47.77L517.9 57.88c16.2 5 34.65 4.12 50.76-4.04 29.62-14.9 40.1-48.52 23.24-75.03-13.68-21.63-41.45-31.8-67.38-26.57zM506.73-41.33c.34-.23.67-.45 1.1-.6-6.13 3.07-11.42 7.04-15.87 11.53.6-.6 1.26-1.27 1.93-1.87l-3.53 73c-1-1.12-2-2.32-3.02-3.52 4.2 5.48 9.3 10.05 15.1 13.7-.67-.43-1.42-.8-2.1-1.33l6.38-90.9zM485-21.86c.6-.9 1.26-1.8 1.93-2.7C475.35-9 473 11.38 482.33 29.2c-.52-1.05-1.02-2.1-1.53-3.22l4.2-47.84z" fill="#D3E8EF"/>
              <path d="M493.9-32.35c-.68.6-1.26 1.28-1.94 1.88-.4.45-.83.9-1.25 1.34-1.25 1.35-2.43 2.7-3.43 4.12-.1.14-.26.3-.34.44-.67.9-1.26 1.8-1.93 2.7l-4.2 47.84 1.52 3.22c.67 1.35 1.34 2.62 2.18 3.9.92 1.42 1.84 2.7 2.85 4.04.92 1.2 1.93 2.4 3.02 3.52l3.52-73zM524.52-47.77c-1.5.3-3.02.67-4.53 1.12-.76.23-1.44.45-2.1.68l-3.28 1.12-1.76.67c-1.68.68-3.36 1.43-4.95 2.25-.33.22-.66.45-1.08.6l-6.38 90.82c.67.44 1.43.9 2.1 1.34.75.52 1.5.97 2.35 1.42.9.53 1.92 1.05 2.92 1.58.5.22 1 .52 1.5.74 1.2.53 2.45 1.13 3.62 1.58.25.07.5.22.84.3 1.43.52 2.77 1.04 4.2 1.5l6.54-105.73z" fill="#FFF"/>
            </g>
          </g>
        </g>
        <path d="M41.1 153.1c-16.7 4.33-34.14-4.28-39-19.18-4.88-14.9 4.77-30.48 21.47-34.82l251.98-65.14c16.7-4.34 34.15 4.27 39.02 19.17 4.87 14.9-4.78 30.47-21.48 34.8l-252 65.16z" fill="#404041"/>
        <g transform="translate(10.648 107.338)">
          <ellipse fill="#FACEC6" cx="21.73" cy="18.79" rx="20.98" ry="18.72"/>
          <path d="M27.52 36.76c-11.16 2.85-22.74-2.84-26-12.8C-1.77 14 4.7 3.66 15.85.76l11.66 36z" opacity=".1" fill="#231F20"/>
        </g>
        <g transform="translate(60.994 93.86)">
          <ellipse fill="#FBC6A2" cx="21.73" cy="19.17" rx="20.98" ry="18.72"/>
          <path d="M27.6 37.2c-11.15 2.86-22.73-2.83-26-12.8-3.2-9.95 3.18-20.28 14.34-23.2l11.67 36z" opacity=".1" fill="#231F20"/>
        </g>
        <g transform="translate(111.34 81.13)">
          <ellipse fill="#FDCE99" cx="21.82" cy="18.87" rx="20.98" ry="18.72"/>
          <path d="M27.6 36.84C16.46 39.68 4.88 34 1.6 24.04-1.6 14.07 4.77 3.73 15.93.8L27.6 36.84z" opacity=".1" fill="#231F20"/>
        </g>
        <g transform="translate(162.525 67.654)">
          <ellipse fill="#D6A477" cx="20.98" cy="19.32" rx="20.98" ry="18.72"/>
          <path d="M26.85 37.3C15.7 40.12 4.1 34.43.85 24.47c-3.2-9.95 3.18-20.3 14.34-23.2l11.65 36z" opacity=".1" fill="#231F20"/>
        </g>
        <g transform="translate(212.87 54.925)">
          <ellipse fill="#B99664" cx="21.06" cy="19.02" rx="20.98" ry="18.72"/>
          <path d="M26.85 37C15.7 39.82 4.1 34.13.85 24.17c-3.2-9.95 3.18-20.3 14.34-23.2l11.65 36z" opacity=".1" fill="#231F20"/>
        </g>
        <g transform="translate(263.217 42.196)">
          <ellipse fill="#967348" cx="21.06" cy="18.72" rx="20.98" ry="18.72"/>
          <path d="M26.94 36.7C15.78 39.52 4.2 33.83.92 23.9-2.35 13.92 4.12 3.6 15.27.66L26.94 36.7z" opacity=".1" fill="#231F20"/>
        </g>
        <g>
          <path d="M356.63 155.9c2.85.1 7.52-1.63 7.47-2.84l-.33-5.68c-.04-1.2-5.1-3.45-7.83-3.64l-.15-2.38-85.37-4.37c-2.23-.15-3.95 1.3-3.86 3.2l.57 9.97c.1 1.9 2 3.52 4.3 3.62l85.36 4.36-.17-2.27z" fill="#E1A99E"/>
          <g transform="rotate(54 70.238 367.397)">
            <mask id="d" fill="#fff">
              <use xlink:href="#c"/>
            </mask>
            <path d="M74.1-7.7L2.5 82.43l29.45 2.7L83.67 2.9 74.08-7.7" fill="#C77083" mask="url(#d)"/>
          </g>
          <g>
            <path d="M364.08 152.14l92.3 4.72c2.95.13 6.67-.6 6.6-1.7-.1-1.17-3.97-2.3-6.87-2.47l-92.27-4.74.25 4.18z" fill="#404041"/>
            <path d="M423 151l.25 4.2-6.4-.34-.24-4.2 6.4.33z" fill="#E4A1A8"/>
            <g fill="#333">
              <path d="M458.04 159.8l-.58-10.47c-.48-.28-.97-.44-1.5-.67l.7 11.52c.4-.08.9-.25 1.38-.38zM460.55 158.8l-.42-8.1c-.48-.27-.96-.55-1.5-.78l.5 9.5c.47-.14.95-.38 1.42-.62zM463.05 157.4l-.3-4.87c-.46-.38-1-.73-1.52-1.07l.44 6.84c.47-.24.95-.6 1.38-.9zM455.04 160.52l-.66-12.38-1.45-.1.74 12.75c.45-.02.9-.15 1.37-.28zM452.06 161.13c-.1-.02-.22-.05-.28 0h.28z"/>
              <path d="M452.12 161.1l-.7-13.1-1.46-.07.76 13.14 1.17.08s.1-.1.22-.06zM447.64 160.93l-.75-13.17 1.48.08.74 13.17-1.48-.07zM444.6 160.73l-.75-13.17 1.48.08.75 13.17-1.48-.07zM441.56 160.6l-.74-13.16 1.48.07.75 13.18-1.5-.07zM438.6 160.5l-.75-13.18 1.5.07.73 13.16-1.48-.07zM434.84 147.14l1.5.08.73 13.17-1.48-.1-.76-13.16zM433.3 147.06l.76 13.17-1.48-.07-.75-13.17 1.48.06zM430.25 146.95l.75 13.17-1.48-.07-.75-13.17 1.48.07zM427.26 146.77l.75 13.17-1.47-.08-.75-13.17 1.48.07zM424.2 146.58l.75 13.17-1.5-.08-.73-13.17 1.48.08z"/>
            </g>
          </g>
        </g>
      </g>
    </svg>
  </div>
  </section>

<section class="moreArticle">
  <?php if(is_page()){
    query_posts([
      'posts_per_page' =>3,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'post',
      'paged'=>get_query_var('page')
    ]);
  };
  ?>
  <h3 aria-level="3" class="moreArticle__title">
    <?php echo the_field('more_title');?>
  </h3>
  <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
  <article class="moreArticle__article">
    <figure class="moreArticle__link">
      <?php the_post_thumbnail($size='post-thumbnail');?>
    </figure>
    <div class="moreArticle__container">
      <?php $categorie = get_the_category();?>
      <span class="moreArticle__theme moreArticle__theme--<?php echo ($categorie[0]->name);?>">
        <?php echo ($categorie[0]->name);?>
      </span>
      <p class="moreArticle__text">
        <?php echo substr(get_field('resume'), 0,90).'...'; ?>
      </p>
      <a class="moreArticle__button latest__button" href="<?php the_permalink();?>" title="Découvrir plus sur cette article">
        Lire l'article
      </a>
    </div>

    <h4 aria-level="4" class="moreArticle__titleCards"><?php echo the_title();?></h4>
    <ul class="moreArticle__list">
      <li class="moreArticle__element latest__element--time">
        <?php echo the_field('article__date');?>
      </li>
      <li class="moreArticle__element latest__element--like">
        <?php echo do_shortcode('[dot_recommends]');?>
      </li>
      <li class="moreArticle__element moreArticle__element--comment">
        <?php comments_number('0', '1', '%'); ?>
      </li>
    </ul>
  </article>
<?php endwhile; endif;?>
  <div class="moreArticle__pagination">
    <?php  wp_pagenavi();?>
  </div>
</section>

<section class="instagram">
  <h3 class="instagram__title" aria-level="3">
    J'instagram tout ce qui bouge
  </h3>
  <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/60f1ff59c6745cc78c90529f8265a05b.html" class="instagram__slider" id="lightwidget_60f1ff59c6" name="lightwidget_60f1ff59c6"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
</section>
</main>
</div>
<?php get_footer();?>
