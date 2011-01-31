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

		<h2 class="pagetitle">Resultados da busca</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Mais antigos') ?></div>
			<div class="alignright"><?php previous_posts_link('Mais recentes &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"></h3>
				<span class="post_data"><?php the_time('j F Y') ?></span>
				
				<div class="entry">
					<span class="post_titulo"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></span>
					<div class="post_texto">&nbsp;</div>
				</div>
				
				<span class="post_tags"><?php the_tags('Tags: ', ', ', '<br />'); ?></span>
				<span class="post_comentarios"><?php comments_popup_link('nenhum coment&#225;rio', '1 coment&#225;rio', '% coment&#225;rios'); ?></span>
				
				<p class="postmetadata"></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Nenhum post encontrado.</h2>
		

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
