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
		 <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand"
		            href="<?=site_url('start');?>">
		            	<img src="<?php echo get_theme_file_uri('/img/celtic_logo.png'); ?>" alt="Logo Celtic Treats" height="70">
		            </a>
		        </div>
		        <div class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">
		            <li class="active"><a href="#">Home</a></li>
		            <li><a href="#about">About Us</a></li>
		            <li><a href="#about">Beef</a></li>
		            <li><a href="#about">Chicken</a></li>
		            <li><a href="#about">Pork</a></li>
		            <li><a href="#about">Rabbit</a></li>
		            <li><a href="#about">Buy</a></li>
		            <li><a href="#about">Contact</a></li>
		      
		          </ul>
		            <ul class="nav navbar-nav" style="float: right">
		            <li><a href="#contact" class="navbar-nav pull-right">
		            	<button class="btn btn-defaut">Order Now +353 (0) 087 395 60 20</button>
		            </a></li>
		          </ul>
		        </div>
		      </div>
		</div>
			
</main>



