<?php
/*
Template Name: HomePage
*/
get_header();

/*WP query global pour charger les 2 derniers post*/
if(is_page()){
  query_posts([
    'posts_per_page' =>2,
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'post'
  ]);
}
?>

<nav class="header__menu">
  <h2 aria-level="2" class="menu__title hidden">Navigation Principale</h2>
  <div class="menu__container">
    <label for="show-menu" class="menu__show"><span class="hidden">Menu</span></label>
    <input type="checkbox" id="show-menu" class="menu__hamburger" role="button">
    <div class="menu__burger">
    <a class="menu__link menu__link--active" href="index.html" title="Vers la page d'accueil">Accueil</a>
    <div class="menu__drophover">
    <a class="menu__link menu__link--categories" href="categories.html" title="Vers la page des catégories">
      Catégories
    </a>
    <ul class="menu__dropdown">
      <li class="menu__element"><a href="#" class="menu__sublink menu__sublink--makeup" title="Vers la catégorie Maquillage">Maquillages</a></li>
      <li class="menu__element"><a href="#" class="menu__sublink menu__sublink--nail" title="Vers la catégorie Ongles">Ongles</a></li>
      <li class="menu__element"><a href="#" class="menu__sublink menu__sublink--hair" title="Vers la catégorie Coiffure">Coiffure</a></li>
      <li class="menu__element"><a href="#" class="menu__sublink menu__sublink--mode" title="Vers la catégorie Mode">Mode</a></li>
      <li class="menu__element"><a href="#" class="menu__sublink menu__sublink--lifestyle" title="Vers la catégorie Lifestyle">Lifestyle</a></li>
    </ul>
  </div>

    <a class="menu__link" href="contact.html" title="Vers la page de Contact">Contact</a>

    <a class="menu__link" href="about.html" title="Vers la page à propos">À Propos</a>
  </div>
    <form class="menu__form" action="#" method="post">
      <input class="form__input" type="text" placeholder="Recherche" value="">
      <input class="form__submit" type="submit" value="">
    </form>
  </div>
</nav>
</header>


