<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tqut
 */

get_header();
?>

	
<main id="primary" class="site-main">



<!-- Main Container Starts -->
<div class="mainContainer">
	<!-- Banner  START -->
	<section class="container comm-section pt0 text-center">
		<div class="page_banner" data-aos="fade-up">
			<h2 class="comm_h2 darkblue_txt mb16">Blog</h2>
		</div>
	</section>
	<!-- Banner  END -->

	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$queryObject = new  Wp_Query(array(
		'posts_per_page'   => '3',
		'post_type'        => 'post',
		'post_status'      => 'publish',
		'paged' => $paged,
	));
	if ($queryObject->have_posts()) :
		$i = 0;
		while ($queryObject->have_posts()) :
			$queryObject->the_post(); ?>

			<!-- Blog  START -->
			<section class="container comm-section pt0 text-center">
				<div class="blog-wrap">
					<div class="blog-image" data-aos="fade-up">
						<?php
						if (has_post_thumbnail()) {
							the_post_thumbnail();
						} else {   ?>
						   
						<?php  }
						?>
					</div>
					<div class="blog-text" data-aos="fade-up">
						<div class="calender">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/calender.svg" alt="">
							<?php the_time('d/m/Y') ?>
						</div>
						<div class="comm_h4"><?php the_title(); ?></div>
						<div class="comm_p">
							<?php the_excerpt(); ?>
						</div>
						<a href="<?php the_permalink(); ?>" class="button">Read More</a>
					</div>
				</div>
			</section>
			<!-- Blog  END -->

		<?php endwhile; ?>
		<div class="pagination-container text-center align-items-center">
			<nav class="pagination">
				<?php pagination_bar($queryObject); ?>
			</nav>
		</div>
	<?php wp_reset_postdata();
	endif; ?>
</div>
<!-- Main Container Ends -->


</main><!-- #main -->


<?php

get_footer();

?>