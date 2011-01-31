<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>


	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div style="clear:both;">
				<div class="alignleft"><h7><?php the_time('j F Y') ?></h7></div>
<div class="alignleft2"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/linha1.png" border="0">
				</div>

				<div class="entry">
				<div class="post_texto2">
postado em:<br><?php the_category(', '); ?><br>
<br><br>
				</div>
				<div class="post_texto">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
<span class="post_comentarios"><?php comments_popup_link('Nenhum Coment&#225;rio', '1 coment&#225;rio', '% coment&#225;rios'); ?></span>
				</div>
<div style="clear:both;"></div>
			</div>


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
