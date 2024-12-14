<?php get_header(); ?>

<?php
$category_name	=	"";
$page_title		=	"";
$custom_date	=	"";
	
$categories = get_the_category(); 
foreach($categories as $category){ 
	$category_name = $category->name;
	if($category_name == "News-Events"){
		$page_title	=	"News & Events";
		$custom_date=	"Event_Date";
	}elseif($category_name == "Notices"){
		$page_title	=	"Notices";
		$custom_date=	"Event_Date";
	}
}	

?>

<!-- Page Content -->
<div id="content">
	<div class="page">
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-sm-offset-3">
					<h1 class="page-header"><?php the_title(); ?></h1>
				</div>
			</div>
			
			<div class="row bottom-margin-sm">		
				<div class="col-sm-3 hidden-xs">
					<?php get_sidebar(); ?>	
				</div>
				
				<div class="col-sm-9">
					<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no data found.'); ?></p>
					<?php endif; ?>
				</div>
				
			</div><!-- /.row -->
		</div>	
	</div>	
</div>

<?php get_footer(); ?>