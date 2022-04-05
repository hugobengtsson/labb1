<?php 
    get_header();
?>


        <main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                                <?php while ( have_posts() ) {
                                    the_post(); ?>
								<?php the_post_thumbnail();?>
								<div class="text">
									<h1><?php the_title(); ?></h1>
									<p><?php the_content(); ?></p>
                                <?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>


<?php 
    get_footer();
?>