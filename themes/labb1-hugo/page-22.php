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
						<div id="primary" class="col-xs-12">
							<h1><?php the_title(); ?></h1> <!-- Fetching the title of the post -->
							<p><?php the_content(); ?></p> <!-- Fetching the content of the post -->
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