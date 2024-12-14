<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

	<div class="row top-mrg-md btm-mrg-sm">
		<div class="col-sm-9 col-sm-offset-3">
			<h2 class="page-header"><?php the_title(); ?></h2>
		</div>
	</div>
	
	<div class="row top-mrg-xs btm-mrg-lg">
		<div class="col-sm-3 hidden-xs">
			<?php get_sidebar(); ?>	
		</div>
		
		<div class="col-sm-9">
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
			<?php endif; ?>
		</div>
		
	</div>	

</div>

<?php get_footer(); ?>
