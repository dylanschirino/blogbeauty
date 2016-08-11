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

  <form class="menu__form" action="#" method="post">
    <input class="form__input" type="text" placeholder="Recherche" value="">
    <input class="form__submit" type="submit" value="">
  </form>
</div>
</nav>
</header>

<main>
  <div class="margin">
<section class="whoami">
  <h2 aria-level="2" class="whoami__title">
      <?php echo the_field('about_title');?>
  </h2>
    <div class="whoami__imgContainer">
  <svg class="whoami__svg" width="739px" height="94px" viewBox="0 0 739 94" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
      <defs>
          <path id="path-1" d="M0,0.002 L225.555,0.002 L225.555,94 L0,94"></path>
          <path id="path-3" d="M69,4.002 L294.555,4.002 L294.555,98 L69,98 L69,4.002 Z"></path>
      </defs>
      <g id="À-propos" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
          <g id="Desktop" sketch:type="MSArtboardGroup" transform="translate(-100.000000, -465.000000)">
              <g id="MakeUp" sketch:type="MSLayerGroup" transform="translate(100.000000, 465.000000)">
                  <g id="Group-38">
                      <path d="M0.5,92.5 L738.5,92.5" id="Line" stroke="#000000" stroke-linecap="square" sketch:type="MSShapeGroup"></path>
                      <path d="M252.763,16.994 L265.163,16.994 L265.163,0.001 L252.763,0.001 L252.763,16.994 Z" id="Fill-1" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                      <path d="M257.1454,7.3496 C257.1454,6.2206 258.0614,5.3036 259.1924,5.3036 C260.3234,5.3036 261.2394,6.2206 261.2394,7.3496 C261.2394,8.4806 260.3234,9.3966 259.1924,9.3966 C258.0614,9.3966 257.1454,8.4806 257.1454,7.3496" id="Fill-2" fill="#333333" sketch:type="MSShapeGroup"></path>
                      <g id="Group-6" transform="translate(69.000000, 0.000000)">
                          <mask id="mask-2" sketch:name="Clip 5" fill="white">
                              <use xlink:href="#path-1"></use>
                          </mask>
                          <g id="Clip-5"></g>
                          <path d="M171.5204,94 L210.7024,94 C219.6744,87.783 225.5554,77.418 225.5554,65.676 C225.5554,46.652 210.1334,31.232 191.1124,31.232 C172.0884,31.232 156.6664,46.652 156.6664,65.676 C156.6664,77.418 162.5474,87.783 171.5204,94" id="Fill-4" fill="#FFFFFF" sketch:type="MSShapeGroup" mask="url(#mask-2)"></path>
                      </g>
                      <path d="M242.1844,91.334 L278.0384,91.334 C286.2484,85.645 291.6294,76.162 291.6294,65.416 C291.6294,48.01 277.5184,33.898 260.1124,33.898 C242.7044,33.898 228.5944,48.01 228.5944,65.416 C228.5944,76.162 233.9754,85.645 242.1844,91.334" id="Fill-7" fill="#ECB7AC" sketch:type="MSShapeGroup"></path>
                      <path d="M260.4872,31.1074 C263.3372,31.1074 266.1042,31.4594 268.7532,32.1114 L268.7532,16.6404 L250.3822,16.6404 L250.3822,32.6154 C253.5772,31.6364 256.9692,31.1074 260.4872,31.1074" id="Fill-9" fill="#808080" sketch:type="MSShapeGroup"></path>
                      <path d="M135.9675,89.2684 C135.9675,90.9244 134.6235,92.2664 132.9675,92.2664 L110.9675,92.2664 C109.3105,92.2664 107.9675,90.9244 107.9675,89.2684 L107.9675,60.6024 C107.9675,58.9444 109.3105,57.6024 110.9675,57.6024 L132.9675,57.6024 C134.6235,57.6024 135.9675,58.9444 135.9675,60.6024 L135.9675,89.2684 Z" id="Fill-11" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                      <path d="M134.6336,87.9032 C134.6336,89.4012 133.4186,90.6162 131.9186,90.6162 L112.0146,90.6162 C110.5166,90.6162 109.3006,89.4012 109.3006,87.9032 L109.3006,61.9672 C109.3006,60.4672 110.5166,59.2532 112.0146,59.2532 L131.9186,59.2532 C133.4186,59.2532 134.6336,60.4672 134.6336,61.9672 L134.6336,87.9032 Z" id="Fill-13" fill="#FC7A77" sketch:type="MSShapeGroup"></path>
                      <path d="M127.634,57.602 L115.968,57.602 L115.968,56.268 L127.634,56.268 L127.634,57.602 Z" id="Fill-15" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                      <path d="M120.5496,56.8699 L122.8586,56.8699 L129.5736,56.8699 C129.5736,39.2939 126.0526,22.6689 126.0526,22.6689 L122.6396,22.6689 L120.7686,22.6689 L117.3566,22.6689 C117.3566,22.6689 113.8346,39.2939 113.8346,56.8699 L120.5496,56.8699 Z" id="Fill-17" fill="#4D4D4D" sketch:type="MSShapeGroup"></path>
                      <path d="M180.6355,89.2684 C180.6355,90.9244 179.2915,92.2664 177.6355,92.2664 L155.6355,92.2664 C153.9785,92.2664 152.6355,90.9244 152.6355,89.2684 L152.6355,60.6024 C152.6355,58.9444 153.9785,57.6024 155.6355,57.6024 L177.6355,57.6024 C179.2915,57.6024 180.6355,58.9444 180.6355,60.6024 L180.6355,89.2684 Z" id="Fill-19" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                      <path d="M179.3015,87.9032 C179.3015,89.4012 178.0865,90.6162 176.5865,90.6162 L156.6825,90.6162 C155.1845,90.6162 153.9685,89.4012 153.9685,87.9032 L153.9685,61.9672 C153.9685,60.4672 155.1845,59.2532 156.6825,59.2532 L176.5865,59.2532 C178.0865,59.2532 179.3015,60.4672 179.3015,61.9672 L179.3015,87.9032 Z" id="Fill-21" fill="#85C0CE" sketch:type="MSShapeGroup"></path>
                      <path d="M172.301,57.602 L160.635,57.602 L160.635,56.268 L172.301,56.268 L172.301,57.602 Z" id="Fill-23" fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                      <path d="M165.2175,56.8699 L167.5275,56.8699 L174.2415,56.8699 C174.2415,39.2939 170.7205,22.6689 170.7205,22.6689 L167.3075,22.6689 L165.4365,22.6689 L162.0245,22.6689 C162.0245,22.6689 158.5025,39.2939 158.5025,56.8699 L165.2175,56.8699 Z" id="Fill-25" fill="#4D4D4D" sketch:type="MSShapeGroup"></path>
                      <mask id="mask-4" sketch:name="Clip 28" fill="white">
                          <use xlink:href="#path-3"></use>
                      </mask>
                      <g id="Clip-28"></g>
                      <path d="M201.085,36.768 L198.397,36.768 L198.397,55.1 L201.085,55.1 L201.085,36.768 Z" id="Fill-27" fill="#85C0CE" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                      <path d="M198.3904,37.0085 L196.7074,27.6335 L202.9574,27.6945 L201.0784,36.9925" id="Fill-29" fill="#85C0CE" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                      <path d="M201.09,39.102 L198.386,39.102 L198.386,36.977 L201.09,36.977 L201.09,39.102 Z" id="Fill-30" fill="#65ACB7" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                      <path d="M200.6941,55.0007 L198.3831,55.0007 L191.6691,55.0007 C191.6691,72.5767 195.1901,89.2037 195.1901,89.2037 L198.6031,89.2037 L200.4751,89.2037 L203.8871,89.2037 C203.8871,89.2037 207.4091,72.5767 207.4091,55.0007 L200.6941,55.0007 Z" id="Fill-31" fill="#4D4D4D" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                      <path d="M80.635,46.823 L70.528,46.823 L70.528,37.112 L80.635,37.112 L80.635,46.823 Z" id="Fill-32" fill="#FFFFFF" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                      <path d="M81.253,39.9822 C81.253,40.2042 81.07,40.3842 80.843,40.3842 L70.209,40.3842 C69.983,40.3842 69.8,40.2042 69.8,39.9822 C69.8,39.7602 69.983,39.5802 70.209,39.5802 L80.843,39.5802 C81.07,39.5802 81.253,39.7602 81.253,39.9822" id="Fill-33" fill="#FFFFFF" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                      <path d="M81.253,41.5925 C81.253,41.8145 81.07,41.9945 80.843,41.9945 L70.209,41.9945 C69.983,41.9945 69.8,41.8145 69.8,41.5925 C69.8,41.3695 69.983,41.1905 70.209,41.1905 L80.843,41.1905 C81.07,41.1905 81.253,41.3695 81.253,41.5925" id="Fill-34" fill="#FFFFFF" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                      <path d="M81.253,44.9714 C81.253,45.1944 81.07,45.3744 80.843,45.3744 L70.209,45.3744 C69.983,45.3744 69.8,45.1944 69.8,44.9714 C69.8,44.7494 69.983,44.5694 70.209,44.5694 L80.843,44.5694 C81.07,44.5694 81.253,44.7494 81.253,44.9714" id="Fill-35" fill="#FFFFFF" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                      <path d="M82.398,93.501 L69,93.501 L69,46.823 L82.398,46.823 L82.398,93.501 Z" id="Fill-36" fill="#EC9B6B" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                      <path d="M82.359,47.001 L69.109,47.001 L69.109,16.501 L82.359,16.501 L82.359,47.001 Z" id="Fill-37" fill="#4D4D4D" sketch:type="MSShapeGroup" mask="url(#mask-4)"></path>
                  </g>
              </g>
          </g>
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

  <span class="whoami__signature">
    ShowYourGlitters
  </span>
</section>
</div>
  <section class="instagram">
    <h3 class="instagram__title" aria-level="3">
      J'instagram tout ce qui bouge
    </h3>
    <?php echo do_shortcode('[jr_instagram id="2"]');?>
  </section>

</main>
<?php get_footer();?>