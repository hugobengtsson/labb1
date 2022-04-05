<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php wp_title(); ?></title>
	<link href="<?php echo get_template_directory_uri().'/css/font-awesome.css';?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri().'/css/bootstrap.css';?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri().'/css/style.css';?>" rel="stylesheet" type="text/css" />
	<script src="<?php echo get_template_directory_uri().'/js/jquery.js';?>"></script>
    <?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="/">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" />
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

        <nav id="nav">
			<div class="container">
				<div class="row">

                        <?php 

                            wp_nav_menu( array(
                                'theme_location' => 'main_menu',
                                'container_class' => "col-xs-12"
                            ) ); 

                        ?>

				</div>
			</div>
		</nav>
