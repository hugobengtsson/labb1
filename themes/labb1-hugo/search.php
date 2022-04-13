<?php
	// Fetching the header
    get_header();
?>


        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Sökresultat för: <?php the_search_query(); ?></h1> <!-- Fetching the search query -->
							<div class="searchform-wrap">
								<form id="searchform" class="searchform">
									<?php get_search_form(); ?> <!-- Fetching search form -->
								</form>
							</div>
							<!-- The loop: -->
							<?php while(have_posts()) {
								the_post(); ?> <!-- Function for iterating through the posts -->
							<article>
								<?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image'] ); ?> <!-- Fetching the thumbnail of the posts -->
								<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <!-- Fetching the permalink & title of the post -->
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i><?php the_date(); ?> <!-- Fetching the date of the post -->
									</li>
									<li>
										<i class="fa fa-user"></i> <?php the_author_posts_link();; ?> <!-- Fetching the author of the post -->
									</li>
									<li>
										<i class="fa fa-tag"></i><?php the_category("string").","; ?> <!-- Fetching the category(s) for the post -->
									</li>
								</ul>
								<p><?php the_excerpt(); ?></p> <!-- Fetching a shortend content of the post -->
							</article>
							<?php }; ?>
							<nav class="navigation pagination">
								<?php echo paginate_links(); ?> <!-- Fetching the paginate links if they are needed -->
							</nav>
						</div>
					</div>
				</div>
			</section>
		</main>



<?php
	// Fetching the footer
    get_footer();
?>