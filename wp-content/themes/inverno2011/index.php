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
				
<h7><?php the_time('j.m.Y') ?></h7>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</div>

				<div class="entry">
				<div class="post_texto2">
categoria: <?php the_category(', '); ?>
				</div>
				<div class="post_texto">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
<span class="post_tags"><?php the_tags( 'Tags: ', ', ', ''); ?></span>
<span class="post_comentarios"><?php comments_popup_link('Nenhum Coment&#225;rio', '1 coment&#225;rio', '% coment&#225;rios'); ?></span>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=xa-4c49d80f27345a98" class="addthis_button_compact">Compartilhe</a>
<span class="addthis_separator">|</span>
<a class="addthis_button_facebook"></a>
<a class="addthis_button_myspace"></a>
<a class="addthis_button_google"></a>
<a class="addthis_button_twitter"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4c49d80f27345a98"></script>
<!-- AddThis Button END -->

				</div>
<div style="clear:both;"></div>
			</div>


			</div>
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
