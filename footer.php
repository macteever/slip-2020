			<!-- footer -->
			<footer role="contentinfo">
				<div class="container-fluid footer-part1">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-5 col-12">
								<?php the_field('footer_slogan', 'option'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid footer-part2">
					<div class="container">
						<div class="row footer-logo mt-50">
							<div class="col-auto mr-auto">
								<?php include get_template_directory().'/includes/logo-baseline-noanim.php'; ?>
							</div>
						</div>
						<div class="row justify-content-between mt-80">
							<div class="col-auto">
								<h3 class="fs-16 text-white footer-subtitle-after"><?php _e('Contactez-nous', 'slip-2020'); ?><br><span class="fs-15 text-grey opacity0">test</span></h3>
									<div class="mt-30 footer-phone d-flex flex-column">
										<a class="text-white fs-17 fw-300" href="mailto:<?php the_field('footer_mail', 'option'); ?>?subject=Demande de renseignement"><?php the_field('footer_mail', 'option'); ?></a>
										<a class="text-white fs-17 fw-300" href="tel:+<?php the_field('footer_phone', 'option'); ?>"><?php the_field('footer_phone', 'option'); ?></a>
									</div>
								<?php if ( have_rows('footer_contact', 'option') ) : ?>
									<?php while( have_rows('footer_contact', 'option') ) : the_row(); ?>
										
										<div class="mt-30 footer-adress">
											<a class="text-white" href="<?php the_field('lien', 'option'); ?>" target="_blank" >
												<?php the_sub_field('adress', 'option'); ?>
											</a>
										</div>
								
									<?php endwhile; ?>
								
								<?php endif; ?>
								<h3 class="fs-16 text-white footer-subtitle-after mt-30"><?php _e('Suivez-nous', 'slip-2020'); ?><br><span class="fs-15 text-grey"><?php _e('sur les réseaux','slip-2020'); ?></span></h3>
								<div class="footer-social d-flex">
									<a class="text-white fs-14 fw-300" target="_blank" href="https://www.instagram.com/saint_honore.paris/">Instagram</a>
									<a class="text-white fs-14 fw-300 ml-15" target="_blank" href="https://www.linkedin.com/company/saint-honor%C3%A9-paris/">Linkedin</a>
								</div>
							</div>
							<div class="col-auto footer-newsletter">
								<h3 class="fs-16 text-white footer-subtitle-after"><?php _e('Infolettre', 'slip-2020	'); ?><br><span class="fs-15 text-grey"><?php _e('et newsletter', 'slip-2020'); ?></span></h3>
								<div class="footer-modul-mc">
								<?php
									if (ICL_LANGUAGE_CODE == "fr") {
										//show the form in French
										echo do_shortcode('[mc4wp_form id="579"]');
										
									} elseif (ICL_LANGUAGE_CODE == "en") {
										//show the form in English
										
										echo do_shortcode('[mc4wp_form id="1210"]');
									}
								?>
								</div>
							</div>
							<div class="col-auto footer-link-cat d-flex flex-column justify-content-between">
								<div>
									<h3 class="fs-16 text-white footer-subtitle-after"><?php _e('Présentoirs', 'slip-2020	'); ?><br><span class="fs-15 text-grey"><?php _e('de vitrine','slip-2020'); ?></span></h3>
									<?php 

											// $taxonomyName = "taxonomy-presentoirs";
											// //This gets top layer terms only.  This is done by setting parent to 0.  
											// $parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );   
											// echo '<ul>';
											// foreach ( $parent_terms as $pterm ) {
											// 	//Get the Child terms
											// 	$terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
											// 	foreach ( $terms as $term ) {
											// 		echo '<li><a class="text-grey fs-15" href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';   
											// 	}
											// }
											// echo '</ul>';
									?>
									<?php
										if ( have_rows('presentoirs_search_link', 'option') ) : ?>
											<ul>
												<?php while( have_rows('presentoirs_search_link', 'option') ) : the_row(); ?>
													
													<?php if ( get_sub_field('link', 'option') ) : $file = get_sub_field('link', 'option'); ?>

														<li><a class="text-grey fs-15" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a></li>

													<?php endif; ?>
											
												<?php endwhile; ?>
											</ul>
										<?php endif;
									?>
								</div>
								<div>
									<h3 class="fs-16 text-grey footer-subtitle-after lh-1-2"><a class="text-grey" target="_blank" href="<?php echo home_url() . '/mentions-legales'; ?>"><?php _e('Mentions<br>légales','slip-2020'); ?></a></h3>
								</div>
							</div>
							<div class="col-auto footer-link-cat d-flex flex-column justify-content-between">
								<div>
									<h3 class="fs-16 text-white footer-subtitle-after"><?php _e('Mannequins', 'slip-2020'); ?><br><span class="fs-15 text-grey"><?php _e('de vitrine', 'slip-2020'); ?></span></h3>
									<?php
										if ( have_rows('mannequins_search_link', 'option') ) : ?>
											<ul>
												<?php while( have_rows('mannequins_search_link', 'option') ) : the_row(); ?>
													
													<?php if ( get_sub_field('link', 'option') ) : $file = get_sub_field('link', 'option'); ?>

														<li><a class="text-grey fs-15" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a></li>

													<?php endif; ?>
											
												<?php endwhile; ?>
											</ul>
										<?php endif;
									?>
								</div>
								<div>
									<h3 class="fs-16 text-grey footer-subtitle-after lh-1-2"><a class="text-grey" target="_blank" href="https://www.indeedjobs.com/saint-honor%C3%A9/_hl/fr_FR?cpref=JXWAtnzf3XW5aRnY2g_zoikN87qYWwuQnenmquajQ6g"><?php _e('Rejoindre<br>nos équipes','slip-2020'); ?></a></h3>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-center sub-footer mt-80">
						<div class="col-12 text-center">
							<p class="text-grey fs-13 mt-10">COPYRIGHT - SAINT-HONORÉ PARIS SASU - <?php echo the_date('Y'); ?></p>
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->
		</div>
		<!-- /wrapper -->
		<?php wp_footer(); ?>
		<?php
		if(isset($_COOKIE['Cookies-acceptation'])){?>

		<?php }else 
		{?>

			<div class="cookie-notif">
				<div class="d-flex align-items-center justify-content-between">
					<div class="bkg-grey pb-20 pt-20 pl-20 pr-20 fs-15">
						<?php _e('Ce site internet utilise des cookies pour vous assurer une meilleur expérience utilisateur.', 'slip-2020'); ?>
					</div>
					<div class="bkg-white align-items-center cookie-notifs-child justify-content-between d-flex pl-20 fs-15">
						<button class="anim-300 btn-black mr-30"><a class="text-black fs-14" href="#"><?php _e('En savoir plus','slip-2020'); ?></a></button>
						<button id="cookieButton" class="anim-300 btn-black fs-14"><?php _e('J\'accepte', 'slip-2020'); ?></button>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				jQuery(document).ready(function( $ ) {
					$(".cookie-notif").delay(500).slideToggle(500);
				});
			</script>
		<?php 
		}?>
	</body>
</html>
