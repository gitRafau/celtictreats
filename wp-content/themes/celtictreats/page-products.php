<?php get_header();?>

<nav class="container-fluid" style="background-image: url('<?php echo get_theme_file_uri('/img/nav_background.png'); ?>'); height: 230px; background-repeat: no-repeat; background-position: bottom;">
		<div class="row">

			
		 		 <div class="container-fluid">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <img src="<?php echo get_theme_file_uri('/img/hamburgermenu.png'); ?>" alt="Logo Celtic Treats" class="img-responsive" style="padding-top: 1em;">
		          </button>
		         
		        </div>
		        <div class="collapse navbar-collapse">
		         <ul class="nav navbar-nav" style="justify-content: center; display: flex;">
		          	
		          
			
		            <li class="active"><a href="<?= site_url('start');?>">Home</a></li>		            
					<li><a href="<?= site_url('about-us'); ?>">About Us</a></li>
        			

		            <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Beef</a>
                      <ul class="dropdown-menu">                        
                        <li><a href="#">Beef Ears</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Beef Gullet Flat</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Beef Gullet Round</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Beef Liver</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Beef Lungs</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Beef Mix</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Beef Skin</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Beef Trochea Cut Peaces</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Beef Trochea 2 Pieces</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Beef Pizzles</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Calf Ears</a></li>
                      </ul>
                    </li>
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Beef Meat Strips</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Chicken Meat Strips</a></li>  
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Pork Meat Strips</a></li>                  
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Deer</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Deer Meat Strips</a></li>                    
                      </ul>
                    </li>

                     <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chicken</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Chicken Bits</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Chicken Necks</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Chicken Feet</a></li>
                      </ul>
                    </li>

                     <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pork</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">PorkNoses</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Pork Sholoder Bones</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Pork Legs</a></li>          
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lamb</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Lamb Feet</a></li>
                      </ul>
                    </li>

                     <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rabbit</a>
                      <ul class="dropdown-menu">
                        <li><a href="<?= site_url('products/rabbit/rabbit-ears');?>">Rabbit Ears</a></li>
                        
                      </ul>
                    </li>
		            <li><a href="<?= site_url('start');?>">Buy</a></li>
		            <li><a href="<?= site_url('contact');?>">Contact</a></li>
		            <!--<li>
		            	 <button class="btn btn-block" style="background-color: #806641;">
                            <a href="tel: + 353 (0) 87 935 60 20">
                            <img src="<?php //echo get_theme_file_uri('/img/phone_icon.png'); ?>" alt="Słuchawka telefonu w kolorze białym na brązowym tle" height="40">
                            <span>Order Now</span>
                            <span>+ 353 (0) 87 935 60 20</span>
                              </a>
                        </button>
		            </li>-->
		          </ul>
		            <ul class="clearfix"></ul>
		                  
		          
		        </div>
		    </div>
		      </div>
		</div>
			
</nav>


<nav class="container-fluid formobile" style="visibility: hidden;" style="background-image: url('<?php echo get_theme_file_uri('/img/nav_background.png'); ?>'); height: 230px; background-repeat: no-repeat; background-position: bottom;">
		<div class="row">			
		 		 <div class="container-fluid">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" onclick="openNav();">
		            <img src="<?php echo get_theme_file_uri('/img/hamburgermenu.png'); ?>" alt="Logo Celtic Treats" class="img-responsive" style="padding-top: 1em;">
		          </button>

				<div id="mySidenav" class="sidenav">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <a href="#">Home</a>
					  <a href="#">About Us</a>
					  <a href="#">Beef</a>
					  <a href="#">Chicken</a>
					  <a href="#">Pork</a>
					  <a href="#">Rabbit</a>
					  <a href="#">Buy</a>
					  <a href="<?= site_url('contact'); ?>">Contact</a>
					</div>



		          <a class="navbar-brand" href="<?=site_url('start');?>">
		            	<img src="<?php echo get_theme_file_uri('/img/celtic_logo.png'); ?>"  alt="Logo Celtic Treats" height="70" class="img-responsive">
		            </a>
		        </div>
		       </div>
		 </div>
</nav>


<div class="container-fluid">
		<h1 class="contact" style="margin:.2em 0;">All Products</h1>
</div>
	
<section class="products">
	
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