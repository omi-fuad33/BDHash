<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omnispace-bdhash
 */

?>

	<footer id="colophon" class="site-footer o_footer_wrapper row">
	    <div class="o_footer_contact_wrap com col-lg-6">
	        <p class="o_copyright_text o_p1"><strong>Email-</strong> ask.bdhash@gmail.com</p>
	<div class="o_social_media_footer_wrap">
		<ul>
			<li><i class="fa fa-facebook-square d_s_icon"></i></li>
			<li><i class="fa fa-flickr"></i></li>
		</ul>
	</div>
	    </div>
		<div class="o_footer_copyright_wrap col-lg-6">
			<p class="o_copyright_text o_p1">&copy 2020 Omnispace Limited, All Rights Reserved</p>
			<p class="o_copyright_text o_p2">Design & Developed by: <span><img src="<?php echo get_template_directory_uri(); ?>/images/Omni_twitter.png" alt="" class="o_footer_omni_logo"><span></p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</div>
</html>
