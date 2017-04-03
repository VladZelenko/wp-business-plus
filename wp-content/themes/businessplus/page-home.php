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

get_header('home'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="home-page">
			<section class="home-about">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-lg-5">
							<h2 class="home-title"> <?php echo get_theme_mod('home_about_title'); ?></h2>
							<h3 class="home-subtitle"><?php echo get_theme_mod('home_about_subtitle'); ?></h3>
						</div>
						<div class="col-md-7 col-lg-7">
							<?php
							$query = new WP_Query( array('post_type' => 'about', 'posts_per_page' => 100 ) );
							if ($query->have_posts()):?>
							<?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; ?>
						<?php endif; wp_reset_postdata(); ?>
						<a href="" class="post-btn"><?php echo get_theme_mod('home_about_button'); ?></a>
					</div>
				</div>
			</div>
		</section>

		<section class="home-services">
			<div class="container">
				<h2 class="home-title"> <?php echo get_theme_mod('home_services_title'); ?></h2>
				<h3 class="home-subtitle"><?php echo get_theme_mod('home_services_subtitle'); ?></h3>
				<?php
				$query = new WP_Query( array('post_type' => 'services-reviews', 'posts_per_page' => 100 ) );
				if ($query->have_posts()):?>
				<div class="row">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="col-xs-1 col-xs-1">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="col-md-5 col-lg-5 service-title">
							<h3><?php the_title(); ?></h3>
							<div class="services-content">
								<?php the_content(); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; wp_reset_postdata(); ?>
			</div>
			<a href="" class="post-btn"><?php echo get_theme_mod('home_services_button')?></a>
		</div>
	</section>

	<section class="home-clients">
		<div class="container">
			<h2 class="home-title"> <?php echo get_theme_mod('home_clients_title'); ?></h2>
			<h3 class="home-subtitle"><?php echo get_theme_mod('home_clients_subtitle'); ?></h3>
			<div class="row">
				<?php
				$args = array('post_type' => 'clients', 'posts_per_page' => 100);
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()):?>
				<div class="clients-slider col-xs-12">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="col-xs-4">
							<div class="content">
								<?php the_content(); ?>
							</div>
							<div class="flexbox">
								<div class="col-1">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="col-2">
									<h3><?php the_title(); ?></h3>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

<section class="home-news-section">
	<div class="container">
		<h2 class="home-title"> <?php echo get_theme_mod('home_news_title'); ?></h2>
		<h3 class="home-subtitle"><?php echo get_theme_mod('home_news_subtitle'); ?></h3>
		<?php
		$query = new WP_Query( array('post_type' => 'post', 'posts_per_page' => 1 ) );
		if ($query->have_posts()):?>
		<div class="row">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-md-1 col-lg-1">
					<ul class="post-info">
						<li>
							<a href="<?php get_posts(); ?>"><span class="date"><?php the_time('j' ); ?></span></a>
							<span class="month-year"><?php the_time('F-Y' ); ?></span>
						</li>
						<li>
							<a href="<?php the_permalink(); ?>">
								<i class="fa fa-comments-o" aria-hidden="true"></i>
								<?php comments_number( 'no coments', '1- coments', '%- com'); ?>
							</a>
						</li>
						<li>
							<i class="fa fa-eye" aria-hidden="true"></i>
							<?php if(function_exists('the_views')) { the_views(); } ?>
						</li>
					</ul>
				</div>
				<div class="col-md-5 col-lg-5">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', 'class=img-responsive'); ?></a>
					<a href="<?php the_permalink(); ?>" class="home-post-title" ><?php the_title(); ?></a>
					<?php the_excerpt(); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>
		<div class="col-md-6 col-lg-6">
			<?php
			$query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 2, 'offset' => 1 ));
			while($query->have_posts()) : $query->the_post();
			?>
			<div class="col-md-12 col-lg-12">
				<a href="<?php the_permalink(); ?>" class="home-post-title"><?php the_title(); ?></a>
				<span class="post-date"><?php the_time('j F Y' ); ?></span>
				<?php the_excerpt(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</div>
<a href="" class="news-btn"><?php echo get_theme_mod('home_news_button')?></a>
</div>
</section>

<section class="home-partners">
	<div class="container">
		<h2 class="home-title"> <?php echo get_theme_mod('home_partners_title'); ?></h2>
		<h3 class="home-subtitle"><?php echo get_theme_mod('home_partners_subtitle'); ?></h3>
		<?php
		$query = new WP_Query( array('post_type' => 'partners-slider', 'posts_per_page' => 100 ) );
		if ($query->have_posts()):?>
		<div class="row partners-slider">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-md-2 col-lg-2 partners-label">
					<?php the_post_thumbnail('full', 'class=img-responsive'); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</div>
</section>


</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
