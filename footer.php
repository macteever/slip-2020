			<!-- footer -->
			<footer role="contentinfo">
				<div class="container-fluid footer-part1">
					<div class="container-slip">
						<div class="row">
							<div class="col-xl-4 col-lg-5 col-12">
								<p class="ubuntu fs-24 footer-subtitle-after-black mb-30">Suivez-nous</p>
								<?php if ( have_rows('footer_rs', 'option') ) : ?>
									<?php while( have_rows('footer_rs', 'option') ) : the_row(); ?>

										<?php if ( get_sub_field('link', 'option') ) : $file = get_sub_field('link', 'option'); ?>
											<a href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?>
												
												<?php if ( get_sub_field('icon', 'option') ) : $image = get_sub_field('icon', 'option'); ?>
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
												<?php endif; ?>
												
											</a>
										<?php endif; ?>

									<?php endwhile; ?>
								<?php endif; ?>
								
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid footer-part2">
					<div class="container-slip">
						<div class="row justify-content-between">
							<div class="col-auto footer-newsletter">
								<h3 class="fs-20 text-white footer-subtitle-after"><?php _e('Infolettre', 'slip-2020	'); ?><br><span class="text-grey"><?php _e('et newsletter', 'slip-2020'); ?></span></h3>
								<div class="footer-modul-mc">
									<?php echo do_shortcode('[mc4wp_form id="63"]'); ?>
								</div>
								<p class="fs-12 text-white">
								Pour savoir comment nous prenons soin de vos données personnelles,<br> rendez-vous-ici.
								</p>
								<h3 class="fs-20 text-white footer-subtitle-after mt-30"><?php _e('Contactez-nous', 'slip-2020'); ?></h3>
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
								<h3 class="fs-20 text-white footer-subtitle-after mt-30"><?php _e('Suivez-nous', 'slip-2020'); ?></h3>
								<div class="footer-social d-flex">
									<a class="text-white ubuntu fs-14 fw-300" target="_blank" href="https://www.instagram.com/saint_honore.paris/">Instagram</a>
									<a class="text-white ubuntu fs-14 fw-300 ml-15" target="_blank" href="https://www.linkedin.com/company/saint-honor%C3%A9-paris/">Linkedin</a>
								</div>
							</div>
							<div class="col-auto d-flex flex-column">
								<h3 class="fs-20 text-white footer-subtitle-after">Environnement</h3>
								<h3 class="fs-20 text-white footer-subtitle-after mt-50">La marque SLIP®</h3>
							</div>
							<div class="col-auto footer-link-cat d-flex flex-column justify-content-between">
								<div>
									<h3 class="fs-20 text-white footer-subtitle-after">Sous-vêtements<br><span>pour hommes</span></h3>
									<?php
										if ( have_rows('slip_search_link', 'option') ) : ?>
											<ul>
												<?php while( have_rows('slip_search_link', 'option') ) : the_row(); ?>
													<?php if ( get_sub_field('link', 'option') ) : $file = get_sub_field('link', 'option'); ?>

														<li><a class="text-white fs-15" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a></li>

													<?php endif; ?>
												<?php endwhile; ?>
											</ul>
										<?php endif;
									?>
								</div>
							</div>
							<div class="col-auto footer-link-cat d-flex flex-column justify-content-between">
								<div>
									<h3 class="fs-20 text-white footer-subtitle-after">Informations<br><span>légales</span></h3>
									<ul>
										<li><a class="text-white" href="<?php echo home_url() . '/mentions-legales/#mentions-legales'; ?>">Mentions légales</a></li>
										<li><a class="text-white" href="<?php echo home_url() . '/mentions-legales/#livraisons-retours'; ?>">Livraisons et retours</a></li>
										<li><a class="text-white" href="<?php echo home_url() . '/mentions-legales/#protection-donnees'; ?>">Protection des données</a></li>
										<li><a class="text-white" href="<?php echo home_url() . '/mentions-legales/#cgv'; ?>">CGV</a></li>
									</ul>
								</div>
								
								<h3 class="fs-20 text-grey footer-subtitle-after lh-1-2"><a class="text-white" target="_blank" href="#">Rejoindre<br>nos équipes</a></h3>
							</div>
							<div class="col-auto d-flex flex-column">
								<h3 class="fs-20 text-white footer-subtitle-after">Journal</h3>	
							</div>
						</div>
					</div>
					<div class="container-slip">
						<div class="d-flex sub-footer mt-15">
							<div class="col-auto text-left pl-0">
								<p class="text-grey fs-13 mt-10">COPYRIGHT - © TECHNIDESIGN SASU <?php echo the_date('Y'); ?> - SLIP® BORDEAUX -</p>
							</div>
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
				<div class="container-slip">
					<div class="d-flex align-items-center justify-content-between">
						<div class="pb-15 pt-10 pl-10 pr-15 fs-20">
							<p class="text-white lh-1-4 mb-0">
								Ce site internet utilise des cookies pour vous assurer une meilleur expérience utilisateur.<br>
								Pour en savoir + sur notre politique de confidentialité, <a class="text-white" href="#">cliquez-ici</a>.
							</p>
						</div>
						<div class="align-items-center cookie-notifs-child justify-content-between d-flex pl-20 fs-15">
							<button id="cookieButton" class="anim-300 btn-white">Ok, j'ai compris</button>
						</div>
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
