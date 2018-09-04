<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">			
		<title><?php bloginfo('title');?></title>

		<?php wp_head(); ?>

	</head>
	<body>
		<main class="container-fluid">
			<div class="row">
  
				<div class="col-md-12" style="background-color: black; height: 300px;">
					<!--<div class="owl-carousel owl-theme"> 
					  <div class="item"><img src="<?php echo get_theme_file_uri('/img/fullimage1.jpg'); ?>" alt="The Last of us"></div>
					  <div class="item"><img src="<?php echo get_theme_file_uri('/img/fullimage2.jpg'); ?>" alt="GTA V"></div>
					  <div class="item"><img src="<?php echo get_theme_file_uri('/img/fullimage3.jpg'); ?>" alt="Mirror Edge"></div>				 
					</div>-->
					<a class="navbar-brand" href="/">
						<img src="<?php echo get_theme_file_uri('img/logo_nav.png'); ?>" alt="">
					</a>

					<nav class="col-md-6 col-md-offset-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
					</ul>

					</nav>
					<button class="btn btn-warning">
						<img src="<?php echo get_theme_file_uri('img/phone_icon.png');?>" height=20 alt="">
						Order Now + 353 (0) 087 395 60 20
					</button>
				</div>					
			</div>
		</main>