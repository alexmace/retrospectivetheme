<?php get_header(); ?>

<div id="container"><!--container -->
<!-- #content -->
<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      <h1><?php the_title(); ?></h1>
      <p class="postmetadata"> </p>
      
      <div class="entry">
        <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
      </div>
      <p class="postmetadata2">Published in <?php the_category(', ') ?><!-- by <php the_author(); ?> -->, <?php the_time('F jS, Y') ?> <?php edit_post_link('(Edit)', '', ''); ?><br />
      	<?php the_tags('Tags: ', ', ', ''); ?></p>
    </div>
  <?php endwhile; ?>
  
	<!--
	<?php trackback_rdf(); ?>
	-->

  <?php comments_template(); ?>
  
<?php else: ?>
  
  <h1>Not Found</h1>
  <p>Sorry, but you are looking for something that isn't here.</p>
  <?php include (TEMPLATEPATH . "/searchform.php"); ?>

<?php endif; ?> 
 
</div><!-- //content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
