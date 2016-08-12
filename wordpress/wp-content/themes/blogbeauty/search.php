<?php
/*
Template Name: Search
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

  <a class="menu__link" href="<?php the_permalink('48');?>" title="Vers la page à propos">À Propos</a>

  <?php get_search_form(); ?>
</div>
</nav>
</header>

  <div class="margin">
    <main>

      <section class="search article">
        <h2 aria-level="2" class="search__title">
          Résultat de la recherche pour&nbsp;:&nbsp;
        </h2>
        <p class="search__keyword">
          <?php the_search_query(); ?>
        </p>
        <section class="moreArticle moreArticle--search">

          <h3 aria-level="3" class="moreArticle__title hidden">
            Découvrez plus d'article
          </h3>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="moreArticle__article moreArticle__article--search">
            <figure class="moreArticle__link">
              <?php the_post_thumbnail($size='post-thumbnail');?>
            </figure>
            <div class="moreArticle__container">
              <?php $categorie = get_the_category();?>
              <span class="moreArticle__theme moreArticle__theme--<?php echo ($categorie[0]->name);?>">
                <?php echo ($categorie[0]->name);?>
              </span>
              <p class="moreArticle__text">
                <?php echo substr(get_the_excerpt(), 0,90).'...'; ?>
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
                21
              </li>
              <li class="moreArticle__element moreArticle__element--comment">
                5
              </li>
            </ul>
          </article>
        <?php endwhile; endif;?>

          <div class="moreArticle__pagination moreArticle__pagination--search">
              <?php  wp_pagenavi();?>
          </div>
      </section>
  </div>

</main>
<?php get_footer();?>
