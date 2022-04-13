<?php 
	// Fetching the header
    get_header();
?>


        <main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<!-- The loop: -->
                                <?php while ( have_posts() ) {
                                    the_post(); ?> <!-- Function for iterating through the posts -->
								<?php the_post_thumbnail();?> <!-- Fetching the thumbnail for the post -->
								<div class="text">
									<h1><?php the_title(); ?></h1> <!-- Fetching the thumbnail for the post -->
									<p><?php the_content(); ?></p> <!-- Fetching the content for the post -->
                                <?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>


<?php 
	// Fetching the footer
    get_footer();
?>