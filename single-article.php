<!doctype html>
<html>
	<head lang="en">
		<meta charset="UTF-8">
		<title>Rory Shively - Design &amp; Development</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="author" content="Rory Shively">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css">
		<!-- link(rel="stylesheet", href="css/onepage-scroll.css", type="text/css") -->
		<!-- link(rel="stylesheet", href="css/hamburger.css", type="text/css") -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" type="text/css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lily+Script+One" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/articles.min.js"></script>
		<!-- script(src="assets/js/nav.js") -->
		<!-- script(src="js/jquery.onepage-scroll.js") -->
		<?php wp_head(); ?>
	</head>
	<body>
	
		<section class="article-page">

			<div class="article-content" id="article-content">
				
				<div class="article-head">
					<h2><?php the_field('title'); ?></h2>
					<?php echo do_shortcode('[mashshare shares="true" buttons="true" align="right" ]'); ?>
				</div>

				<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>

				<div class="article-gradient"></div>
				<div class="article-gradient-padding"></div>
			</div>

			<div class="article-gallery">

				<div class="article-gallery-cell" id="article-gallery-cell">
					
				</div>
				
			</div>

			<div class="article-footer">
				<div class="go-back"><a href="<?php echo get_option('home'); ?>/">go back home</a></div>
				<!-- <div class="go-top" id="goTop">top of page</div> -->
			</div>

		</section>

		<?php wp_footer(); ?>

	</body>