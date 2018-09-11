<?php get_header();?>

<div class="row" style="margin-top: 2em; border-top: solid .05em #6d5531; border-bottom: solid .05em #6d5531;">
	<div class="col-md-3 bread_box">
		<span class="breadcrumps"><?php the_breadcrumb(); ?></span>
	</div>
	<div class="col-md-5 col-md-offset-0">
		<h1 class="contact">Beef</h1>
	</div>
	<div class="clearfix"></div>
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

<?php get_footer(); ?>