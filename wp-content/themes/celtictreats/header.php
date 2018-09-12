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
			
		<nav class="container-fluid" style="background-image: url('<?php echo get_theme_file_uri('/img/nav_background.png'); ?>'); height: 230px; background-repeat: no-repeat; background-position: bottom;">
		<div class="row">
		 <div class="container-fluid">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <img src="<?php echo get_theme_file_uri('/img/hamburgermenu.png'); ?>" alt="Logo Celtic Treats" class="img-responsive" style="padding-top: 1em;">
		          </button>
		          <a class="navbar-brand" href="<?=site_url('start');?>">
		            	<img src="<?php echo get_theme_file_uri('/img/celtic_logo.png'); ?>" alt="Logo Celtic Treats" height="70" class="img-responsive">
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
		            <ul class="nav navbar-nav">
		            <li>
		            	
		            	<button class="navbar-nav pull-right btn-lg btn-block">
		            		<img src="<?php echo get_theme_file_uri('/img/phone_icon.png'); ?>" alt="Słuchawka telefonu w kolorze białym" height="40">
		            		<span>Order Now</span>
		            		<span>+ 353 (0) 87 935 60 20</span>
		            	</button>
			            
			        </li>
		          </ul>
		        </div>
		    </div>
		      </div>
		</div>
			
</nav>



