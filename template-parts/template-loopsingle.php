<?php if( have_posts() ): while( have_posts() ): the_post();?>
							<article>
								<img src="<?php the_post_thumbnail_url('full'); ?>" />
								<h2 class="title"><a href = <?php the_permalink(); ?>><?php the_title(); ?>
                                </a></h2>
                        		<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i><?php echo get_the_date(); ?>
									</li>
									<li>
                                    <i class="fa fa-user"></i><a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a>
									</li>
									<li>
                                        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
									</li>
								</ul>
                                <p><?php the_content(); ?></p>
								</article>
                        <?php endwhile; else: endif;?>