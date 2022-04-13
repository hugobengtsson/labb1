<?php
	// Fetching the header
    get_header();
?>
	<!-- The loop: -->
    <?php while( have_posts() ) {
        the_post(); ?> <!-- Function for iterating through the posts -->

        <main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Kontakt</h1>
							<?php the_content();?> <!-- Fetching the content of the post -->
						</div>
					</div>
				</div>
			</section>
		</main>



    <?php } ?>




<?php
	// Fetching the footer
    get_footer();
?>