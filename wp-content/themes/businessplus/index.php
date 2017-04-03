<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package businessplus
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="blog-post">
			<div class="container">
				<h2 class="title"> <?php echo get_theme_mod('content_title'); ?></h2>
				<h3 class="subtitle"><?php echo get_theme_mod('content_subtitle'); ?></h3>
				<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
					<article class="post">
						<div class="container">
							<div class="row">
								<div class="col-md-1 col-lg-1 blog-author-post">
									<a href="<?php get_posts(); ?>"><?php $author_email = get_the_author_email(); echo get_avatar($author_email, '60');?></a>
								</div>
								<div class="col-md-11 col-lg-11">
									<header>
										<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<ul class="post-info">
											<li>Posted by: <?php the_author_posts_link() ?></li>
											<li><a href="<?php get_posts(); ?>"><?php the_time('F- j- Y'); ?></a></li>
										</ul>
									</header>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									<?php the_excerpt(); ?>
									<footer>
										<?php if ( is_active_sidebar( 'blog_content_social' ) ) : ?>
											<div id="primary" role="complementary">
													<?php dynamic_sidebar( 'blog_content_social' ); ?>
											</div>
										<?php endif; ?>
										<a href="<?php the_permalink(); ?>" class="post-btn">Read More</a>
									</footer>
								</div>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="blog-pagination">
				<?php the_posts_pagination(['mid_size' => 1])?>
			</div>
		</div>
	</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
