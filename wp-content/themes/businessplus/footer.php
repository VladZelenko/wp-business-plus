<?php
/**
 * The template for displaying the footer
 *copyright
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package businessplus
 */

?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-lg-2">
				<div class="footer-logo">
					<a class="navbar-brand" href="<?php the_permalink(); ?>">
						<?php the_custom_logo(); ?>
					</a>
				</div>
				<span class="foot-copyright"><?php echo get_theme_mod('copyright'); ?></span>
				<?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
			</div>
			<div class="col-md-2 col-lg-2"></div>
			<div class="col-md-2 col-lg-2 navbox-footer">
				<h3 class="title">Navigation</h3>
				<?php wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'container' => false,
					'menu_class' => 'footer-menu-1'
					));
					?>
				</div>
				<div class="col-md-1 col-lg-1"></div>
				<div class="col-md-5 col-lg-5 contact-form-box">
					<h3 class="title">Quick contact us</h3>
					<?php echo do_shortcode('[contact-form-7 id="123" title="footer contact form"]'); ?>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
