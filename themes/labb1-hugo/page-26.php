<?php
    get_header();
?>

    <?php while( have_posts() ) {
        the_post();
    ?>

        <main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Kontakt</h1>
							<?php the_content();?>
						</div>
					</div>
				</div>
			</section>
		</main>



    <?php } ?>




<?php
    get_footer();
?>