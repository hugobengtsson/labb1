<?php 
	// Fetching the header
    get_header();
?>



        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<!-- The loop: -->
                            <?php while ( have_posts() ) {
                                the_post(); ?> <!-- Function for iterating through the posts -->
							<article>
								<?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image'] ); ?> <!-- Fetching the thumbnail -->
								<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <!-- Fetching the permalink and title of the post -->
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i><?php the_date(); ?> <!-- Fetching the date for the post -->
									</li>
									<li>
										<i class="fa fa-user"></i> <?php the_author_posts_link();; ?> <!-- Fetching the author for the post -->
									</li>
									<li>
										<i class="fa fa-tag"></i> 
                                        <?php the_category("string").","; ?> <!-- Fetching the category(s) for the post -->
									</li>
								</ul>
								<p><?php the_content(); ?></p> <!-- Fetching the content of the post -->
							</article>
							
							<!-- End while -->
                            <?php } ?>

						</div>
						<?php get_template_part('./templates/sidebar-template'); ?> <!-- Fetching template for the sidebar -->
					</div>
				</div>
			</section>
		</main>




<?php
	// Fetching footer
    get_footer();
?>