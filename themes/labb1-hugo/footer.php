
		<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<?php dynamic_sidebar('footer1'); ?> <!-- Fetching widget "footer1" -->
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php dynamic_sidebar('footer2'); ?> <!-- Fetching widget "footer2" -->
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php dynamic_sidebar('footer3'); ?> <!-- Fetching widget "footer3" -->
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<script src="<?php echo get_template_directory_uri().'/js/script.js';?>"></script>
    <?php wp_footer(); ?> <!-- Function for letting other developers hooking in to the footer. -->
</body>
</html>