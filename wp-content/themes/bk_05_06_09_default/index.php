<?php get_header(); ?>



	<div id="content" class="narrowcolumn">



	<?php if (have_posts()) : ?>



 	  <?php /* If this is a category archive */ if (is_category()) { ?>

		<h2 class="pagetitle"><?php printf(__('Archive for the &#8216;%s&#8217; Category', 'kubrick'), single_cat_title('', false)); ?></h2>

 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

		<h2 class="pagetitle"><?php printf(__('Posts Tagged &#8216;%s&#8217;', 'kubrick'), single_tag_title('', false) ); ?></h2>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>

		<h2 class="pagetitle"><?php printf(_c('Archive for %s|Daily archive page', 'kubrick'), get_the_time(__('F jS, Y', 'kubrick'))); ?></h2>

 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

		<h2 class="pagetitle"><?php printf(_c('Archive for %s|Monthly archive page', 'kubrick'), get_the_time(__('F, Y', 'kubrick'))); ?></h2>

 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

		<h2 class="pagetitle"><?php printf(_c('Archive for %s|Yearly archive page', 'kubrick'), get_the_time(__('Y', 'kubrick'))); ?></h2>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>

		<h2 class="pagetitle"><?php _e('Author Archive', 'kubrick'); ?></h2>

 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

		<h2 class="pagetitle"><?php _e('Blog Archives', 'kubrick'); ?></h2>

 	  <?php } ?>



		<?php while (have_posts()) : the_post(); ?>



			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<h2><span class="dataNoTitulo"><script language="javascript">

var mes = "<?php the_time(__('n', 'kubrick'))?>";

var meuMes;

if(mes=="1") {

   meuMes = "jan"

} else if(mes=="2") {

   meuMes = "fev"

} else if(mes=="3") {

   meuMes = "mar"

} else if(mes=="4") {

   meuMes = "abr"

} else if(mes=="5") {

   meuMes = "mai"

} else if(mes=="6") {

   meuMes = "jun"

} else if(mes=="7") {

   meuMes = "jul"

} else if(mes=="8") {

   meuMes = "ago"

} else if(mes=="9") {

   meuMes = "set"

} else if(mes=="10") {

   meuMes = "out"

} else if(mes=="11") {

   meuMes = "nov"

} else {

   meuMes = "dez"

}

var novoFormato = "<?php the_time(__('d', 'kubrick'))?>" + meuMes + "<?php the_time(__('y', 'kubrick'))?>.";

document.write(novoFormato);

</script></span> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>

				<small>por <?php the_author_nickname(); ?></small>



				<div class="entry">

					<?php the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>

				</div>



				<p class="postmetadata"><span class="tags"><?php the_tags(__('Tags:', 'kubrick') . ' ', ', '); ?></span> <!--<?php printf(__('Posted in %s', 'kubrick'), get_the_category_list(', ')); ?> | <?php edit_post_link(__('Edit', 'kubrick'), '', ' | '); ?>--> <span class="comentarios"><img src="/blog/wp-content/themes/default/images/comments.gif" width="11" height="12" alt="comments" style="float:left;margin:2px 4px auto 0;" /> <?php comments_popup_link(__('seja a primeira a comentar!', 'kubrick'), __('1 comentário', 'kubrick'), __('% comentários', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?></span></p>



			</div>



		<?php endwhile; ?>





			<?php if (is_single()) ?>

<br />

			<?php edit_post_link(__('Edit this entry', 'kubrick'),'','.'); ?>



	<?php comments_template(); ?>





		<div class="navigation">

			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')) ?></div>

			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')) ?></div>

		</div>



	<?php else : ?>





		<?php if ( is_category() ) { // If this is a category archive

			printf("<h2 class='center'>".__("Sorry, but there aren't any posts in the %s category yet.", 'kubrick').'</h2>', single_cat_title('',false));

		} else if ( is_date() ) { // If this is a date archive

			echo('<h2>'.__("Sorry, but there aren't any posts with this date.", 'kubrick').'</h2>');

		} else if ( is_author() ) { // If this is a category archive

			$userdata = get_userdatabylogin(get_query_var('author_name'));

			printf("<h2 class='center'>".__("Sorry, but there aren't any posts by %s yet.", 'kubrick')."</h2>", $userdata->display_name);

		} else { ?>

		





		<h2 class="center"><?php _e('Not Found', 'kubrick'); ?></h2>

		<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick'); ?></p>

		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

<?php } ?>

	<?php endif; ?>



	</div>



<?php get_sidebar(); ?>



<?php get_footer(); ?>
