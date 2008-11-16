</div><!--//container-->

<div id="footer-container">
	
<div id="footer">

<div id="footerleft">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
	<h2>About</h2>
  <p>Restrospective focuses on clean typography and modern colors and design.</p>
  <?php endif; ?>
</div>

<div id="footermid">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : ?>
	<h2>Social Media Profiles</h2>
	<ul>
  	<li><a href="">Facebook</a></li>
  	<li><a href="">Twitter</a></li>
  	<li><a href="">FriendFeed</a></li>
  </ul>
  <?php endif; ?>
</div>

<div id="footerright">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : ?>
	<h2>Recent Readers</h2>
  <!--	Paste JavaScript from MyBlogLog or other services -->
  <?php endif; ?>
</div>

</div><!--//footer-->

<div class="copyright">
	Copyright &copy; <a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a> &middot; All rights reserved.<br />
	
	Powered by <a href="http://wordpress.org/">WordPress</a> and <a href="http://blogbuildingu.com/retrospective">Retrospective theme</a> &middot; Design & code by <a href="http://blogbuildingu.com/">Hendry Lee</a>.

<?php do_action('wp_footer'); ?>
</div>

</div><!--//footer-container-->

</body>
</html>
