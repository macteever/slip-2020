<?php get_header(); ?>
	<section id="primary" class="content-area default-sh-template">
		<main id="main" class="site-main container-fluid">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<div class="container">
					<div class="row align-items-end ">
						<div class="col-xl-6 col-lg-6 col-12 fs-32 fw-700">
							<h1 class="fs-16 fw-300 uppercase about-repeater-title-after"><?php the_title(); ?></h1>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-xl-10 col-lg-10 col-12 mr-auto fs-14 lh-26 ls-1 default-sh-content">

							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<?php
				endwhile; // End of the loop.
				?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
