
<!-- Hämtar allt innehåll i header.php -->
<?php get_header(); ?>

	<main>
		<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">

							<!-- Hämtar sidtitel.  -->
							<h1><?php wp_title(''); ?></h1>

							<div class="searchform-wrap">
							<form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/'));?>">
									<div>
									<label ><?php dynamic_sidebar('search-2') ?></label>

									<!-- Hämtar ett sökfält.  -->
										<?php get_search_form() ;?>
									</div>
								</form>
							</div>

							<!-- Hämtar informationen från template-theloop.php. En wordpress funktion som
								 genererar en lista av sidlänkar.  -->
							<?php get_template_part('/template-parts/template', 'theloop'); ?>
							<nav class="navigation pagination">
							<?php echo paginate_links(); ?>
							</nav> 
						</div> 
					</div>
				</div>
		</section>
	</main>


<!-- Hämtar allt innehåll i footer.php -->
<?php get_footer(); ?>