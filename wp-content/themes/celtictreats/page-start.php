<?php get_header();?>

<section class="topproducts">
	<h1>Top Products:</h1>
	<div class="row">		
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-2 col-md-offset-1 col-lg-2">
			<div class="card image">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/bone_natural.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Category: Beef/Beef Lungs</h5>
			    <p class="card-text">Bone Natural</p>			    
			  </div>
			</div>
		</div>
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-md-2 col-md-offset-0  col-lg-2">
			<div class="card image ">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/beef_round.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Category: Beef/Beef Lungs</h5>
			    <p class="card-text">Bone Natural</p>
			    </div>	
			</div>
			
		</div>
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-md-2 col-md-offset-0 col-lg-2">
			<div class="card image">
			 <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/pork.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Category: Beef/Beef Lungs</h5>
			    <p class="card-text">Bone Natural</p>	
			  </div>
			</div>
		</div>
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-md-2 col-md-offset-0 col-lg-2">
			<div class="card image">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/chicken.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			   <h5 class="card-title">Category: Beef/Beef Lungs</h5>
			    <p class="card-text">Bone Natural</p>	
			  </div>
			</div>
		</div>
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-md-2 col-md-offset-0 col-lg-2">
			<div class="card image">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/bone_natural.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Category: Beef/Beef Lungs</h5>
			    <p class="card-text">Bone Natural</p>	
			  </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>

<article class="test">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">

			<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
			<div class="jumbotron">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<img class="img-responsive" height="150" src="<?= the_field('image');?>" alt="">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="logojumbo">
							<img height="100" src="<?= the_field('logo');?>" alt="">
						</div>
						
						<p><?= the_field('text');?></p>
 
					</div>
				</div>
			</div>
		</div>
	</div>
</article>

<section class="topproducts">
	<h1>Top Products:</h1>
	<div class="row">		
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-2 col-md-offset-1 col-lg-2">
			<div class="card image">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/bone_natural.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Category: Beef/Beef Lungs</h5>
			    <p class="card-text">Bone Natural</p>			    
			  </div>
			</div>
		</div>
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-md-2 col-md-offset-0  col-lg-2">
			<div class="card image ">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/beef_round.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Category: Beef/Beef Lungs</h5>
			    <p class="card-text">Bone Natural</p>
			    </div>	
			</div>
			
		</div>
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-md-2 col-md-offset-0 col-lg-2">
			<div class="card image">
			 <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/pork.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Category: Beef/Beef Lungs</h5>
			    <p class="card-text">Bone Natural</p>	
			  </div>
			</div>
		</div>
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-md-2 col-md-offset-0 col-lg-2">
			<div class="card image">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/chicken.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			   <h5 class="card-title">Category: Beef/Beef Lungs</h5>
			    <p class="card-text">Bone Natural</p>	
			  </div>
			</div>
		</div>
		<div class="col-xs-6 col-xs-offset-3 col-sm-6 col-md-2 col-md-offset-0 col-lg-2">
			<div class="card image">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/bone_natural.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Category: Beef/Beef Lungs</h5>
			    <p class="card-text">Bone Natural</p>	
			  </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>

<div class="parallax" style="background-image: url('<?php echo get_theme_file_uri('/img/paralax_dog.jpg'); ?>');">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 brc">
			<p>All products contain no artificial additives<br/> 
			and conform with all BRC Quality Standards</p>

			<!--<img height="110" src="<?php //echo get_theme_file_uri('/img/brc_food.png'); ?>" alt="">-->
		
		</div>
	</div>
</div>


<section class="category">
	<h1 class="text-center">Category</h1>

</section>

<div class="parallax2" style="background-image: url('<?php echo get_theme_file_uri('/img/bulldog_paralax.png'); ?>');">
	<div class="row cat_paralax">
		<div class="col-xs-2 col-sm-2 col-md-2 col-md-offset-2 col-lg-2">
			<div class="meat">
				 <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/001-bone.png'); ?>" alt="Card image cap">
			</div>
		</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			<div class="meat">
				 <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/001-bone.png'); ?>" alt="Card image cap">
			</div>		</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			<div class="meat">
				 <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/001-bone.png'); ?>" alt="Card image cap">
			</div>
		</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
			<div class="meat">
				 <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/001-bone.png'); ?>" alt="Card image cap">
			</div>
		</div>
	</div>
</div>





<?php get_footer(); ?>