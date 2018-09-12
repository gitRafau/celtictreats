<?php get_header();?>


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
		          	
			
		            <li class="active"><a href="<?= site_url('start');?>">Home</a></li>		            
					<li><a href="<?= site_url('about-us'); ?>">About Us</a></li>
        			

		             <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Beef</a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
        			</li>

		             <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chicken</a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
        			</li>

		             <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pork</a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
        			</li>

		             <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rabbit</a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Action</a></li>
			            <li><a href="#">Another action</a></li>
			            <li><a href="#">Something else here</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">Separated link</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">One more separated link</a></li>
			          </ul>
        			</li>
		            <li><a href="<?= site_url('start');?>">Buy</a></li>
		            <li><a href="<?= site_url('contact');?>">Contact</a></li>
		            <li>
		            			            	<button class="btn btn-block" style="background-color: #000;">
		            		<img src="<?php echo get_theme_file_uri('/img/phone_icon.png'); ?>" alt="Słuchawka telefonu w kolorze białym" height="40">
		            		<span>Order Now</span>
		            		<span>+ 353 (0) 87 935 60 20</span>
		            	</button>
		            </li>		      
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

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>


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