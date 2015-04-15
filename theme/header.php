<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Techtangents
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
<div
	id="page"
	class="hfeed site"
>
	<div
		class='bg'
		style="
			background-image:url(<?php echo get_template_directory_uri() ?>/images/techtangents.gif);
			background-repeat:no-repeat;
			min-width:566px;
			min-height:178px;
			float:left;
			"
	>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'techtangents' ); ?></a>

	<!-- 	<header id="masthead" class="site-header" role="banner">

		</header>
	 -->
		<div class='left-panel'>

	<!-- 		<div class="site-branding">
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div> -->

			<nav id="alt-navigation" class="alt-navigation" role="navigation">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&sigma;</a></li>
					<li><a href="https://twitter.com/techtangents">twitter</a></li>
					<li><a href="https://github.com/techtangents">github</a></li>
				</ul>
			</nav>
	<!--
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'techtangents' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
	 -->
		</div>

		<div id="content" class="site-content">
