<?php
/**
* Template Name: Home Page
*/
?>
<?php get_header(); ?>


<!-- Page Content -->


	<!-- why Denning College -->
	<div class="why-denning-college">
		<div class="container">
		    <div class="row">
		        <div class="col-sm-12">
		            <h2><?php echo get_post_meta($post->ID, 'home_why_denning_college_lbl', true);?></h2>
		            <p class="lead">
		            	<?php echo get_post_meta($post->ID, 'home_why_denning_college_val', true);?>
		            </p>
		        </div>
		    </div><!-- /.row -->
		</div>	
	</div>
	
	<!-- welcome, news -->
	<div class="welcome-news">	
		<div class="container">
		    <div class="row">
		        <div class="col-sm-6 welcome">
		            <h3>Welcome !</h3>
		            <img src="<?php echo get_bloginfo('template_directory');?>/images/principal.jpg" alt="Message from Principal - Denning College" class="img-responsive">
		            <p>
		            	<?php echo get_post_meta($post->ID, 'home_message_from_principal_val', true);?>		            	
		            </p>
		            <p class="author">
		            	<?php echo get_post_meta($post->ID, 'principal_name_val', true);?>
		            	<span><?php echo get_post_meta($post->ID, 'principal_qualification_val', true);?></span>
		            	<span>Principal</span>	
		            </p>
		        </div>
		        
		        <div class="col-sm-3">
					<section class="news">
		                <h3>News &amp; Events</h3>     
		                <div class="carousel-controls">
		                    <a data-slide="prev" href="#news-carousel" class="prev"><i class="fa fa-caret-left"></i></a>
		                    <a data-slide="next" href="#news-carousel" class="next"><i class="fa fa-caret-right"></i></a>
		                </div><!--//carousel-controls--> 
		                
		            </section>
		        </div>
		        
		        <div class="col-sm-3">
					<section class="news">
		                <h3>Notices</h3>     
		                <div class="carousel-controls">
		                    <a data-slide="prev" href="#news-carousel" class="prev"><i class="fa fa-caret-left"></i></a>
		                    <a data-slide="next" href="#news-carousel" class="next"><i class="fa fa-caret-right"></i></a>
		                </div><!--//carousel-controls--> 
		                
		            </section>
		        </div>         
		        
			</div> <!--/.row -->
		</div><!-- /.container -->
	</div><!--/.welcome-news-->		

<?php get_footer(); ?>


