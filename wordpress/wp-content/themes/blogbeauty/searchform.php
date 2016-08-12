<form method="get" class="menu__form" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e('Search:'); ?></label>
	<input type="text" class="form__input" placeholder="Recherche" value="<?php the_search_query(); ?>" name="s" id="s" />
	<input type="submit" class="form__submit" id="searchsubmit" value="" />
</form>
