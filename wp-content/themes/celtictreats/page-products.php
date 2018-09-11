<?php get_header();?>

<div class="container-fluid">
<div class="row" style="margin-top: 2em; border-top: solid .05em #6d5531; border-bottom: solid .05em #6d5531;">
	<div class="col-md-3 bread_box">
		<span class="breadcrumps"><?php the_breadcrumb(); ?></span>
	</div>
	<div class="col-md-6 col-md-offset-0">
		<h1 class="contact">Wszystkie produkty</h1>
	</div>
	<div class="clearfix"></div>
</div>
</div>

<section>
	
	<div class="container" style="margin-top: 2em;">		
		
		<?php
            while (have_posts()) {
                the_post();
                ?>

                <?php the_content(); ?>

            <?php }
            ?>
  							
	</div>
</section>

<?php echo do_shortcode('[product id="63"]');?>

<?php get_footer(); ?>