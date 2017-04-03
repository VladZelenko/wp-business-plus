<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package businessplus
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php businessplus_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'businessplus' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'businessplus' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
		<div class="edit_post">
			<?php businessplus_entry_footer(); ?>
		</div>

		<footer class="entry-footer">
			<div class="post-box">
				<div class="post_author">
					<a href="<?php get_posts(); ?>"><?php $author_email = get_the_author_email(); echo get_avatar($author_email, '60');?></a>
				</div>
				<blockquote>
					<h2><?php the_author_posts_link() ?></h2>
					<p>
						<?php echo get_theme_mod('authot_quote'); ?>
					</p>
				</blockquote>
			</div>
			
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
