<?php /*
      Template Name: Single Article
*/
get_header();
?>

<nav class="header__menu">
  <h2 aria-level="2" class="menu__title hidden">Navigation Principale</h2>
  <div class="menu__container">
    <label for="show-menu" class="menu__show"><span class="hidden">Menu</span></label>
    <input type="checkbox" id="show-menu" class="menu__hamburger" role="button">
    <div class="menu__burger">
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
  </div>
      <?php get_search_form(); ?>

  </div>
</nav>
</header>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
<section class="headArticle">
  <?php $image_bckg = get_field('background_image');          $bckg__imagesize='thumb-backgroundimage';?>
  <style>
  .headArticle{
    background: url("<?php echo wp_get_attachment_image_url( $image_bckg['id'], $bckg__imagesize );?>") no-repeat center fixed;
    background-size: cover;
  }
  </style>
<div class="headArticle__cards">
  <h2 aria-level="2" class="headArticle__title">
    <?php echo the_title();?>
  </h2>
  <p class="headArticle__keyword">
    <?php echo the_category(', ');?>
    <span class="headArticle__timer">
      Lecture&nbsp;:&nbsp;<?php echo the_field('time_lecture');?> min
    </span>
  </p>
</div>
</section>
<?php endwhile; endif;?>
<?php wp_reset_query();?>
<div class="margin">
  <?php get_sidebar();?>
</aside>
<main>

    <section class="text">
      <h2 aria-level="2" class="text__title hidden">
        <?php echo the_title();?>
      </h2>
      <div class="text__containerDate">
        <time class="text__date" datetime="<?php the_field('article__date');?>"><?php the_field('article__date');?></time>
      </div>

      <article class="text__article">
        <div class="text__share text__share--categories">
          <?php echo share_button($content);?>
        </div>
        <?php the_content();?>
        <img src ="<?php bloginfo('template_directory');?>/img/signature.svg" class="text__signature" alt="ShowYourGlitters" width="220" height="auto">
      </article>


      <section class="commentary">
        <h3 class="commentary__title" aria-level="3">
          Commentaire
        </h3>
        <?php $comment=get_comments(array('post_id'=>get_the_ID()));?>
        <?php foreach($comment as $key):?>
        <div class="commentary__container">
          <p class="commentary__author">
            <?php echo($key->comment_author);?>
            <time class="commentary__time" datetime="2016-07-11">
              <?php echo($key->comment_date);?>
            </time>
          </p>
          <p class="commentary__text">
            <?php echo $key->comment_content;?>
          </p>
        </div>
        <?php endforeach;?>
      </section>

      <section class="commentform">
          <?php comment_form($comment_args); ?>
      </section>
      </section>

</div>
<?php wp_reset_query() ;?>
<section class="moreArticle">
  <?php query_posts([
    'posts_per_page' =>2,
    'orderby' => 'random',
    'order' => 'DESC',
    'post_type' => 'post'
  ]);?>
  <h3 aria-level="3" class="moreArticle__title">
    Des articles qui peuvent vous interessez
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
        21
      </li>
      <li class="moreArticle__element moreArticle__element--comment">
        <?php comments_number('0', '1', '%'); ?>
      </li>
    </ul>
  </article>
<?php endwhile; endif;?>
</section>

<section class="instagram">
  <h3 class="instagram__title" aria-level="3">
    J'instagram tout ce qui bouge
  </h3>
  <?php echo do_shortcode('[jr_instagram id="2"]');?>
</section>

</main>

<?php get_footer();?>
