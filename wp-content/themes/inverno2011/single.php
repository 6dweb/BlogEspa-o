<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content3" class="narrowcolumn">
		
	</div>

	<div id="content" class="narrowcolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('%link') ?></div>
			<div class="alignright"><?php next_post_link('%link') ?></div>
		</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div style="clear:both;"><span class="post_data"><?php the_time('j F Y') ?></span>
			<span class="post_titulo"><h2><?php the_title(); ?></h2></span></div>

			<div class="entry">
				<div class="post_texto"><?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?></div>

				
				<div style="clear:both;"><span class="post_tags"><?php the_tags( '<p>Tags: ', ', ', '</p>'); ?></span></div>

				<p class="postmetadata alt">
				
				</p>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
