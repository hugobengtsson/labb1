<?php
	// Fetching the header
    get_header();
?>


        <main>
			<section>
				<div class="container">
					<div class="row">
						<!-- The loop: -->
                        <?php while( have_posts()) {
                            the_post(); ?> <!-- Function for iterating through the posts -->
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_title(); ?></h1> <!-- Fetching the title of the post -->
							<p><?php the_content(); ?></p> <!-- Fetching the content of the post -->
						</div>
                        <?php } ?>
						<aside id="secondary" class="col-xs-12 col-md-3">
                        <?php 
							// Fetching template for subpage menu
                            get_template_part('./templates/subpage-menu-template');

                        ?>
						</aside>
					</div>
				</div>
			</section>
		</main>





<?php
	// Fetching the footer
    get_footer();
?>