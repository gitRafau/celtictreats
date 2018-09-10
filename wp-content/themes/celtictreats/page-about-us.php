<?php get_header();?>

<div class="container-fluid">
<div class="row" style="margin-top: 2em; border-top: solid .05em #6d5531; border-bottom: solid .05em #6d5531;">
	<div class="col-md-3 bread_box">
		<span class="breadcrumps"><?php the_breadcrumb(); ?></span>
	</div>
	<div class="col-md-5 col-md-offset-0">
		<h1 class="contact">About Us</h1>
	</div>
	<div class="clearfix"></div>
</div>
</div>

<article class="about">
<div class="containter-fluid">
	<div class="row">
		<div class="col-md-3">
			<img src="<?= the_field('logo');?>" alt="Logo Celtic Treats" height="300">
		</div>
		<div class="col-md-8 col-md-offset-1">
			
			<?= the_field('text');?>
			
		</div>
	</div>
</div>
</article>

<?php get_footer(); ?>