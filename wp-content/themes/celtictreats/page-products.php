<?php get_header();?>

<div class="container-fluid">
<div class="row" style="margin-top: 2em; border-top: solid .05em #6d5531; border-bottom: solid .05em #6d5531;">
	<div class="col-md-3 bread_box">
		<span class="breadcrumps"><?php the_breadcrumb(); ?></span>
	</div>
	<div class="col-md-5 col-md-offset-0">
		<h1 class="contact">Where To Buy</h1>
	</div>
	<div class="clearfix"></div>
</div>
</div>

<div class="containter-fluid">

<h1 class="text-center">Wszystkie Produkty</h1>
	<div class="row">

	</div>
	
</div>

<?php echo do_shortcode('[product id="63"]');?>

<?php get_footer(); ?>