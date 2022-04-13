<?php 
	// Fetching the header
    get_header();
?>

        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Arkiv: <?php the_archive_title(); ?></h1> <!-- Fetching the title of the page -->

							<!-- The loop: -->
                            <?php while ( have_posts() ) {
                                the_post(); ?> <!-- Function for iterating through the posts -->
                            
							<article>
								<?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image'] ); ?> <!-- Fetching the post thumbnail -->
								<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <!-- Fetching the permalink & title for the post -->
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
								<p><?php the_excerpt(); ?></p> <!-- Fetching a shortend content of the post -->
							</article>
							
							<!-- End while -->
                            <?php } ?>

							<nav class="navigation pagination">
								<?php echo paginate_links(); ?> <!-- Fetching the paginate links if they are needed -->
							</nav>
						</div>
						<?php get_template_part('./templates/sidebar-template'); ?> <!-- Fetching template for the sidebar -->
					</div>
				</div>
			</section>
		</main>




<?php
	// Fetching the footer
    get_footer();
?>