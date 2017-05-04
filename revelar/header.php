<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Revelar
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
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'revelar' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding <?php if ( ! has_nav_menu( 'primary' ) ) { echo esc_attr( 'only-item' ); } ?>">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'revelar' ); ?></button>
		<div class="main-navigation-wrap">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id' 		 => 'primary-menu',
						'container' 	 => false,
						'fallback_cb'	 => false,
					)
				); ?>
			</nav>
		</div><!-- .main-navigation-wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
