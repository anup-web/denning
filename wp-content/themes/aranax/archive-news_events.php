<?php
/**
* Template Name: News Events
*/
?>
<?php get_header(); ?>

<!-- Page Content -->
<div id="content">
	<div class="page">
		<div class="container">
			
			
			<div class="row bottom-margin-sm">		
				<div class="col-sm-3 hidden-xs">
					<?php get_sidebar(); ?>	
				</div>
				
				<div class="col-sm-9">
					<div class="top-mrg-md btm-mrg-sm">		
						<h2 class="page-header">News & Events</h2>		
					</div>
					<?php
					$type = 'news_events';
					$args=array(
						'post_type' => $type,
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'caller_get_posts'=> 1);

					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ){
						while($my_query->have_posts()) : $my_query->the_post(); 
						?>
						  
						<div class="notice-item">
							<div class="col-sm-1">
								<?php 
								$date_fld = get_field_object('ne_date');
								$date	= $date_fld['value'];
								$event_date	=	explode("-", $date);
								$month_arr = array("01"=>"Jan", "02"=>"Feb", "03"=>"Mar", "04"=>"Apr",
									"05"=>"May", "06"=>"Jun", "07"=>"Jul", "08"=>"Aug",
									"09"=>"Sep", "10"=>"Oct", "11"=>"Nov", "12"=>"Dec");
							
								?>
								<div class="date">
									<span class="day"><?php echo $event_date[0];?></span>
									<span class="month"><?php echo $month_arr[$event_date[1]];?></span>
									<span class="year"><?php echo $event_date[2];?></span>
								</div>
							</div>
					
							<div class="col-sm-10 col-sm-offset-1 notice-item-content">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php 
								$desc_field = get_field_object('ne_description');
								echo $desc_field['value'];
								?>
								<?php echo aranax_excerpt_more("Read more");?>
							</div>
						
						</div>	  
						  
						  
						<?php
						endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
					?>
				</div>
				
			</div><!-- /.row -->
		</div>	
	</div>	
</div>


<?php get_footer(); ?>