<!DOCTYPE html>
<html>


<head>
	<meta charset="UTF-8" />

	<!-- Hämtar inläggstitel.
		 Hämtar URI för det nuvarande temats stylesheet. En
		 inbyggd wordpressfunktion.  -->
	<title> <?php wp_title(); ?></title>
    <link href="<?php echo get_stylesheet_uri(); ?>" >

	<!-- En inbyggd wordpressfunktion som inkluderar all metainformation, men
		 även script och stilmallar som behövs i
		 head. -->
	<?php wp_head(); ?>
</head>


<body>
	<div id="wrap">
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">

					<!-- Hämtar URL för "hem" på sidan.
						 En wordpressfunktion som hämtar och skriver ut webbsidans namn. -->
					<a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					</div>


					<div class="col-sm-6 hidden-xs">
					<form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/'));?>">
							<div>

							<!-- Funktionen hämtar ett sökfält. -->
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
		<form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/'));?>">
				<div>
				<!-- Funktionen hämtar ett sökfält. -->
				<?php get_search_form() ;?>
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

					<!-- Funktion för en huvudmeny -->
						<?php 
						wp_nav_menu(
							array('menu' => 'huvudmeny', 'theme_location' => 'huvudmeny', 'items_wrap' => '<ul class="menu">%3$s</ul>')
						);
						?>
					</div>
				</div>
			</div>
		</nav>