<div class="margin">
  <?php get_sidebar();?>
  <svg width="114px" height="74px" viewBox="0 0 114 74" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <rect id="path-1" x="0" y="0" width="671.280765" height="599"></rect>
      <path id="path-3" d="M79.9663211,62.969875 L93.7275768,39.08475 C94.9023181,36.98825 93.979307,34.367625 91.6298244,33.2445 L20.9775239,0.8985 C19.4671422,0.224625 17.7050302,0.2995 16.3624686,1.04825 C15.6072778,1.422625 14.935997,2.021625 14.5164465,2.770375 L0.75519086,26.6555 C0.335640382,27.40425 0.167820191,28.227875 0.251730287,29.0515 C0.419550478,30.474125 1.34256153,31.821875 2.85294325,32.49575 L73.5052437,64.84175 C75.7708163,65.964875 78.7076697,65.14125 79.9663211,62.969875 L79.9663211,62.969875 Z"></path>
      <path id="path-5" d="M79.9663211,62.969875 L93.7275768,39.08475 C94.9023181,36.98825 93.979307,34.367625 91.6298244,33.2445 L20.9775239,0.8985 C19.4671422,0.224625 17.7050302,0.2995 16.3624686,1.04825 C15.6072778,1.422625 14.935997,2.021625 14.5164465,2.770375 L0.75519086,26.6555 C0.335640382,27.40425 0.167820191,28.227875 0.251730287,29.0515 C0.419550478,30.474125 1.34256153,31.821875 2.85294325,32.49575 L73.5052437,64.84175 C75.7708163,65.964875 78.7076697,65.14125 79.9663211,62.969875 L79.9663211,62.969875 Z"></path>
    </defs>
    <g id="Accueil" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
      <g id="Desktop" sketch:type="MSArtboardGroup" transform="translate(-640.000000, -1325.000000)">
        <g id="Découvrez-plus" sketch:type="MSLayerGroup" transform="translate(51.000000, 1040.000000)">
          <g id="Décoration">
            <g id="Group">
              <g id="Objects_1_">
                <g id="Clipped" transform="translate(31.187575, 0.000000)">
                  <mask id="mask-2" sketch:name="SVGID_9_" fill="white">
                    <use xlink:href="#path-1"></use>
                  </mask>
                  <g id="SVGID_9_"></g>
                  <g id="Group" mask="url(#mask-2)">
                    <g transform="translate(558.000000, 285.000000)">
                      <g transform="translate(60.000000, 19.000000)">
                        <g transform="translate(0.417404, 0.741250)" id="Clipped">
                          <g>
                            <mask id="mask-4" sketch:name="XMLID_400_" fill="white">
                              <use xlink:href="#path-3"></use>
                            </mask>
                            <g id="XMLID_400_"></g>
                            <path d="M6.29325717,13.32775 L90.8746335,53.685375 L100.943845,29.0515 L34.4031392,-2.470875 L11.9152336,-7.4875 L6.29325717,13.32775 Z" id="Shape" fill="#000000" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                          </g>
                        </g>
                      </g>
                      <g transform="translate(0.002136, 0.273750)">
                        <g>
                          <path d="M30.0398142,1.94675 C30.0398142,1.94675 29.9559041,1.94675 30.0398142,1.94675 C31.2984657,3.369375 29.7880839,5.99 22.3200854,9.958375 C12.6704244,15.049875 6.04152688,15.648875 2.76903315,14.82525 C7.97145908,17.22125 26.7673205,25.90675 35.3261502,29.95 L46.7379232,10.108125 C40.6963964,6.963375 32.2214767,2.6955 30.0398142,1.94675 L30.0398142,1.94675 Z" id="Shape" fill="#E4A1A8" sketch:type="MSShapeGroup"></path>
                          <path d="M47.9126646,8.011625 L46.7379232,10.03325 L35.3261502,29.875125 L34.0674988,32.121375 L49.6747766,39.309375 L63.6038524,15.199625 L47.9126646,8.011625 Z" id="Shape" fill="#D0D2D3" sketch:type="MSShapeGroup"></path>
                          <path d="M56.8910448,42.454125 L70.6523005,18.569 C71.071851,17.82025 71.7431317,17.22125 72.4983226,16.846875 L64.6946837,13.252875 L63.6038524,15.199625 L49.7586867,39.38425 L48.6678554,41.331 L56.4714943,44.925 C56.3036741,44.0265 56.4714943,43.202875 56.8910448,42.454125 L56.8910448,42.454125 Z" id="Shape" fill="#A6A8AB" sketch:type="MSShapeGroup"></path>
                          <g transform="translate(56.219764, 15.723750)">
                            <g id="XMLID_397_-link" fill="#A2CAA5" sketch:type="MSShapeGroup">
                              <path d="M79.9663211,62.969875 L93.7275768,39.08475 C94.9023181,36.98825 93.979307,34.367625 91.6298244,33.2445 L20.9775239,0.8985 C19.4671422,0.224625 17.7050302,0.2995 16.3624686,1.04825 C15.6072778,1.422625 14.935997,2.021625 14.5164465,2.770375 L0.75519086,26.6555 C0.335640382,27.40425 0.167820191,28.227875 0.251730287,29.0515 C0.419550478,30.474125 1.34256153,31.821875 2.85294325,32.49575 L73.5052437,64.84175 C75.7708163,65.964875 78.7076697,65.14125 79.9663211,62.969875 L79.9663211,62.969875 Z" id="XMLID_397_"></path>
                            </g>
                            <g id="Clipped">
                              <mask id="mask-6" sketch:name="XMLID_397_" fill="white">
                                <use xlink:href="#path-5"></use>
                              </mask>
                              <g id="XMLID_397_"></g>
                              <path d="M6.29325717,13.32775 L90.8746335,53.685375 L100.943845,29.0515 L34.4031392,-2.470875 L11.9152336,-7.4875 L6.29325717,13.32775 Z" id="Shape" fill="#799B7B" sketch:type="MSShapeGroup" mask="url(#mask-6)"></path>
                            </g>
                          </g>
                          <path d="M22.2361753,9.958375 C29.7880839,5.99 31.2145556,3.44425 29.9559041,1.94675 C28.948983,0.74875 26.0960397,0.2995 23.0752763,0.374375 C15.0199071,0.673875 -0.923011051,9.509125 0.335640382,13.178 C0.587370669,13.851875 1.34256153,14.450875 2.68512306,14.750375 C6.04152688,15.648875 12.5865143,15.049875 22.2361753,9.958375 L22.2361753,9.958375 Z" id="Shape" fill="#C67581" sketch:type="MSShapeGroup"></path>
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
</aside>
<main>
  <section class="article">
    <h2 aria-level="2" class="article__title hidden">
      Article
    </h2>
    <article class="article__latest">
      <figure class="latest__imgcontainer">

        <img class="imgcontainer__img" src="img/imgarticle.jpg" width="588" height="342" alt="Maquillage sur fond de rose">
      </figure>
      <div class="article__share">
        <ul class="share__list">
          <li class="share__element share__element--twitter">
            <a class="share__link share__link--twitter"href="#" title="Partager sur twitter"><span class="hidden">Twitter</span></a>
          </li>
          <li class="share__element share__element--facebook">
            <a class="share__link share__link--facebook" href="#" title="Partager sur facebook"><span class="hidden">Facebook</span></a>
          </li>
          <li class="share__element share__element--hellocoton">
            <a class="share__link share__link--hellocoton" href="#" title="Partager sur HelloCoton"><span class="hidden">HelloCoton</span></a>
          </li>
        </ul>
      </div>
      <div class="latest__container">

        <h3 aria-level="3" class="latest__title">
          Maybeline Color Drama
        </h3>
        <ul class="latest__list">
          <li class="latest__element">
            Catégorie&nbsp;:&nbsp;
            <ul class="list__sublist">
              <li class="sublist__element">
                Maquillage,&nbsp;
              </li>
              <li class="sublist__element">
                MakeUp
              </li>
            </ul>
          </li>
          <li class="latest__element latest__element--time">
            Le 2 Juillet 2016
          </li>
          <li class="latest__element latest__element--like">
            21
          </li>
        </ul>
        <p class="latest__text">
          Ma découverte de la marque Sleek Makeup date d’il y a quelques années avec un achat de pinceaux, mais à ce moment-là la marque n’était pas encore énormément connue en Belgique. Puis progressivement on en a entendu parler par- ci par-là et c’est arrivé à mes oreilles.
        </p>
        <p class="latest__text">
          Malheureusement les produits n’étaient pas fort accessibles en Belgique à part via des sites avec une livraison assez couteuse, puis un jour j’en ai trouvé dans un petit magasin à Liège....
        </p>
        <a class="latest__button" href="#" title="Découvrir plus sur cette article">
          Lire l'article
        </a>
      </div>
    </article>
    <img class="article__decoration" src="img/deco.svg" alt="Accessoire de maquillage">
  </section>

