<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title(''); ?><?php if ((! $withcomments) && (! is_single()) && (! is_page())) { if (! is_home() && (! is_search())) { echo " | "; } bloginfo('name'); } ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" />
<![endif]-->
<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/ie6.css" />
<![endif]--> 

<?php wp_head(); ?>
</head>

<body>
<div id="header">
<div id="logo">
	<?php if  ( file_exists( TEMPLATEPATH . '/images/logo.gif' ) ) { ?>
  <a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="<?php bloginfo('name'); ?>" /></a> 
  <?php } else { ?>
  <h1 class="blogtitle"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1> 
  <p><?php bloginfo('description'); ?></p>
  <? } ?>
</div>

<div id="top_navlist">
<ul id="navlist">
<?php wp_list_pages('title_li=' ); ?>
</ul>
</div><!--//top_navlist-->
</div><!--//header-->
