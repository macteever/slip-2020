<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158278422-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-158278422-1');
		</script>
		<script data-ad-client="ca-pub-6414740540134747" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) // { echo ' :'; }  bloginfo('name'); ?></title>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon.png" rel="apple-touch-icon-precomposed">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon-16x16.png">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/safari-pinned-tab.svg" color="#1e1e1e">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
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
		<?php
		$term = get_queried_object();

		if((int)$term->parent) {
			$child_term = 'archive-subcat';
			// echo $child_term;
		}else{
			$child_term = 'archive-cat';
			// echo $child_term;
		} 
		?>
		<body id="<?php echo $child_term; ?>" <?php body_class(); ?>>
		<!-- MASK RESPONSIVE -->
		<!-- <div id="mask-responsive" class="">
			<div class="h-100 d-flex flex-column justify-content-center align-items-center">
				<div class="text-center">
					<?php // include get_template_directory().'/includes/logo-baseline.php'; ?>
				</div>	
				<div class="mt-80 pl-30 pr-30">
					<h3 class="text-center text-white fs-28 mb-15">Site temporairement indisponible depuis un mobile, connectez-vous avec votre ordinateur.</h3>
					<h4 class="text-center text-white fs-20">Mobile website temporary unavailable, please come with your computer.</h4>
				</div>
			</div>
		</div> -->
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header class="header clear" role="banner">
				<!-- nav -->
				<div class="container-fluid menu-container anim-300 bkg-menu">
					<div class="container">
						<?php require 'includes/header-left.php'; ?>
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
