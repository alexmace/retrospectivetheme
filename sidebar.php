<div id="sidebar"><!-- sidebar -->

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>

<p class="rssfeed"><a class="rsslink" href="<?php bloginfo('rss2_url'); ?>"></a></p>

<h2>Search</h2>
<form method="get" id="searchform" class="search" action="<?php bloginfo('url'); ?>/">
<input type="text" name="s" value="Type keywords and hit enter..." onfocus="if (this.value == 'Type keywords and hit enter...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Type keywords and hit enter...';}" />
</form>

<h2>Categories</h2>
<ul>
	<?php wp_list_categories('sort_column=name&title_li='); ?>
</ul>

<h2>Blog Archives</h2>
<ul>
  <?php wp_get_archives('type=monthly'); ?>
</ul>

<h2>Links</h2>
<ul>
  <?php get_links(-1, '<li>', '</li>', ' - '); ?>
</ul>

<h2>Meta</h2>
<ul>
  <?php wp_register(); ?>
  <li><?php wp_loginout(); ?></li>
  <li><a href="http://www.wordpress.org/">WordPress</a></li>
  <?php wp_meta(); ?>
  <li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
</ul>

<?php endif; ?> 

</div> <!--//sidebar  -->
