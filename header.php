<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Northport
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVsxlxHIR-f5y2bHNk-_GmTGvbyBuZW_A"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nortphort' ); ?></a>

	<header id="masthead" class="siteHeader">
		<div class="siteHeader__wrap">
			<div class="siteHeader__left">
				<?php wp_nav_menu(array('theme_location' => 'menu-left')); ?>
			</div>
			<div class="siteHeader__logo">
				<a href="#top">
					<img src="<?php echo get_template_directory_uri() . '/images/logo_white.svg'; ?>"/>
				</a>
			</div>
			<div class="siteHeader__right">
				<?php wp_nav_menu(array('theme_location' => 'menu-right')); ?>
				<div class="btnMobile"></div>
			</div>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nortphort' ); ?></button>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="menuMobile">
		<div class="menuMobile__close">
			<img src="<?php echo get_template_directory_uri() . '/images/menuMobileClose.svg'; ?>"/>
		</div>
		<div class="menuMobile__wrap">
			<?php wp_nav_menu(array('theme_location' => 'menu-left')); ?>
			<?php wp_nav_menu(array('theme_location' => 'menu-right')); ?>
		</div>
	</div>
