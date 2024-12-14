<?php get_header(); ?>

<!-- Page Content -->
<div id="content">
	<div class="page">
		<div class="container">
			<!-- <div class="row">
				<div class="col-sm-9 col-sm-offset-3">
					<h1 class="page-header"><?php //the_title(); ?></h1>
				</div>
			</div> -->
			
			<div class="row bottom-margin-sm">		
				<div class="col-sm-3 hidden-xs">
					<?php get_sidebar(); ?>	
				</div>
				
					<div class="col-sm-9">
					    <h1 class="page-header"><?php the_title(); ?></h1>
						<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; else: ?>
						<?php _e('Sorry, this page does not exist.'); ?>
						<?php endif; ?>
					</div>
				
			</div><!-- /.row -->
		</div>	
	</div>	
</div>

<?php get_footer(); ?>
