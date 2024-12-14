<?php
/**
* Template Name: News-Events & Notice List
*/
?>
<?php get_header(); ?>

<?php
$category_name	=	"";
$page_title		=	"";
$custom_date	=	"";
	
if( is_page( "news-events" )  ){
	$category_name	=	"3";
	$page_title		=	"News & Events";
	$custom_date	=	"Event_Date";
}else if( is_page( "notices" )  ){
	$category_name	=	"4";
	$page_title		=	"Notices";
	$custom_date	=	"Notice_Date";
}
?>

<!-- Page Content -->
<div id="content">
	<div class="page">
		<div class="container">
			<!--<div class="row">
				<div class="col-sm-9 col-sm-offset-3">
					<h1 class="page-header"><?php //the_title(); ?></h1>
				</div>
			</div>-->
			
			<div class="row bottom-margin-sm">		
				<div class="col-sm-3 hidden-xs">
					<?php get_sidebar(); ?>	
				</div>
				
				<div class="col-sm-9">
				    <h1 class="page-header"><?php the_title(); ?></h1>
					<?php query_posts('cat=' . $category_name); ?>
					<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			
					<div class="notice-item">
						<div class="col-sm-2">
							<?php 
							$date	=	date("jS-F-Y", strtotime(get_post_meta($post->ID, $custom_date, true))); 
							
							$event_date	=	explode("-", $date);
							
							?>
							<div class="date">
								<span class="day"><?php echo $event_date[0];?></span>
								<span class="month"><?php echo $event_date[1];?></span>
								<span class="year"><?php echo $event_date[2];?></span>
							</div>
						</div>
					
						<div class="col-sm-10 notice-item-content">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
							<?php echo aranax_excerpt_more("Read more");?>
						</div>
						
					</div>
			
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no data found.'); ?></p>
					<?php endif; ?>
				</div>
				
			</div><!-- /.row -->
		</div>	
	</div>	
</div>
		

<?php get_footer(); ?>