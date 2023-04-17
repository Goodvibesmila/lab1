<!-- Hämtar allt innehåll i header.php -->
<?php get_header(); ?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12">

							<!-- En loop, som loopar ut innehåll dynamiskt.
								 Titeln för inlägget. 
								 En funktion för innehållet på sidan.
								 Slutfunktion för loopen. -->
						<?php if( have_posts() ): while( have_posts() ): the_post();?>
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_content(); ?></p>
								<?php endwhile; else: endif;?>
						</div>
					</div>
				</div>
			</section>
		</main>
<!-- Hämtar allt innehåll i footer.php -->	
<?php get_footer(); ?>