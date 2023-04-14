
<?php get_header(); ?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
						<h1><?php wp_title(''); ?></h1>
							<?php get_template_part('/template-parts/template', 'theloop'); ?>
							<nav class="navigation pagination">
							<?php echo paginate_links(); ?>
							</nav> 
						</div> 
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
							<?php dynamic_sidebar('search') ?>
							<?php dynamic_sidebar('aside-1') ?>

							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>
		<?php get_footer(); ?>