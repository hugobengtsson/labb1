<?php
    get_header();
?>


        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Sökresultat för: <?php the_search_query(); ?></h1>
							<div class="searchform-wrap">
								<form id="searchform" class="searchform">
									<!-- Fetching the built-in search form. -->
									<?php get_search_form(); ?>
									<!-- <div>
										<label class="screen-reader-text">Sök efter:</label>
										<input type="text" />
										<input type="submit" value="Sök" />
									</div> -->
								</form>
							</div>
							<?php while(have_posts()) {
								the_post();
							?>
							<article>
								<?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image'] ); ?>
								<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i><?php the_date(); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <?php the_author_posts_link();; ?>
									</li>
									<li>
										<i class="fa fa-tag"></i><?php the_category("string").","; ?>
									</li>
								</ul>
								<p><?php the_excerpt(); ?></p>
							</article>
							<?php }; ?>
							<nav class="navigation pagination">
								<?php echo paginate_links(); ?>
							</nav>
						</div>
					</div>
				</div>
			</section>
		</main>



<?php
    get_footer();
?>