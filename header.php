<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> <?php wp_title(); ?></title>
	<!--
	<link href="wp-content/themes/lab1-emiliatema/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="wp-content/themes/lab1-emiliatema/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="wp-content/themes/lab1-emiliatema/assets/css/style.css" rel="stylesheet" type="text/css" />
	<script src="wp-content/themes/lab1-emiliatema/assets/js/jquery.js"></script>
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
-->
	<?php wp_head(); ?>
</head>
<body>
	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="index.html">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<?php get_search_form() ;?>
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<?php 
						wp_nav_menu(
							array('menu' => 'huvudmeny', 'theme_location' => 'huvudmeny', 'items_wrap' => '<ul class="menu">%3$s</ul>')
						);
						?>
					</div>
				</div>
			</div>
		</nav>
