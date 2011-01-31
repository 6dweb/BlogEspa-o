<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>



<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />



<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed', 'kubrick'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" /> 

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 



<?php wp_head(); ?>

</head>

<body>

<div id="page">

<div id="header">

	<div id="headerimg"><a href="index.php" title="voltar para a página inicial"><img src="/blog/wp-content/themes/default/images/spacer.gif" width="264" height="82" border="0" style="margin: 0;" /></a></div>

	<div id="dataNoHeader"><script language="javascript">

var dia = "<?php echo date('j'); ?>";

var mes = "<?php echo date('n'); ?>";

var ano = "<?php echo date('Y'); ?>";

var meuMes;

if(mes=="1") {

   meuMes = "janeiro"

} else if(mes=="2") {

   meuMes = "fevereiro"

} else if(mes=="3") {

   meuMes = "março"

} else if(mes=="4") {

   meuMes = "abril"

} else if(mes=="5") {

   meuMes = "maio"

} else if(mes=="6") {

   meuMes = "junho"

} else if(mes=="7") {

   meuMes = "julho"

} else if(mes=="8") {

   meuMes = "agosto"

} else if(mes=="9") {

   meuMes = "setembro"

} else if(mes=="10") {

   meuMes = "outubro"

} else if(mes=="11") {

   meuMes = "novembro"

} else {

   meuMes = "dezembro"

}

var novoFormato = dia + " " + meuMes + " " + ano;

document.write(novoFormato);

</script></div>		<!--<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

	<div class="description"><?php bloginfo('description'); ?></div>-->

</div>

