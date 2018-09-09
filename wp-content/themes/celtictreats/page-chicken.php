<?php get_header();?>

<div class="container-fluid" style="background-image: url('<?php echo get_theme_file_uri('/img/nav_background.png'); ?>'); height: 200px; background-repeat: no-repeat; background-position: bottom;">
	<div class="row">
		<div class="col-md-2 col-lg-2">
			<img src="<?php echo get_theme_file_uri('/img/celtic_logo.png'); ?>" alt="" height="120">
		</div>

		<nav class="col-md-9 col-md-offset-1">
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


</div>

<div class="row" style="margin-top: 2em; border-top: solid .05em #6d5531; border-bottom: solid .05em #6d5531;">
	<div class="col-md-3 bread_box">
		<span class="breadcrumps">Home/Buy/WhereToBuy</span>
	</div>
	<div class="col-md-5 col-md-offset-0">
		<h1 class="contact">Chicken</h1>
	</div>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>