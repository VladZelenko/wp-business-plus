<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package businessplus
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="single-post">
			<div class="container single-wrap">
				<h2 class="title"> <?php echo get_theme_mod('content_post_title'); ?></h2>
				<h3 class="subtitle"><?php echo get_theme_mod('content_post_subtitle'); ?></h3>
				<div class="row">
					<div class="col-md-1 col-lg-1 blog-author-post">
						<a href="<?php get_posts(); ?>"><?php $author_email = get_the_author_email(); echo get_avatar($author_email, '60');?></a>
					</div>
					<div class="col-md-11 col-lg-11">
						<?php
						while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

						the_post_navigation();



			// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

		endwhile; // End of the loop.
		?>
	</div>
</div>
</div>
</div>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
