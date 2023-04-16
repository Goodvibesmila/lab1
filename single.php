
<!-- Hämtar allt innehåll i header.php -->
<?php get_header(); ?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">

						<!-- Informationen från template-theloop.php, en wordpress funktion som
								 Genererar en lista av sidlänkar.  -->
						
							<?php get_template_part('/template-parts/template', 'loopsingle'); ?>
						</div> 


						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/'));?>">
											<div>

											<!-- En wordpressfunktion som Hämtar/visar dynamiskt sidbarinnehåll. Search-1 är Id för
												 den funktionen som skapar en widget som innehåller rubriken "sök efter:". 
												
												 Den andra är för att hämta ett sökfält. -->
											<?php dynamic_sidebar('search-1') ?>
											<?php get_search_form() ;?>
											
											</div>
									</li>
								</ul>
										</form>


								<ul role="navigation">
									<li class="pagenav">

										<!-- En wordpressfunktion som Hämtar/visar dynamiskt sidbarinnehåll. Aside-1 är Id för
											 den funktionen som skapar en widget som innehåller navigeringslänkar. -->
										<?php dynamic_sidebar('aside-1') ?>
									</li>
								</ul>	
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

<!-- Hämtar allt innehåll i footer.php -->
<?php get_footer(); ?>