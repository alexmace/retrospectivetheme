<?php get_header(); ?>

<div id="container"><!--container -->
<!-- #content -->
<div id="content">

<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title() ;?>"><?php the_title(); ?></a></h1>
      <p class="postmetadata"><!-- <?php the_time('F jS, Y') ?> --></p>
      
      <div class="entry">
        <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
      </div>
    </div>
  <?php endwhile; ?>
  
	<!--
  <?php trackback_rdf(); ?>
	-->

<?php else: ?>
  
  <h1>Not Found</h1>
  <p>Sorry, but you are looking for something that isn't here.</p>
  <?php include (TEMPLATEPATH . "/searchform.php"); ?>

<?php endif; ?> 
 
</div><!-- //content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
