<?php
/*
Template Name: Category
*/
$categorie = get_the_category();
?>

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
  <title><?php bloginfo();?>-<?php echo ($categorie[0]->name);?></title>
</head>
<body id="haut">
  <header class="header">
    <div class="header__banner">
      <h1 aria-level="1" class="header__title">
        <?php echo bloginfo('name');?>
      </h1>
      <p class="header__subtitle">
        <?php echo bloginfo('description');?>
      </p>
    </div>

<nav class="header__menu">
  <h2 aria-level="2" class="menu__title hidden">Navigation Principale</h2>
  <div class="menu__container">
  <a class="menu__link" href="<?php the_permalink('6');?>" title="Vers la page d'accueil">Accueil</a>

  <div class="menu__drophover">
  <a class="menu__link menu__link--active menu__link--categories" href="<?php the_permalink('39');?>" title="Vers la page des catégories">
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
    <div class="sidebar__off">
    <?php get_sidebar();?>
  </div>
  </aside>
  <main>

    <section class="article">
      <h2 aria-level="2" class="search__title">
        Catégorie&nbsp;:&nbsp; <?php echo ($categorie[0]->name);?>
      </h2>
      <section class="moreArticleSearch moreArticle--search">

        <h3 aria-level="3" class="moreArticle__title hidden">
          Les articles correspondant
        </h3>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="moreArticle__article moreArticle__article--search">
          <figure class="moreArticle__link">
            <?php the_post_thumbnail($size='post-thumbnail');?>
          </figure>
          <div class="moreArticle__container">
            <span class="moreArticle__theme moreArticle__theme--<?php echo ($categorie[0]->name);?>">
              <?php echo ($categorie[0]->name);?>
            </span>
            <p class="moreArticle__text">
              <?php echo substr(get_field('resume'), 0,90).'...';?>
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
            <li class="moreArticle__element">
              <?php echo do_shortcode('[dot_recommends]');?>
            </li>
            <li class="moreArticle__element moreArticle__element--comment">
              <?php comments_number('0', '1', '%'); ?>
            </li>
          </ul>
        </article>
      <?php endwhile; endif;?>

        <div class="moreArticle__pagination moreArticle__pagination--search">
            <?php  wp_pagenavi();?>
        </div>
    </section>
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
