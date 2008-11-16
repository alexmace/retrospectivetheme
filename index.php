<?php get_header(); ?>

<div id="container"><!--container -->
<!-- #content -->
<div id="content">

<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
      <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title() ;?>"><?php the_title(); ?></a></h1>
      <p class="postmetadata"><?php the_time('F jS, Y') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
      
      <div class="entry">
        <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
      <p class="postmetadata2">Published in <?php the_category(', ') ?><!-- by <php the_author(); ?> , <?php the_time('F jS, Y') ?> --> <?php edit_post_link('(Edit)', '', ''); ?><br />
      	<?php the_tags('Tags: ', ', ', ''); ?></p></p>
    </div>
  <?php endwhile; ?>
  
  <div class="navigation">
    <div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
    <div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
  </div>
  
<?php else: ?>
  
  <h1>Not Found</h1>
  <p>Sorry, but you are looking for something that isn't here.</p>
  <?php include (TEMPLATEPATH . "/searchform.php"); ?>

<?php endif; ?> 
 
</div><!-- //content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
