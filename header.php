<!-- Vi måste låta wordpress sköta det här med laddning av css/jsfiler.
  Wordpress har en säker mekanism och tar hand om det. Måste använda en que.
    Kopplar sina filer rätt. Använd wordpressdom genom att köa in sina filer.
     För css så kan man använda. wp_enqueue_style() - VART skriver man in den här
     koden?
     
     
     Hur hittar man vägen vart filen finns - genom koden:
     get_template_directory_uri().'/css/main.css'
     
     vart skriver man den koden och är det main, eller är det style, 
     man skriver för det är style man döpt huvudcss:en till?
     
     Lägger sin egen css i en undermapp. root css, ligger i style.css och sen
     gör man en egen css i en undermapp i assets. style.css måste laddas på en gång
     så därför kan det vara en fördel att lägga stylingen i en annan fil
     om den inte måste laddas direkt.
     
     --->


     <!-- get_template_part('side','double') side-double.php finns inte den
    så letar wordpress efter side.php.

        add_action('wp_head', 'min_function') - påverkar i head. 
        När php processorn kommer till head, så har man möjlighet
    att få sin egen kod körd, man kan så kallat "kroka in sig". Den här ligger
        i functions.php. Men körs när man kommer till wp_head.
    
        i bodyn finns motsvarande wp_body?
        Om man vill kroka in sig (andra utveckliare) så skriver man do_action
        add_action  - 
    
        do_action är individuellt för den platsen. Den raden. Då ska jag göra ngt
    och nu kom en php, då måste jag göra ngt, då kollar den på alla krokar, som krokat 
    upp sig mot den kroken så alla som krokar på den kroken. 
    < ?php do_action('before word'); ?> Before work är namnet på kroken.
    det kan andra använda.  då skriver man add_action('before word', emilia'); Man specar vad man lägger til
genom emilia - och använder add_actions i functions.php, och så gör man
    en funktion med namnen emilia med vad man vill göra. 
< ?php add_action('before_work'); ?>  ligger ngnstans i koden där man vill tillåta andra att adda kod
    och sen finns < ?php do_action('before word', emilia); ?> också i funktions, med en funktion som heter emilia.

    wp_head är också en krok. -->
    <!-- Jag har lagt till link nedan, samt title ovan.
         Funktion som gör att det går rätt till databasen..
         Head/header ligger längst upp.
         get style uri gör att man pekar mot sin style.css fil. wp_head är skrivet
         för att möjliggöra för andra utvecklare att komma åt/lägga till information.  -->


    <!-- Lagt till body_class. Möjliggör att man hämtar upp CSS för att styla bodyn.  -->
    <!-- < ?php body_class(); ?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> <?php wp_title(); ?></title>
	<link href="wp-content/themes/lab1-emiliatema/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="wp-content/themes/lab1-emiliatema/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="wp-content/themes/lab1-emiliatema/assets/css/style.css" rel="stylesheet" type="text/css" />
	<script src="wp-content/themes/lab1-emiliatema/assets/js/jquery.js"></script>
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" /> <?php wp_head(); ?>
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
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" />
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
						<ul class="menu">
							<li class="current-menu-item">
								<a href="index.html">Hem</a>
							</li>
							<li>
								<a href="blogg.html">Blogg</a>
							</li>
							<li>
								<a href="undersida.html">Undersida</a>
							</li>
							<li>
								<a href="undersida2.html">Undersida 2</a>
							</li>
							<li>
								<a href="undersida3.html">Undersida 3</a>
							</li>
							<li>
								<a href="undersida4.html">Undersida 4</a>
							</li>
							<li>
								<a href="kontakt.html">Kontakt</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
