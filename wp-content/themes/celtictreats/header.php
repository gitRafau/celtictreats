<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" />			
		<title><?php bloginfo('title');?></title>

		<?php wp_head(); ?>

	</head>
	<body>
			
		<main class="container-fluid" style="background-image: url('<?php echo get_theme_file_uri('/img/nav_background.png'); ?>'); height: 200px; background-repeat: no-repeat; background-position: bottom;">
	<div class="row">
		<div class="col-md-2 col-lg-2">
			<img src="<?php echo get_theme_file_uri('/img/celtic_logo.png'); ?>" alt="" height="120">
		</div>

		<nav class="col-md-9 col-md-offset-1 col-lg-9">
			<p class="navbar-text" style="margin-top: 1.2em;">
				<a href="#" class="navbar-link">Home</a>
			</p>
			<p class="navbar-text" style="margin-top: 1.2em;">
				<a href="#" class="navbar-link">About us</a>
			</p>
			<p class="navbar-text" style="margin-top: 1.2em;">
				<a href="#" class="navbar-link">Beef</a>
			</p>
			<p class="navbar-text" style="margin-top: 1.2em;">
				<a href="#" class="navbar-link">Chicken</a>
			</p>
			<p class="navbar-text" style="margin-top: 1.2em;">
				<a href="#" class="navbar-link">Pork</a>
			</p>
			<p class="navbar-text" style="margin-top: 1.2em;">
				<a href="#" class="navbar-link">Rabbit</a>
			</p>
			<p class="navbar-text" style="margin-top: 1.2em;">
				<a href="#" class="navbar-link">Buy</a>
			</p>
			<p class="navbar-text" style="margin-top: 1.2em;">
				<a href="#" class="navbar-link">Contact</a>
			</p>

			<button class="btn btn-defaut phone" style="margin-top: 1em;">
				<img src="<?php echo get_theme_file_uri('img/phone_icon.png'); ?>" height="21" class="pull-left">Order Now +353 (0) 087 395 60 20</button>

		</nav>
	</div>
</main>