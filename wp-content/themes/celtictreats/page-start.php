<?php get_header();?>

<?php
include('template-parts/slider.php');
?>

<section>
	<header class="topproducts">
		<h1>New Products:</h1>
	</header>
	<div class="row">		
		<div class="col-xs-9 col-xs-offset-2 col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-3 col-lg-2 col-lg-offset-1">
			 <a href="<?= site_url('/products');?>">
			<div class="card image">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/pork_noses.jpg'); ?>" alt="Card image cap">
			  <div class="topleft btn-xs btn-danger">Top</div>
			  <div class="card-body">
			    <h5 class="card-title">Category: Pork</h5>
			       <p class="card-text">Pork Noses</p>		
			  </div>
			</div>
			</a>
		</div>
		<div class="col-xs-9 col-xs-offset-2 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">	
			<a href="<?= site_url('/products');?>">
			<div class="card image ">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/bone_natural.jpg'); ?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Category: Beef</h5>
			    <p class="card-text">Pork shoulder bones</p>
			  </div>	
			</div>
			</a>			
		</div>
		
		<div class="col-xs-9 col-xs-offset-2 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-3 col-lg-2 col-lg-offset-0">
			<a href="<?= site_url('/products');?>">
			<div class="card image">
			 <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/pork_legs.jpg'); ?>" alt="Card image cap">
			  <div class="topleft btn-xs btn-brown">Healty</div>
			  <div class="card-body">
			    <h5 class="card-title">Category: Pork</h5>
			    <p class="card-text">Pork Legs</p>	
			  </div>
			</div>
		</a>
		</div>
		<div class="col-xs-9 col-xs-offset-2 col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-0 col-lg-2 col-lg-offset-0">
			<a href="<?= site_url('/products');?>">
			<div class="card image">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/lamb_feet.jpg'); ?>" alt="Card image cap">
			  <div class="topleft btn-xs btn-success">New</div>
			  <div class="card-body">
			   <h5 class="card-title">Category: Lamb</h5>
			    <p class="card-text">Lamb Feet</p>	
			  </div>
			</div>
		</a>
		</div>

		<div class="col-xs-9 col-xs-offset-2 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-3 col-lg-2 col-lg-offset-0">
			<a href="<?= site_url('/products');?>">
			<div class="card image">
			  <img class="card-img-top" height="150" src="<?php echo get_theme_file_uri('/img/bone_natural.jpg'); ?>" alt="Card image cap">
			  <div class="topleft btn-xs btn-danger">Top</div>
			  <div class="card-body">
			    <h5 class="card-title">Category: Beef</h5>
			    <p class="card-text">Beef Cubes</p>	
			  </div>
			</div>
		</a>
		</div>
		<div class="clear"></div>
	</div>
</section>

<article class="test">
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

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
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="jumbo">
						<img class="img-responsive" style="height: 486px;" src="<?= the_field('jumboimage');?>" alt="">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="background-color: #f6ede0;" id="content">
						<div class="logojumbo">
							<img height="100" src="<?= the_field('jumblogo');?>" style="padding-top: 1em;" alt="Logo Celtic Treats">
						</div>
						<p><?= the_field('jumbohead'); ?></p>
						<p><?= the_field('jumbotext');?></p>
 
					</div>
				</div>
			</div>
		</div>
	</div>
</article>


<div class="parallax" style="background-image: url('<?php echo get_theme_file_uri('/img/paralax_dog.jpg'); ?>');">
	<div class="parallax-curtain">
	<div class="row">
		<div class="col-md-5 col-md-offset-3 brc">
			<h2>All products contain no artificial additives dnd conform with all BRC Quality Standards.</h2>
		</div>
		<div class="col-md-2 col-md-offset-0">
			<img class="cert" height="250" src="<?php echo get_theme_file_uri('/img/certyfikat.png'); ?>" alt="" style="padding-top: 6em;">
		</div>		
	</div>
	</div>
</div>


<section class="category">

	<h1 class="text-center">Categories</h1>
</section>

<div class="parallax2" style="background-image: url('<?php echo get_theme_file_uri('/img/bulldog_paralax.png'); ?>');">
	<div class="row cat_paralax">
		<div class="row">
			<div class="col-sm-4 col-md-3 col-md-offset-1">
				<div class="meat">
					<a href="<?=site_url('products/beef');?>">				 
					 <p class="card-text cat_name">Beef</p>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-3 col-md-offset-1">
				<div class="meat">
					<a href="<?=site_url('products/chicken');?>">				 
					 <p class="card-text cat_name">Chicken</p>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-3 col-md-offset-1">
				<div class="meat">
					<a href="<?=site_url('products/pork');?>">				 
					 <p class="card-text cat_name">pork</p>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4 col-md-3 col-md-offset-1">
				<div class="meat">
					<a href="<?=site_url('products/deer');?>">				 
					 <p class="card-text cat_name">deer</p>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-3 col-md-offset-1">
				<div class="meat">
					<a href="<?=site_url('products/lamb');?>">				 
					 <p class="card-text cat_name">Lamb</p>
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-md-3 col-md-offset-1">
				<div class="meat">
					<a href="<?=site_url('products/rabbit');?>">				 
					 <p class="card-text cat_name">Rabbit</p>
					</a>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!--<div class="meat">
	<a href="<?=site_url('products/beef');?>">				 
	 <p class="card-text cat_name">Beef</p>
	</a>
</div>-->


<?php get_footer(); ?>