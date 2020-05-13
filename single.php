<?php get_header(); ?>
	<main role="main">
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="container-fluid single-top-bkg" style="background: -webkit-linear-gradient(321deg, rgba(71,71,71,0.58) 0%, rgba(71,71,71,0.58) 100%);
				 background: -o-linear-gradient(rgba(71,71,71,0.58) 0%, rgba(71,71,71,0.58) 100%);
				 background: linear-gradient(rgba(71,71,71,0.32) 0%, rgba(71,71,71,0.58) 100%),
				 url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				 <div class="container h-100">
					<div class="row align-items-end h-100">
						<div class="col-auto mx-auto fs-18 blog-title ls-3">
							<h3><?php the_field('blog_title', 'option'); ?></h3>
						</div>
					</div>
				 </div>
				</div>
				<div class="container-fluid single-post-container">
					<div class="container">
						<div class="row">
							<div class="col-xl-9 col-lg-9 col-12 single-post-content p-relative">
								<?php
								$categories = get_the_category();
								$category_name = $categories[0]->cat_name;
								?>
								<p class="fs-13 uppercase fw-500 ls-2 mt-20 text-center"><?php echo $category_name ?></p>
								<h1 class="fs-20 ls-4 text-center mt-20 mb-20"><?php the_title(); ?></h1>
								<p class="fs-12 uppercase ls-2 mt-20 mb-30 text-center"><?php the_date(); ?></p>
								<div class="fs-13 lh-22 ls-2 mb-50">
									<?php the_content(); ?>
								</div>
								<div class="row justify-content-end align-items-center row-share-post mt-80">
									<span class="ls-3 uppercase mr-20">Partagez</span>
									<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fa fa-facebook-official fs-16 " aria-hidden="true"></i></a>
									<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus fs-16 ml-30" aria-hidden="true"></i></a>
								</div>
							</div>
							<aside class="col-xl-3 col-lg-3 col-12">
								<div class="d-flex flex-column tmplt-blog-category poppins uppercase fs-14 fw-300 text-center">
									<h3 class="fs-15 fw-500 ls-3 uppercase mb-15">catégories</h3>
									<?php
									$terms = get_categories();
									foreach ($terms as $term){
										$term_link = get_term_link($term);
										?>
										<div class="blog-cat-tag">
											<a href="<?php echo $term_link ?>" data-id="<?php; echo $term->term_id; ?>" data-slug="<?php echo $term->slug; ?>">
												<h4 class='fs-12 fw-500 ls-2 mb-0 text-black'><?php echo $term->name; ?></h4>
											</a>
										</div>
									<?php }
									?>
								</div>
								<div class="tmplt-blog-category recent-posts">
									<h3 class="fs-15 fw-500 ls-3 uppercase mb-20  text-center">Les derniers articles</h3>
									<?php
									$the_query = new WP_Query( array(
										'post_type' => 'post',
										'posts_per_page' => 3,
									));
									?>
									<?php if ( $the_query->have_posts() ) : ?>
										<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

											<p class="d-flex mb-30">
												<a class="d-flex align-items-center roboto-slab fs-15" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php the_post_thumbnail(); ?>
													<span class="ls-3"><?php the_title(); ?></span>
												</a>
											</p>

										<?php endwhile; ?>
										<?php wp_reset_postdata(); ?>

									<?php else : ?>
										<p><?php __('No Posts'); ?></p>
									<?php endif; ?>
								</div>
							</aside>
						</div>
						<div class="row posts-pagination mt-50 mb-30">
							<div class="col-xl-9 col-lg-9 col-12 justify-content-between d-flex">
								<?php posts_nav_link(' &#183; ', 'Prec', 'Suiv'); ?>
								<span class="btn-grey text-white"><?php previous_post_link(); ?></span>
								<span class="btn-grey text-white"><?php next_post_link(); ?></span>
							</div>
						</div>
					</div>
				</div>
			</article>
			<!-- /article -->
		<?php endwhile; ?>

		<?php else: ?>
			<!-- article -->
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
			<!-- /article -->
		<?php endif; ?>
		</section>
	</main>

<?php get_footer(); ?>
