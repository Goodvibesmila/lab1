
<!-- Hämtar allt innehåll i header.php -->
<?php get_header(); ?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">

						<!-- En loop, som loopar ut innehåll dynamiskt.
								 Titeln för inlägget. 
								 En funktion för innehållet på sidan.
								 Slutfunktion för loopen. -->
						<?php if( have_posts() ): while( have_posts() ): the_post();?>
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_content(); ?></p>	
								<?php endwhile; else: endif;?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">

							<!-- Funktion för en sid-menyn -->
								<?php 
								wp_nav_menu(
								array('menu' => 'sidemenu', 'menu_class' => 'side-menu', 'theme_location' => 'sidemenu')
								);
								?>
						</aside>
					</div>
				</div>
			</section>
		</main>
		
<!-- Hämtar allt innehåll i footer.php -->	
<?php get_footer(); ?>