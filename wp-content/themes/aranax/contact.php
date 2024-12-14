<?php
/**
* Template Name: Custom Contact Page
*/
?>
<?php 
	get_header(); 
	
	$map_lat 		= 	"27.9309884";
	$map_long		= 	"96.15511523";
	$map_address	=	"<strong>Denning College for Teachers\' Education</strong><br>Near RWD Central Store<br>Tezu, Lohit District, Arunachal Pradesh";	
?>

<!-- Page Content -->
<div id="content">
	<div class="page">
		<div class="container">
			<!--<div class="row">
				<div class="col-sm-9 col-sm-offset-3">
					<h1 class="page-header"><?php the_title(); ?></h1>
				</div>
			</div>-->
			
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

<div class="map-container">
	<div id="map"></div>
</div>

<?php get_footer(); ?>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
	//show google map only in contact page
  
	var pathname = window.location.pathname;
	if(pathname.search("/contact") != -1) {
		function init_map(){
			var myOptions = {
				zoom:16, 
				center:new google.maps.LatLng(<?php echo $map_lat;?>, <?php echo $map_long;?>), 
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles: [{"featureType":"all","elementType":"all","stylers":[{"saturation":-100},{"gamma":0.5}]}]
			};
			map = new google.maps.Map(document.getElementById('map'), myOptions);
			marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?php echo $map_lat;?>, <?php echo $map_long;?>)});
			infowindow = new google.maps.InfoWindow({content:'<?php echo $map_address;?>'});
			google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
			infowindow.open(map,marker);
		}
	
		google.maps.event.addDomListener(window, 'resize', init_map);
		google.maps.event.addDomListener(window, 'load', init_map);
	}
</script>
