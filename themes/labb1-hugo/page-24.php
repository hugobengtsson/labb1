<?php
	// Fetching the header
    get_header();
?>

        <main>
			<section>
				<div class="container">
					<div class="row">
						<!-- The loop: -->
                        <?php while( have_posts() ) {
                            the_post(); ?> <!-- Function for iterating through the posts -->
						<div class="col-xs-12 col-sm-8 col-md-6">
							<h1><?php the_title(); ?></h1> <!-- Fetching the title of the post -->
							<p><?php the_content(); ?></p> <!-- Fetching the content of the post -->
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
							<?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image'] ); ?> <!-- Fetching the thumbnail for the post -->
						</div>
                        <?php } ?>
					</div>
				</div>
			</section>
		</main>




<?php
	// Fetching the footer
    get_footer();
?>