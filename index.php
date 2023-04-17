INDEX
<!-- Hämtar allt innehåll i header.php -->

<?php get_header(); ?>

		<main>
			
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                                
                                <!-- Hämtar utvald bild, inläggstitel och inläggsinnehåll. -->
								<img src="<?php the_post_thumbnail_url(); ?>" />
								<div class="text">
								<!-- Hämtar inläggstiteln. -->
                                <h1><?php the_title(); ?></h1>
								<!-- Hämtar innehåll. -->
                                <p><?php the_content(); ?></p>
                                </div>
                                
							</div>
						</div>
					</div>
				</div>
			</section>
			
		</main>

<!-- Hämtar allt innehåll i footer.php -->

<?php get_footer(); ?>