</div>

<section class="moreArticle">

  <h3 aria-level="3" class="moreArticle__title">
    Découvrez plus d'article
  </h3>
  <article class="moreArticle__article">
    <figure class="moreArticle__link">
      <img class="moreArticle__img" src="img/smallarticle.jpg">
    </figure>
    <div class="moreArticle__container">
      <span class="moreArticle__theme">
        Maquillage
      </span>
      <p class="moreArticle__text">
        Ma découverte de la marque Sleek Makeup date d’il y a quelques années avec un achat…
      </p>
      <a class="moreArticle__button latest__button" href="#" title="Découvrir plus sur cette article">
        Lire l'article
      </a>
    </div>

    <h4 aria-level="4" class="moreArticle__titleCards">Titre de l'article</h4>
    <ul class="moreArticle__list">
      <li class="moreArticle__element latest__element--time">
        Le 2 Juillet 2016
      </li>
      <li class="moreArticle__element latest__element--like">
        21
      </li>
      <li class="moreArticle__element moreArticle__element--comment">
        5
      </li>
    </ul>
  </article>

  <article class="moreArticle__article">
    <a href="#" class="moreArticle__link" title="Accéder à l'article">
      <img class="moreArticle__img" src="img/smallarticle.jpg">
    </a>
    <div class="moreArticle__container">
      <span class="moreArticle__theme">
        Maquillage
      </span>
      <p class="moreArticle__text">
        Ma découverte de la marque Sleek Makeup date d’il y a quelques années avec un achat…
      </p>
      <a class="moreArticle__button latest__button" href="#" title="Découvrir plus sur cette article">
        Lire l'article
      </a>
    </div>


    <h4 aria-level="4" class="moreArticle__titleCards">Titre de l'article</h4>
    <ul class="moreArticle__list">
      <li class="moreArticle__element latest__element--time">
        Le 2 Juillet 2016
      </li>
      <li class="moreArticle__element latest__element--like">
        21
      </li>
      <li class="moreArticle__element moreArticle__element--comment">
        5
      </li>
    </ul>
  </article>

  <article class="moreArticle__article">
    <a href="#" class="moreArticle__link" title="Accéder à l'article">
      <img class="moreArticle__img" src="img/smallarticle.jpg">
    </a>
    <div class="moreArticle__container">
      <span class="moreArticle__theme">
        Maquillage
      </span>
      <p class="moreArticle__text">
        Ma découverte de la marque Sleek Makeup date d’il y a quelques années avec un achat…
      </p>
      <a class="moreArticle__button latest__button" href="#" title="Découvrir plus sur cette article">
        Lire l'article
      </a>
    </div>
    <h4 aria-level="4" class="moreArticle__titleCards">Titre de l'article</h4>
    <ul class="moreArticle__list">
      <li class="moreArticle__element latest__element--time">
        Le 2 Juillet 2016
      </li>
      <li class="moreArticle__element latest__element--like">
        21
      </li>
      <li class="moreArticle__element moreArticle__element--comment">
        5
      </li>
    </ul>
  </article>

  <div class="moreArticle__pagination">
    <a class="pagination__link" href="#" title="Revenir a la page précédente">Précédent</a>
    <ul class="pagination__list">
      <li class="pagination__element">
        1
      </li>
      <li class="pagination__element">
        2
      </li>
      <li class="pagination__element">
        3
      </li>
      <li class="pagination__element">
        4
      </li>
      <li class="pagination__element">
        5
      </li>
    </ul>
    <a class="pagination__link" href="#" title="Aller à la page suivante">Suivant</a>
  </div>
</section>

<section class="instagram">
  <h3 class="instagram__title" aria-level="3">
    J'instagram tout ce qui bouge
  </h3>
  <?php echo do_shortcode('[jr_instagram id="2"]');?>
</section>

</main>

<?php get_footer();?>
