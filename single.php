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
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/all.min.js"></script>
		<!-- script(src="assets/js/nav.js") -->
		<!-- script(src="js/jquery.onepage-scroll.js") -->
	</head>
	

	<p>WORKS!!!!</p>

	<?php
					  $today = date('Ymd');
					  $myposts = get_posts(array(
					    'post_type' => 'article',
					    'posts_per_page'  => -1,

					    'meta_key' => 'date',
					    'orderby' => 'meta_value_num',
					    'order' => 'ASC',
					  ));

					  foreach ($myposts as $post) : setup_postdata($post);
					?>

	<div class="gallery-cell article">
							<div class="articlePhoto">
								<img src="<?php the_field('main_image'); ?>" />
							</div>
							<div class="articleLabel">
								<div class="articleTitle"><?php the_field('title'); ?></div>
								<div class="articleDate italic"><?php the_field('date'); ?></div>
								<div class="articleDescription">
									<?php the_field('summary'); ?>
								</div>
									<a class="btn btn-primary-btn-lg articleBtn italic" href="?article=<?php echo the_field('title'); ?>">
										Read More...
									</a>
							</div>
						</div>