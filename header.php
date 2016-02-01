<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package total-wellness
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site container-fluid">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'total-wellness' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="row site-header-wrap">
				<div class="col-md-8 col-md-offset-2">
					<div class="site-branding-wrap">
						<a href="<?php echo home_url(); ?>">
							<div class="site-branding">
							</div><!-- .site-branding -->
						</a>
						<div id="responsive-menu">
							<button class="menu-toggle" aria-controls="primary-menu"><i class="fa fa-bars"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div id="nav-wrap" class="row nav-wrap">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<nav id="site-navigation" class="main-navigation" role="navigation" aria-expanded="false">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</header><!-- #masthead -->


		<div class="row">
		<div id="content" class="site-content">