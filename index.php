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
		<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lily+Script+One" type="text/css"> -->
		<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/all.min.js"></script>
		<!-- script(src="assets/js/nav.js") -->
		<!-- script(src="js/jquery.onepage-scroll.js") -->
	</head>
		
	<body class="cbp-spmenu-push">

		<!-- START NAV -->

		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<h3>Menu</h3>
			<a href="#" data-selector="li1">Watch Pilot</a>
			<a href="#" data-selector="li2">Behind the Scenes</a>
			<a href="#" data-selector="li3">Cast &amp; Crew</a>
			<a href="#" data-selector="li4">Gallery</a>
			<div class="donate">
				<p>!important: This donation does not currently go to Austin Wannabes!! Dont Use</br>--------------------------------</p>
				<script async="async" src="https://www.paypalobjects.com/js/external/paypal-button.min.js?merchant=texaswildricefestival@gmail.com"
			    data-button="donate" 
			    data-name="Donation" 
			    data-quantity="1"
			    data-amount-editable="5.00" 
			    data-currency="USD" 
			    data-shipping="0" 
			    data-tax="0"
			    data-callback="http://texaswildricefestival.com"
			    data-return="http://texaswildricefestival.com">
			    </script>
			</div>
			<div class="social-media">
				<ul>
					<li>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.svg")>
					</li>
					<li>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.svg")>
					</li>
					<li>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.svg")>
					</li>
					<li>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.svg")>
					</li>
				</ul>
			</div>
			<button id="showLeftPush" data-selector="menuToggle"> 
				<div class="hamburglar is-closed" id="hamburger">
					
					<!-- ****** Menu Icon ****** -->
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40.167px" height="31.833px" viewBox="-4.09 -8.706 40.167 31.833" enable-background="new -4.09 -8.706 40.167 31.833" xml:space="preserve"><g id="open" display="none"><g display="inline"><path class="menuIconBar" fill="#FFFFFF" d="M-0.174-1.873c-1.608,0-2.917-1.309-2.917-2.917c0-1.607,1.308-2.916,2.917-2.916h32.333c1.608,0,2.917,1.309,2.917,2.916c0,1.608-1.309,2.917-2.917,2.917H-0.174z"/><path fill="#111111" d="M32.159-6.706c1.059,0,1.917,0.857,1.917,1.916s-0.858,1.917-1.917,1.917H-0.174c-1.059,0-1.917-0.858-1.917-1.917s0.858-1.916,1.917-1.916H32.159 M32.159-8.706H-0.174c-2.16,0-3.917,1.757-3.917,3.916c0,2.16,1.757,3.917,3.917,3.917h32.333c2.159,0,3.917-1.757,3.917-3.917C36.076-6.949,34.318-8.706,32.159-8.706L32.159-8.706z"/></g><g display="inline"><path class="menuIconBar" fill="#FFFFFF" d="M-0.174,10.127c-1.608,0-2.917-1.309-2.917-2.917c0-1.607,1.308-2.916,2.917-2.916h32.333c1.608,0,2.917,1.309,2.917,2.916c0,1.608-1.309,2.917-2.917,2.917H-0.174z"/><path fill="#111111" d="M32.159,5.294c1.059,0,1.917,0.857,1.917,1.916s-0.858,1.917-1.917,1.917H-0.174c-1.059,0-1.917-0.858-1.917-1.917s0.858-1.916,1.917-1.916H32.159 M32.159,3.294H-0.174c-2.16,0-3.917,1.757-3.917,3.916c0,2.16,1.757,3.917,3.917,3.917h32.333c2.159,0,3.917-1.757,3.917-3.917C36.076,5.051,34.318,3.294,32.159,3.294L32.159,3.294z"/></g><g display="inline"><path class="menuIconBar" fill="#FFFFFF" d="M-0.174,22.127c-1.608,0-2.917-1.309-2.917-2.917c0-1.607,1.308-2.916,2.917-2.916h32.333c1.608,0,2.917,1.309,2.917,2.916c0,1.608-1.309,2.917-2.917,2.917H-0.174z"/><path fill="#111111" d="M32.159,17.294c1.059,0,1.917,0.857,1.917,1.916s-0.858,1.917-1.917,1.917H-0.174c-1.059,0-1.917-0.858-1.917-1.917s0.858-1.916,1.917-1.916H32.159 M32.159,15.294H-0.174c-2.16,0-3.917,1.757-3.917,3.916c0,2.16,1.757,3.917,3.917,3.917h32.333c2.159,0,3.917-1.757,3.917-3.917C36.076,17.051,34.318,15.294,32.159,15.294L32.159,15.294z"/></g></g><g id="closed"><path class="menuIconBar" id="menuIconBar1" fill="#FFFFFF" d="M-0.174-0.123c-1.608,0-2.917-1.309-2.917-2.917c0-1.607,1.308-2.916,2.917-2.916h32.333c1.608,0,2.917,1.309,2.917,2.916c0,1.608-1.309,2.917-2.917,2.917H-0.174z"/><path class="menuIconBar" id="menuIconBar2" fill="#FFFFFF" d="M-0.174,10.127c-1.608,0-2.917-1.309-2.917-2.917c0-1.607,1.308-2.916,2.917-2.916h32.333c1.608,0,2.917,1.309,2.917,2.916c0,1.608-1.309,2.917-2.917,2.917H-0.174z"/><path class="menuIconBar" id="menuIconBar3" fill="#FFFFFF" d="M-0.174,20.377c-1.608,0-2.917-1.309-2.917-2.917c0-1.607,1.308-2.916,2.917-2.916h32.333c1.608,0,2.917,1.309,2.917,2.916c0,1.608-1.309,2.917-2.917,2.917H-0.174z"/></g></svg>

				</div>
			</button>
		</nav>

		<!-- END NAV -->

		<div class="blackout-page"></div>
		<div class="main onepage-wrapper" data-selector="blackOutPage">
			
			<section class="section splash1" data-selector="splash1" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/aw_new.jpg);background-size:cover;background-position:center;">
				<nav class="nav-toggle">
					<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/aw.svg" data-selector="logo"> -->
					<ul>
						<li data-selector="li1">
							<a href="#" data-selector="li1">Watch Pilot</a>
						</li>
						<li>
							<a href="#" data-selector="li2">Behind the Scenes</a>
						</li>
						<li>
							<a href="#" data-selector="li3">Cast &amp; Crew</a>
						</li>
						<li>
							<a href="#" data-selector="li4">Gallery</a>
						</li>
					</ul>
				<nav>
				<div class="blackout-header" data-selector="blackoutheader", style="background-color:black;opacity:0;width:100%;"></div>
				<div class="gradient">
					<div class="arrow-svg" data-selector="li1" data-svg="arrow">
						<svg id="sArrow" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="58.237px" height="58.25px" viewBox="-13.125 -13.125 58.237 58.25" enable-background="new -13.125 -13.125 58.237 58.25" xml:space="preserve"><g id="Layer_1"><g><path fill="#FFFFFF" d="M16,44.125C0.492,44.125-12.125,31.508-12.125,16c0-15.508,12.617-28.125,28.125-28.125c15.508,0,28.125,12.617,28.125,28.125C44.125,31.508,31.508,44.125,16,44.125z"/><path fill="#111111" d="M16-11.125c14.957,0,27.125,12.168,27.125,27.125c0,14.958-12.168,27.125-27.125,27.125 S-11.125,30.957-11.125,16C-11.125,1.042,1.043-11.125,16-11.125 M16-13.125c-16.085,0-29.125,13.04-29.125,29.125 c0,16.086,13.04,29.125,29.125,29.125c16.086,0,29.125-13.039,29.125-29.125C45.125-0.085,32.086-13.125,16-13.125L16-13.125z"/></g><path id="sPointer" fill="#111111" d="M28.987,9.159L16,20.938L3.018,9.161C2.179,8.402,0.64,8.399-0.195,9.16l-1.309,1.188 c-0.38,0.345-0.588,0.792-0.588,1.263c0,0.47,0.208,0.917,0.586,1.26l15.693,14.237c0.413,0.375,0.979,0.582,1.595,0.582 l0.219-0.008l0.22,0.008c0.619,0,1.184-0.205,1.591-0.576l15.695-14.241c0.378-0.343,0.586-0.79,0.586-1.261 c0-0.472-0.208-0.92-0.586-1.264l-1.311-1.188C31.359,8.401,29.821,8.401,28.987,9.159z"/></g></svg>
					</div>
				</div>
			</section>

			<section class="section splash2" data-selector="splash2">
				<div class="header">
					<h2>- Watch Pilot -</h2>
				</div>
				<div class="splash2container">
					<div class="containingBlock">
						<div class="videoWrapper">
							<iframe width="100%" height="100%" src="https://www.youtube.com/embed/gxHtmRwez1E" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="videoDescription">
						<h4>S01E01: Pilot</h4>
						<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id numquam quas voluptates vitae, quo tenetur perferendis quidem voluptatibus deleniti dicta. Ratione veritatis nesciunt dolorum ut dicta labore aut soluta blanditiis! </p>
						<p> Saepe officiis qui, hic suscipit, consectetur odit. Earum quis maiores blanditiis molestiae fugiat. Placeat, vitae, fuga. Quasi minima in ut quia labore, quae cum. Fuga sunt doloremque, quod culpa accusamus? </p>
					</div>
				</div>
			</section>

			<section class="section splash3" data-selector="splash3">
				<div class="header">
					<h2>- Behind the Scenes -</h2>
				</div>
				<div class="main-gallery js-flickity" data-flickity-options='{ "cellAllign": "center", "contain": true }'>

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

					<?php
					  endforeach;
					  wp_reset_postdata();

					?>
			


					

				</div>
			</section>

			<section class="section splash5" data-selector="splash5">
				<div class="header">
					<h2>- Gallery -</h2>
				</div>

				<?php
					$media_query = new WP_Query(
					    array(
					        'post_type' => 'attachment',
					        'post_status' => 'inherit',
					        'posts_per_page' => -1,
					    )
					);
					$list = array();
					foreach ($media_query->posts as $post) {
					    $list[] = wp_get_attachment_url($post->ID);
					}
					// do something with $list here;

				?>

				<?php
				    for ($i = 0; $i < count($list); ++$i) {
				    	echo '<img src="';
				        print $list[$i];
				        echo '">';
				    }
				?>


			</section>

			<div class="design">
				<h5>Designed by</h5> 
				<img src="img/rory.svg">
			</div>
		</div>




	</body>
</html>