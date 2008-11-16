<?php get_header(); ?>

<div id="container"><!--container -->
<!-- #content -->
<div id="content">
	
   <h1>Not Found, Error 404</h1>
		<p>The page you are looking for no longer exists.</p>
		
		<p>Perhaps you can find what you are looking for by searching the site archives</p>
		
		<div class="archive">
			
		<ul>
			<?php get_archives('postbypost', 100); ?>
		</ul>
		</div>


</div><!-- //content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
