<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tqut
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="mainContainer">
		<!-- Banner  START -->
		<section class="container comm-section pt0 text-center">
			<div class="wrap404">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/404.png" alt="">
				<a href="http://localhost/tqut/index.html" class="logo-ct">
			</div>
		</section>
		<!-- Banner  END -->
	</div>

</main><!-- #main -->

<?php
get_footer();
