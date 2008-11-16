<?php get_header(); ?>

<div id="container"><!--container -->
<!-- #content -->
<div id="content">

	<?php if (have_posts()) : ?>

		<h1 class="pagetitle">Search Results</h1>

		<?php while (have_posts()) : the_post(); ?>

			<div class="entry">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title() ;?>"><?php the_title(); ?></a></h2>
				<p class="postmetadata"><?php the_time('F jS, Y') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
        
        <?php the_excerpt('<p>Read the rest of this entry &raquo;</p>'); ?>

				<p class="postmetadata2">Published in <?php the_category(', ') ?><!-- by <php the_author(); ?> , <?php the_time('F jS, Y') ?> --> | <?php edit_post_link('Edit', '', ''); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>
	<div class="entry">
		<h2 class="center">No posts found. Try a different search?</h2>
  </div>
  
	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>