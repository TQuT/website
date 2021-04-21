<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tqut
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
		$image = get_field('banner_image');
		$other_blogs = get_field('other_blogs');
	?>

		<div class="mainContainer">
			<!-- Banner  START -->
			<section class="container comm-section pt0 text-center">
				<div class="page_banner" data-aos="fade-up">
					<h2 class="comm_h2 darkblue_txt mb16"><?php the_title(); ?></h2>
					<div class="calender-detail">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/calender.svg" alt="">
						<?php the_time('d/m/Y') ?>
					</div>
				</div>
			</section>
			<!-- Banner  END -->

			<!-- Blog-detail  START -->
			<section class="container comm-section pt0 text-center">
				<div class="blog-detail-wrap">
					<div class="blog-detail-image" data-aos="fade-up">
						<?php the_post_thumbnail() ?>
					</div>
					<div class="blog-detail-text" data-aos="fade-up">
						<div>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>
			<!-- Blog-detail  END -->

			<!-- share-starts -->
			<section class="container comm-section pt0 text-center">
				<div class="share-box" data-aos="fade-up">
					<div class="comm_p">Share it on</div>
					<div class="media-logos">
						<a href="">
							<svg id="twitter" xmlns="http://www.w3.org/2000/svg" width="29.32" height="23.827" viewBox="0 0 29.32 23.827">
								<g id="Social_Twitter" data-name="Social/Twitter" transform="translate(0 0)">
									<path id="Shape" d="M29.32,2.821a12.01,12.01,0,0,1-3.455.947A6.025,6.025,0,0,0,28.51.44,12.05,12.05,0,0,1,24.69,1.9,6.019,6.019,0,0,0,14.439,7.385,17.077,17.077,0,0,1,2.041,1.1,6.023,6.023,0,0,0,3.9,9.132a5.99,5.99,0,0,1-2.723-.753A6.02,6.02,0,0,0,6,14.353a6.029,6.029,0,0,1-2.717.1,6.02,6.02,0,0,0,5.62,4.177A12.1,12.1,0,0,1,0,21.125a17.029,17.029,0,0,0,9.221,2.7c11.168,0,17.478-9.432,17.1-17.892A12.247,12.247,0,0,0,29.32,2.821Z" transform="translate(0 0)" fill="#646ecb" />
								</g>
							</svg>
						</a>
						<a href="">
							<svg xmlns="http://www.w3.org/2000/svg" width="29.32" height="29.32" viewBox="0 0 29.32 29.32">
								<g transform="translate(0 0)">
									<path d="M19.49,29.32V18.728h3.948l.591-4.584H19.49V11.218c0-1.327.369-2.231,2.271-2.231h2.427v-4.1A32.446,32.446,0,0,0,20.651,4.7c-3.5,0-5.9,2.136-5.9,6.059v3.38H10.8v4.584h3.958V29.32H2.932A2.932,2.932,0,0,1,0,26.388V2.932A2.932,2.932,0,0,1,2.932,0H26.388A2.932,2.932,0,0,1,29.32,2.932V26.388a2.932,2.932,0,0,1-2.932,2.932Z" transform="translate(0 0)" fill="#646ecb" />
								</g>
							</svg>
						</a>
					</div>
				</div>
			</section>
			<!-- share-ends -->

			<?php if ($other_blogs) : ?>
				<?php foreach ($other_blogs as $post) : ?>

					<section class="container comm-section pt0 text-center">
                    <div class="blog-wrap" data-aos="fade-up">
                        <a href="<?php the_permalink(); ?>">
                            <div class="blog-image">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } else {   ?>

                                <?php  }
                                ?>
                            </div>
                        </a>
                        <div class="blog-text">

                            <a href="<?php the_permalink(); ?>"><div class="comm_h4"><?php the_title(); ?></div></a>
                            <div class="comm_p">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="read-more-wrap">
                                <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                                <div class="calender">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/calender.svg" alt="">
                                    <?php the_time('d/m/Y') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				<?php endforeach; ?>

			<?php endif; ?>
		</div>
	<?php

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
