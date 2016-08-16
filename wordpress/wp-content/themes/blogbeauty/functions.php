<?php
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb-bigimage', 588,342, true );
add_image_size( 'thumb-aboutimage', 250,250, true );
add_image_size( 'thumb-backgroundimage', 1020,468, true );

define('WPCF7_AUTOP', false);
/*
*  Register nav menus
*/
register_nav_menu('main-nav',__('Menu principale utilisé dans le header.','p'));

function b_get_menu_id($location){
  $locations = get_nav_menu_locations();

  if(isset($locations[$location])){
    return $locations[$location];
  }
    return false;
}

function get_the_link($string, $replace = '%s')
{
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
}

function the_link($string, $replace = '%s')
{
      echo get_the_link($string, $replace);
}

function b_get_menu_items( $location )
{
  $navItems = [];
  foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
    // Si vous avoir un contrôle sur les liens affichés, c'est ici. (Par exemple: mettre $item->isCurrent à true|false)
    $item = new stdClass();
    $item->url = $obj->url;
    $item->isCurrent=true;
    $item->label = $obj->title;
    $item->icon = $obj->classes[0];
    array_push($navItems, $item);
  }
  return $navItems;
}


/*
***Commentaire changement
*/
      $comment_args = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
          'author' =>
          '<div class="commentform__left"><label for="name" class="commentform__label">' . __( 'Nom' ) . '</label> '.
          '<input id="name" class="commentform__input" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . ' /></div>',
          'email'  =>
          '<div class="commentform__right"><label for="internet" class="commentform__label">' . __( 'Mail' ) . '</label> ' .
          '<input id="internet" class="commentform__input" name="internet" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . ' /></div>',
          ) ),
          'comment_field' =>'<label for="message" class="commentform__label">' . __( 'Message' ) . '</label>' .
           '<textarea id="message" class="commentform__input commentform__input--textarea" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
           'class_submit'=>'commentform__submit',
           'label_submit'=>'Commenter'
  );



  function share_button($content) {
       global $post;

        $share_URL = get_permalink();
        $share_title = str_replace( ' ', '%20', get_the_title());
        $share_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        $share_excerpt = strip_tags(get_the_content());

        $twitterURL = 'https://twitter.com/intent/tweet?text='.$share_title.'&amp;url='.$share_URL.'&amp;via=showyourglitters';
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$share_URL;
        $googleURL = 'https://plus.google.com/share?url='.$share_URL;
        $pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$share_URL.'&amp;media='.$share_thumbnail[0].'&amp;description='.$share_excerpt;
        $linkedinURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$share_URL.'/&title='.$share_title.'&summary=&source=';

        $content .= '<!-- Facebook Share Button -->
        <ul class="share__list">
        <li class="share__element share__element--facebook">
        <a class="share__link share__link--facebook" href="'.$facebookURL.'" title="Partager sur facebook"><span class="hidden">Facebook</span></a>
        </li>
        <!-- Twitter Share Button -->
        <li class="share__element share__element--twitter">
        <a class="share__link share__link--twitter" href="'.$twitterURL.'" title="Partager sur facebook"><span class="hidden">Twitter</span></a>
        </li>
        <!-- Google+ Share Button -->
        <li class="share__element share__element--pinterest">
        <a class="share__link share__link--pinterest" href="'.$pinterestURL.'" title="Partager sur Pinterest"><span class="hidden">Pinterest</span></a>
        </li>
        </ul>';
    return $content;
}
