<?php get_header(); ?>

	
<?php

add_filter( 'single_template', function( $template ) {
    global $post;
    if ( $post->post_type === 'notices' ) {
        $locate_template = locate_template( "single-notices.php" );
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
					$date_field = get_field_object('notice_date');		
					echo "Published On: " . $date_field['value'];
					
					$desc_field = get_field_object('notice_description');		
					echo "<p class='top-mrg-sm'>" . $desc_field['value'] . "</p>";
					
					$attc_field = get_field_object('notice_attachment');	
					if(isset($attc_field['value']['url'])) {
						echo "<a target='_blank' href='" . $attc_field['value']['url'] . "'>Download</a>";
					}
					
				  ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no notice available.'); ?></p>
			<?php endif; ?>
	        
			
		</div>	
		
	</div>
	

	
</div>

<?php get_footer(); ?>