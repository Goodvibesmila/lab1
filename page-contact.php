
<!-- Hämtar allt innehåll i header.php -->
<?php get_header(); ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<!-- Hämtar inläggstiteln. En loop, som loopar ut innehåll dynamiskt.
								 En funktion för innehållet på sidan.
								 Slutfunktion för loopen. -->
						<h1><?php wp_title(''); ?></h1>
							<?php if( have_posts() ): while( have_posts() ): the_post();?>
							<?php the_content() ?>
							<?php endwhile; else: endif;?>
						</div>
					</div>
				</div>
			</section>
		</main>

<!-- Hämtar allt innehåll i footer.php -->
<?php get_footer(); ?>