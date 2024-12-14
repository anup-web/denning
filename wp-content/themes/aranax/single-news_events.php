<?php get_header(); ?>

	
<?php
 
add_filter( 'single_template', function( $template ) {
    global $post;
    if ( $post->post_type === 'news_events' ) {
        $locate_template = locate_template( "single-news_events.php" );
        if ( ! empty( $locate_template ) ) {
            $template = $locate_template;
        }
    }
    return $template;
} );
 
?>


<!-- Page Content -->
<div class="container">

	
	<div class="row top-mrg-xs btm-mrg-lg">
	
		<div class="col-sm-3 hidden-xs">
			<?php get_sidebar(); ?>	
		</div>
		
		<div class="col-sm-9">
	        
			<div class="top-mrg-md btm-mrg-sm"></div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<?php 
					$time_field = get_field_object('ne_time');		
					echo $time_field['value'];
					
					$date_field = get_field_object('ne_date');		
					echo ", " . $date_field['value'];
				?>	
				
				<?php 	
					$news_field = get_field_object('ne_description');		
					echo "<p class='top-mrg-sm'>" . $news_field['value'] . "</p>";
									
				  ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no news & events available.'); ?></p>
			<?php endif; ?>
	        
			
		</div>	
		
	</div>
	

	
</div>

<?php get_footer(); ?>