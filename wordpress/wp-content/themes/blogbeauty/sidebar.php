<?php
/*
Template Name: Aside
*/

$aside = get_option("easy_page_options");
$args = array(
  'smallest'                  => 16,
  'unit'                      =>'px',
  'number'                    => 12,
  'format'                    => 'flat',
  'separator'                 => "\n",
  'orderby'                   => 'name',
  'order'                     => 'ASC',
);
?>


<aside class="aside">
  <h2 aria-level="2" class="hidden">
    Information Complémentaire
  </h2>
  <section class="aside__section">
    <svg class="aside__sticker" width="160" height="50" viewBox="0 0 160 50" xmlns="http://www.w3.org/2000/svg">
      <title>
        Sticker
      </title>
      <g fill="none" fill-rule="evenodd">
        <path d="M160 31.667l-1-.715-1.125-.714.875-.952.875-.953v-.12l-1-.713-1.125-.714.875-.953 1-.952-1.125-.713-1.125-.715 1-.952.875-.952v-.12l-1.125-.714-1-.714.875-.952.875-.953-1.125-.714-1-.713.875-.953.875-.952v-.12l-1-.713-1.125-.716.875-.952 1-.833v-.12l-1.125-.715-1.125-.714 1-.95.875-.954v-.12l-1.125-.713-1-.714.875-.954.875-.833v-.12l-1.125-.713-1-.715.875-.952.875-.953-1-.833L155.25 0l-1.125.12L1.25 15.713l-.375.357-.875.954 1.125.833 1 .714-.875.835-.875.952v.12l1 .713 1.125.715-.875.952-.875.953 1 .714 1.125.833L2 26.19l-1 .953v.12l1.125.713 1.125.714-1 .953-.875.952 1.125.715 1 .714-.875.952-.875.953v.118l1 .714 1.125.714L3 36.43l-.875.95 1 .715 1.125.715-.875.952-1 .952v.12l1.125.714 1.125.714-1 .952-.875.953 1.125.714 1 .715-.875.953-.875.952v.12l1 .713 1.125.715L158.5 33.214l.625-.595.875-.953z" fill="#F1D4E2" opacity=".66"/>
        <g fill="#EF859E">
          <path d="M153.875 9.88l-5.25 5-15 14.287-5.25 4.88-2.625 2.62 2-.238.625-.716L134.5 30l21.125-20.12 2-1.904v-.12l-1-.594-2.75 2.62zM157.625 20.595L142.5 34.88l2-.118 14.125-13.572-.75-.476-.25-.12zM158.125 27.262l-7.25 6.786 2-.238 6.25-5.953-.5-.357-.5-.238zM128.375 12.62l-2.25 2.26L100.5 39.168l2-.12 17-16.19 8.875-8.57 4.75-4.406 1.375-1.31 7.5-7.14v-.12l-2 .238-8.625 8.333-3 2.74zM133.625 14.88l-5.25 4.882-19.5 18.57 2-.118L119.5 30l8.875-8.57 6.125-5.716 6.125-5.833 8.875-8.45 1-.954-2 .238-9.625 9.167-5.25 5zM141.125 14.88l-7.5 7.144-5.25 4.88L117.25 37.5l2-.238.25-.12 8.875-8.57 6.125-5.715L148.125 9.88l7-6.785.875-.952.875-.953-.75-.595-9.75 9.286-5.25 5zM157.125 13.93l-1 .95-22 20.834 2-.12 22-20.95-.875-.715h-.125zM43.625 22.024l-5.25 4.88-22 20.953 2-.238L29.5 37.142l8.875-8.572 6.125-5.713L58 9.88l-1.875.24-5 4.76-7.5 7.144zM43.625 29.167l-5.25 4.88-13.5 12.977 2-.238 2.625-2.5 8.875-8.572L44.5 30 65.625 9.88l.875-.832-2 .238-.625.595-5.25 5-15 14.287zM118.625 14.88l-26.5 25.24 2-.24 31.5-30 2.75-2.737 4.375-4.167.875-.833-2 .238-3.25 3.096-4.5 4.405-5.25 5zM66.125 14.88l-22.5 21.43-5.25 4.88-5.125 4.88 2-.118 3.125-3.095 6.125-5.714L73.125 9.88l1.75-1.666-2 .12-1.5 1.547-5.25 5zM73.625 14.88l-30 28.572-2 1.786 2-.12.875-.832L80.625 9.88l2.625-2.5-2 .12-2.375 2.38M81.125 14.88L50 44.406l2-.238L88.125 9.88l3.5-3.45-2 .237-3.25 3.214-5.25 5zM88.625 14.88L58.5 43.57l2-.237L95.625 9.88 100 5.596l-1.875.238-4.25 4.048-5.25 5zM96.125 14.88l-29.25 27.74 2-.12 34.25-32.62 5.375-5.118-2 .238-5.125 4.88-5.25 5zM103.625 14.88L75.25 41.787l2-.12 33.375-31.785 6.25-5.95-2 .237-6 5.714-5.25 5zM111.125 14.88l-27.5 26.072 2-.238 32.5-30.833 1.375-1.31 5.75-5.475-2 .12-6.875 6.666-5.25 5zM29.5 22.857l8.875-8.57 2.875-2.62-2 .12-.875.832-2.25 2.26L4.25 45.24l.625.357-.875.953-.875.952v.12l.25.118L29.5 22.858zM7.625 15l-1.125.12-.875.118-4.375 4.167-.875.952v.12l.875.594L7.625 15zM16.125 14.167H16l-1.875.238-.5.476L2.75 25.24l.125.12L2 26.19l-1 .953v.12l.75.475 14.375-13.57zM24.5 13.333l-2 .238-1.375 1.31L3.25 31.906l.25.12-.875.95-.875.954v.118l.625.357L24.5 13.333zM32.875 12.5l-2 .12-2.25 2.26L3.75 38.57l.5.24-.875.952-1 .952v.12l.5.237 30-28.57zM29.5 30l8.875-8.57 6.125-5.716 5.125-5-2 .238-4 3.93-5.25 4.88L8 48.69l2-.12L29.5 30z"/>
        </g>
      </g>
    </svg>
    <h3 aria-level="3" class="aside__title">
      <?php echo $aside[1];?>
    </h3>
    <img class="aside__photo" src="<?php echo $aside[2];?>" width="160" height="160" alt="Photo de ShowYourGlitters">
    <p class="aside__text">
      <?php echo $aside[3];?>
    </p>
  </section>

  <section class="aside__section">
    <h3 aria-level="3" class="aside__title">
      Je suis sociale !
    </h3>
    <ul class="aside__list">
      <li class="aside__element aside__element--left">
        <a class="aside__link aside__link--twitter" href="<?php echo $aside[4];?>" title="Accéder à mon twitter">Twitter</a>
      </li>
      <li class="aside__element aside__element--right">
        <a class="aside__link aside__link--facebook" href="<?php echo $aside[5];?>" title="Accéder à mon">Facebook</a>
      </li>
      <li class="aside__element aside__element--left">
        <a class="aside__link aside__link--insta" href="<?php echo $aside[6];?>" title="Accéder à mon Instagram">Instagram</a>
      </li>
      <li class="aside__element aside__element--right">
        <a class="aside__link aside__link--pinterest" href="<?php echo $aside[7];?>" title="Accéder à mon Pinterest">Pinterest</a>
      </li>
      <li class="aside__element aside__element--left">
        <a class="aside__link aside__link--hellocoton" href="<?php echo $aside[8];?>" title="Accéder à mon HelloCoton">HelloCoton</a>
      </li>
      <li class="aside__element aside__element--right">
        <a class="aside__link aside__link--google" href="<?php echo $aside[9];?>" title="Accéder à mon Google +">Google +</a>
      </li>
    </ul>
  </section>

  <section class="aside__section aside__section--last">
    <h3 aria-level="3" class="aside__title">
      Pour vous aider
    </h3>
    <p class="aside__keyword">

      <?php echo wp_tag_cloud($args);?>
    </p>
  </section>
