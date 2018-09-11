<?php

get_header(); ?>

	<section class="container-fluid coode404">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">

				<div class="jumbotron">
					<div class="content">
						<h1 class="page-title text-center"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

						<div class="text-center">
						<?php get_search_form(); ?>
					</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>

<?php get_footer(); ?>
