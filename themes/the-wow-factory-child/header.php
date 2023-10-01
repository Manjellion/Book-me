<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Load Stylesheets -->
    <link rel="stylesheet" type="text/css" media="all" href="/assets/css/style.php?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/css/style.php'); ?>" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- WOW JS -->
    <script src="/assets/js/wow.js"></script>

    <!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/9e3cacc5e5.js" crossorigin="anonymous"></script>

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'the-wow-factory' ); ?></a>

	<header class="site-header">
		<nav id="header" class="navbar navbar-expand-md">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-4">
						<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
							<img src="https://t4.ftcdn.net/jpg/04/92/24/55/360_F_492245515_B06u4GqjtSox45R7iDOCLIamWIJipzFT.jpg" />
						</a>
					</div>
					<div class="col-12 col-lg-8 d-flex justify-content-end">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'the-wow-factory' ); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div id="navbar" class="collapse navbar-collapse justify-content-end">
							<?php
								// Loading WordPress Custom Menu (theme_location).
								wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'container'      => '',
										'menu_class'     => 'navbar-nav',
										'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
										'walker'         => new WP_Bootstrap_Navwalker(),
									)
								);
							?>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<main id="main">