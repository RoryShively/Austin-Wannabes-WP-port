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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/all.min.js"></script>
		<!-- script(src="assets/js/nav.js") -->
		<!-- script(src="js/jquery.onepage-scroll.js") -->
	</head>
		
	<body class="cbp-spmenu-push">

		<!-- START NAV -->

		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<h3>Menu</h3>
			<a href="#">Watch Pilot</a>
			<a href="#">Behind the Scenes</a>
			<a href="#">Cast &amp; Crew</a>
			<a href="#">Social Media</a>
			<div class="donate">
				<p>!important: This donation does not currently go to Austin Wannabes!! Dont Use</p>
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
			<button id="showLeftPush"> 
				<div class="hamburglar is-closed" id="hamburger">
					<div class="burger-icon">
						<div class="burger-container">
							<span class="burger-bun-top"></span>
							<span class="burger-filling"></span>
							<span class="burger-bun-bot"></span>
						</div>
					</div>
					<!-- svg ring containter -->
					<div class="burger-ring">
						<svg class="svg-ring">
							<path class="path" fill="none" stroke="#111" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2">
						</svg>
						<!-- the masked path that animates the fill to the ring -->
					</div>
					<svg width="0" height="0">
						<mask id="mask">
							<path xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0000" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4">
						</mask>
					</svg>
					<div class="path-burger">
						<div class="animate-path">
							<div class="path-rotation"></div>
						</div>
					</div>		
				</div>
			</button>
		</nav>

		<!-- END NAV -->

		<div class="main onepage-wrapper">
			<section class="section splash1" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/AW.jpg);background-size:cover;">
				<div class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/aw.svg" data-selector="logo">
					<ul>
						<li>
							<a href="#" data-selector="li1">Watch Pilot</a>
						</li>
						<li>
							<a href="#" data-selector="li2">Behind the Scenes</a>
						</li>
						<li>
							<a href="#" data-selector="li3">Cast &amp; Crew</a>
						</li>
						<li>
							<a href="#" data-selector="li3">Social Media</a>
						</li>
					</ul>
				</div>
			</section>
			<section class="section splash2">
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
			<section class="section splash3">
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
								<div class="articleTitle">
									<?php the_field('title'); ?>
								</div>
								<div class="articleDate italic">
									<?php the_field('date'); ?>
								</div>
								<div class="articleDescription">
									<?php the_field('summary'); ?>
								</div>
								<button class="btn btn-primary-btn-lg articleBtn italic" type="button" data-toggle="modal" data-target="#myModal">
									Read More...
								</button>
							</div>
						</div>
					
					<?php
					  endforeach;
					  wp_reset_postdata();

					?>


					<div class="gallery-cell article">
						<div class="articlePhoto">
							<img src="img/rehersal.jpg">
						</div>
						<div class="articleLabel">
							<div class="articleTitle">
								Rehersals
							</div>
							<div class="articleDate italic">
								5/31/2015
							</div>
							<div class="articleDescription">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi rerum qui sint reprehenderit quidem sed repudiandae accusantium accusamus totam, veritatis sapiente tempore officiis cupiditate explicabo quia est nobis exercitationem eligendi!
							</div>
							<button class="btn btn-primary-btn-lg articleBtn italic" type="button" data-toggle="modal" data-target="#myModal">
								Read More...
							</button>
						</div>
					</div>
					<div class="gallery-cell article">2</div>
					<div class="gallery-cell article">3</div>
				</div>
			</section>
			<section class="section splash4">
				<div class="header">
					<h2>- Cast &amp; Crew -</h2>
				</div>
				<div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true, "pageDots": true, "prevNextButtons": true }'>
					<div class="gallery-cell crew">
						<div class="crewPhoto">
							<img src="img/angela-full.jpg">
						</div>
						<div class="crewLabel">
							<div class="crewName">
								Angela Marie
							</div>
							<div class="crewJob">
								Producer
							</div>
							<div class="crewJob">
								Actress
							</div>
						<div class="crewIMBD">
							IMBD &#9656;
						</div>
					</div>
				</div>
			</section>

			<section class="section splash5">
				<div class="header">
				</div>
			</section>

			<div class="design">
				<h5>Designed by</h5> 
				<img src="img/rory.svg">
			</div>
		</div>


		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Rehersals</h4>
						<div class="modalWrapper">
							<img src="img/rehersal.jpg">
						</div>
					</div>
					<div class="modal-body">
						<p>
							div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi totam nam veniam possimus ea quibusdam accusamus voluptates, rerum quo nihil eveniet ad atque voluptate commodi repellendus ex harum molestiae fugiat.
							</br>
							div Numquam aperiam culpa perspiciatis animi assumenda voluptas, perferendis officiis iure, ad quaerat excepturi saepe praesentium vel, tenetur deserunt? Accusamus eligendi, fugiat expedita quis laudantium veritatis dolorum nostrum sit cum dolores.
							</br>
							div Qui sed, quibusdam consequatur rerum, debitis, magnam reiciendis sequi quaerat, aliquid praesentium ullam at quos commodi autem distinctio voluptatibus nostrum aspernatur totam dolore? Rem id, veritatis excepturi libero nihil fugiat.
							</br>
							div Impedit culpa veniam ab vel explicabo odit at, rem adipisci sapiente voluptates dolorum deserunt est corrupti nisi laudantium placeat magni doloribus quidem quasi delectus unde ex eos natus, amet. Architecto.
							</br>
							div Odit sint corporis quam sed eos aspernatur, et nam laborum molestias veniam! Minus, atque. Sapiente, placeat ab labore quidem vitae! Aliquid eius earum ad cupiditate nulla iusto sunt ipsa atque.
							</br>
							div A totam quia repellat voluptas velit quod similique rerum aliquid in, deleniti consequatur nihil eos temporibus nulla aperiam? Doloremque provident recusandae, accusamus quae quidem totam dolorem in ab eos consequuntur.
							</br>
							div Earum fugiat sed, ipsum sint error saepe nesciunt omnis minus deserunt mollitia, labore amet quo, delectus commodi necessitatibus iure sunt neque culpa doloremque perspiciatis soluta? Cumque reprehenderit ea ad, non.
							</br>
							div Maxime modi ipsam tenetur fugit commodi consequatur sunt nulla labore, repellendus laudantium autem facere consectetur blanditiis recusandae excepturi, ex in optio unde minima expedita asperiores sint obcaecati dignissimos fugiat. A.
							</br>
							div Explicabo assumenda consequuntur esse, quidem suscipit aspernatur ipsum harum. Dolores modi soluta optio eveniet maxime veniam reprehenderit, aut esse. Quibusdam sit rerum in eaque delectus, doloremque voluptatem consequatur sed incidunt?
							</br>
							div Debitis quaerat mollitia cupiditate pariatur ducimus non alias quam aliquid aspernatur, eaque distinctio, odio ea molestias culpa libero maxime itaque deleniti eos, quos beatae atque aperiam doloribus reprehenderit. Rem, consectetur!
							</br>
							div Fugit nulla repellendus deleniti iusto totam ut at, dolor esse minus expedita, reiciendis ullam facere quisquam odio dolores voluptates dolorem. Commodi quos obcaecati laborum ea, omnis esse quae pariatur, amet.
							</br>
							div Molestiae corporis ipsam, in ut harum vitae facilis voluptates eveniet, nam dignissimos reprehenderit praesentium repudiandae aliquam facere beatae incidunt sed itaque commodi voluptas animi perspiciatis placeat. Inventore iure ducimus, earum.
							</br>
							div Sapiente totam iure vel facere sunt libero voluptates, alias nihil tempora placeat, dolor vitae aut nobis magnam, quos illum ex saepe nesciunt, provident obcaecati ratione laudantium sint officiis vero. Ut.
							</br>
							div Consectetur necessitatibus at eligendi illo a obcaecati, vel porro sapiente iure. Voluptates doloremque, recusandae qui ipsa sapiente voluptatum harum deleniti voluptas vero excepturi. Omnis fuga reprehenderit, fugit aspernatur ea distinctio?
							</br>
						</p>
					<div class="modal-footer">
						<button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>