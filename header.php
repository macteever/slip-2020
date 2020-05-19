<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) // { echo ' :'; }  bloginfo('name'); ?></title>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon-16x16.png">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/safari-pinned-tab.svg" color="#1e1e1e">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php wp_head(); ?>
		<script>
				// conditionizr.com
				// configure environment tests
				conditionizr.config({
					assets: '<?php echo get_template_directory_uri(); ?>',
					tests: {}
				});
		</script>
		</head>
		
		<body <?php body_class(); ?>>
		
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header class="header clear" role="banner">
				<!-- nav -->
				<div class="container-fluid menu-container anim-300 bkg-menu zi-99 p-relative">
					<div class="container-slip">
						<?php require 'includes/header-left.php'; ?>
					</div>
				  </div>
				  <!-- submenu collections -->
				  <div class="container-fluid main-submenu main-submenu-collections anim-500">
						<ul class="col-xl-5 col-lg-5 ml-auto d-flex pb-30 mb-0">
							<?php if ( have_rows('submenu_collections', 'option') ) : ?>
								<?php while( have_rows('submenu_collections', 'option') ) : the_row(); ?>
							
									<li class="d-flex flex-column mr-30 align-items-start">
										<div class="pl-30 pt-30 pb-30 h-100" style="border-left: solid 2px <?php the_sub_field('bkg_color_link', 'option'); ?>">
											<h3 class="fs-22"><?php the_sub_field('title', 'option'); ?></h3>
											<?php if ( get_sub_field('icon', 'option') ) : $image = get_sub_field('icon', 'option'); ?>
												<div class="mt-10">
													<img class="d-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
												</div>
											<?php endif; ?>
											
											<p class="mt-10 mb-0">
												<?php the_sub_field('content', 'option'); ?>
											</p>
										</div>

										<button class="btn-custom mt-auto" style="background-color: <?php the_sub_field('bkg_color_link', 'option'); ?>;">
											<?php if ( get_sub_field('link', 'option') ) : $file = get_sub_field('link', 'option'); ?>
												<a class="text-white" href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
											<?php endif; ?>
										</button>
									</li>
							
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
				  </div>
				  <!-- submenu coupes -->
				  <div class="container-fluid main-submenu main-submenu-coupes anim-500">
					  <div class="col-xl-5 col-lg-5 ml-auto d-flex flex-column pb-30">
							<ul class="pb-40 pt-40 mb-0 pl-15">
							<?php if ( have_rows('submenu_coupes', 'option') ) : ?>
									<?php while( have_rows('submenu_coupes', 'option') ) : the_row(); ?>
							
										<li class="d-flex">
											<?php if ( get_sub_field('link', 'option') ) : $file = get_sub_field('link', 'option'); ?>
												<a class="d-flex align-items-end" href="<?php echo $file['url']; ?>">
													<?php if ( get_sub_field('icon', 'option') ) : $image = get_sub_field('icon', 'option'); ?>
														<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
													<?php endif; ?>
													<h3 class="ml-40 mb-0 fs-22 lh-1"><?php the_sub_field('title'); ?></h3>
												</a>
											<?php endif; ?>
										</li>
							
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
							<div>
								<a class="btn-black" href="">Explorer tous les articles</a>
							</div>
					  </div>
				  </div>
				<!-- /nav -->
			</header>
			<!-- /header -->
			<nav class="nav-mobile bkg-color-logo" role="navigation">
				<div class="row h-100 align-items-center">
					<?php wp_nav_menu( array( 'theme_location' => 'burger-menu' ) ); ?>
				</div>
			</nav>
