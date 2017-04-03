<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package businessplus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<section class="hero home" style="background-image: url( <?= get_template_directory_uri() . '/img/home-header-bg.png'?>);>
			<header id="masthead" class="site-header" role="banner">
				<div class="container">
					<nav class="navbar navbar-default heder-nav">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1 class="logo">
									<?php the_custom_logo(); ?>
								</h1>
								<div class="haed-phone-number">
									<?php
										echo get_theme_mod('phone');
									?>
								</div>
							</div>
							<div class="collapse navbar-collapse navbar-right " id="bs-example-navbar-collapse-1">
								<?php wp_nav_menu( array(
									'theme-location' => 'menu-1',
									'container' => false,
									'menu_class' => 'nav navbar-nav header-menu-1'
									));
									?>
								</div>
							</div>
						</nav>
					</div>
				</header><!-- #masthead -->
			</section>

			<div id="content" class="site-content">
