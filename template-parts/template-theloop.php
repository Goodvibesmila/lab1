
<!-- En loop, som loopar igenom innehåll. -->
<?php if( have_posts() ): while( have_posts() ): the_post();?>

	<article>

	    <!-- Hämtar utvald bild.-->	
        <img src="<?php the_post_thumbnail_url('full'); ?>" />
	
        <!-- Hämtar URL från aktuell post/sida.
		     Hämtar inläggstitel. -->
        <h2 class="title"><a href = <?php the_permalink(); ?>><?php the_title(); ?> </a></h2>
        <ul class="meta">
		<li>

            <!-- Hämtar datum. -->
			<i class="fa fa-calendar"></i><?php echo get_the_date(); ?>
		</li>
		<li>
            <!-- Hämtar URL från aktuell post/sida.
				 Hämtar aktuell författare för en post. -->
            <i class="fa fa-user"></i><a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a>
		</li>
		<li>

            <!-- Hämtar information från en kategori som en post tillhör 
				 och visar informationen. -->
             <i class="fa fa-tag"></i> <?php the_category(', '); ?>
		</li>
		</ul>
            <!-- Hämtar en del av innehåll. -->
            <p><?php the_excerpt(); ?></p>
            
	</article>

<!-- Avslutar loopen. -->
<?php endwhile; else: endif;?>