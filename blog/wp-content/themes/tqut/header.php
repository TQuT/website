<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tqut
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<ul class="transition">
		<li></li>
		<!-- <li></li> -->
	</ul>
	<div class="after-pt">
		<div id="page" class="site">
			<header id="header">
				<div class="header">
					<a href="http://leo9studio.in/projects/tqut/index.html" class="logo-ct">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo">
					</a>
					<nav>
						<ul class="menu">
							<li>
								<a href="http://leo9studio.in/projects/tqut/services.html">Service</a>
							</li>
							<li>
								<a href="http://leo9studio.in/projects/tqut/about.html">About</a>
							</li>
							<li>
								<a href="http://leo9studio.in/projects/tqut/blog/blogs">Blog</a>
							</li>
							<li class="menuBtn">
								<a href="http://leo9studio.in/projects/tqut/contact.html" class="button line pur-line">Contact</a>
								<div class="menu2 side-menu">
									<span class="side-toggled-1 side-1"></span>
									<span class="side-toggled-2 side-2"></span>
								</div>
							</li>
						</ul>
					</nav>

					<!-- Side Menu -->
					<div class="menuOverlay"></div>
					<div class="mobile-menu">
						<ul class="header-rig">
							<li><a href="http://leo9studio.in/projects/tqut/services.html">Services</a></li>
							<li><a href="http://leo9studio.in/projects/tqut/about.html">About</a></li>
							<li><a href="blogs.html">Blog</a></li>
							<li><a href="http://leo9studio.in/projects/tqut/contact.html">Contact</a></li>
						</ul>
					</div>
					<!-- Side Menu End -->
				</div>
			</header>