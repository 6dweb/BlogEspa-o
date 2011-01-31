<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

	<div id="sidebar">
<?php get_search_form(); ?>
		
<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<li>
				
			</li>


			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p></p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p></p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p></p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p></p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li>
		<?php }?>

		</ul>
		<ul >
			
<li><a href="http://www.espacofashion.net.br/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/meuespaco.png" /></a></li>
			
<li><a href="http://www.espacofashion.6d.com.br/#/catalogo/galeria/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/meucatalogo.png" /></a></li>

<li><a href="http://www.espacofashion.com.br/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/siteoficial.png" /></a></li>

			<li><h2 class="tt-arquivos">Arquivos</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
			
			<p>&nbsp;</p>
			
			<li><h2 class="tt-tags">Tags</h2>
				<ul>
				<span class="tags"><?php wp_tag_cloud('smallest=10&largest=20&number=30&orderby=name'); ?></span>
				</ul>
			</li>
			
			<p>&nbsp;</p>
			
			<li><h2 class="tt-categorias">Categorias</h2>
				<ul>
				<?php wp_list_categories('title_li= '); ?>
				</ul>
			</li>

		</ul>
		<ul>
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				
			<?php } ?>

			<?php endif; ?>
		</ul>
	</div>

