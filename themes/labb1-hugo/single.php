<?php 
    get_header();
?>



        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">

                            <?php while ( have_posts() ) {
                                the_post(); ?>
                            
							<article>
								<?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image'] ); ?>
								<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i><?php the_date(); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <?php the_author_posts_link();; ?>
									</li>
									<li>
										<i class="fa fa-tag"></i> 
                                        <?php the_category("string").","; ?>
									</li>
								</ul>
								<p><?php the_content(); ?></p>
							</article>
							
							<!-- End while -->
                            <?php } ?>

						</div>
						<?php get_template_part('./templates/sidebar-template'); ?>
					</div>
				</div>
			</section>
		</main>










<?php
    get_footer();
?>