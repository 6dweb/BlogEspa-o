<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content3" class="narrowcolumn">
		
	</div>

	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div style="clear:both;"><span class="post_data"><?php the_time('j F Y') ?></span>
					<span class="post_titulo"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></span></div>

				<div class="entry">
				<div class="post_texto">

					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
			</div>

				<div style="clear:both;"><span class="post_tags"><?php the_tags('Tags: ', ', ', '<br />'); ?></span>
				<span class="post_comentarios"><?php comments_popup_link('nenhum coment&#225;rio', '1 coment&#225;rio', '% coment&#225;rios'); ?></span></div>
			</div>
<p>&nbsp;</p>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Mais antigos') ?></div>
			<div class="alignright"><?php previous_posts_link('Mais recentes &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
