<?php
/**
* Template Name: Study Centre Listing Page
*/
?>
<?php 
include 'db-config.php';
?>
<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

	<!--<div class="row top-mrg-md btm-mrg-sm">
		<div class="col-sm-9 col-sm-offset-3">
			<h2 class="page-header"><?php the_title(); ?></h2>
		</div>
	</div>-->

	<div class="row top-mrg-xs btm-mrg-lg">
		<div class="col-sm-3 hidden-xs">
			<?php get_sidebar(); ?>	
		</div>
		
		<div class="col-sm-9 list-study-centre">
		    <h2 class="page-header"><?php the_title(); ?></h2>
			<?php
				$mydb= new wpdb($db_user, $db_pass, $db_name, $db_host);
				$rows = $mydb->get_results("select cntr_name, cntr_address, cntr_city, cntr_state, cntr_pin, 
					cntr_phone, cntr_email, cntr_lat, cntr_long from cnf_cntr order by cntr_name");
				$map_lat 		= 	"";
				$map_long		= 	"";
				$map_address	=	"";
				$n				=	0;
				if(sizeof($rows) > 0 ) {
					foreach($rows as $obj){
			?>			
						<div class="col-sm-6 col-xs-12 box">
							<div class="inner-content">
								<h3><?php echo $obj->cntr_name;?></h3>
								<?php echo $obj->cntr_address;?><br>
								<?php echo $obj->cntr_city . ", " . $obj->cntr_state . ", " . $obj->cntr_pin;?><br>
								Phone: <?php echo $obj->cntr_phone;?><br>
								Email: <?php echo $obj->cntr_email;?>
								<p class="top-mrg-md">
									<a href="javascript:void(0)" class="study-centre" data-val="<?php echo $n;?>">Read More</a>
								</p>
							</div>
						</div>	
			<?php
						$n++;
					}
					
				} else {
					echo "<h3 class='alert alert-danger'>Unable to fetch data</h3>";
				}	
			?>
		</div>
		
		<div class="col-sm-9 view-study-centre" style="display: none;">
			<div class="col-sm-6">
				<h3 class="cntr_name"></h3>
				<div class="sc-address">
					<p class="cntr_address"></p>
					<p class="cntr_phone"></p>
					<p class="cntr_email"></p>
				</div>
			</div>
			<div class="col-sm-6">
				<div id="map" class="top-mrg-lg"></div>
			</div>
			
			<a href="javascript:void(0)" class="view-all-study-centre">View All Study Centres</a>	
		</div>
		
	</div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
//$=jQuery.noConflict(); 
var json_data 	= 	"";
var map_lat		=	"";
var map_lon		=	"";
var map_cntr	=	"";

$(document).ready(function(){
	json_data = jQuery.parseJSON('<?php echo json_encode($rows);?>');
	console.log(json_data);
});
	
$(document).on('click','.study-centre',function() {
	var index	=	$(this).attr("data-val");
	$(".cntr_name").html(json_data[index].cntr_name);
	$(".cntr_address").html(json_data[index].cntr_address + "<br>" + json_data[index].cntr_city + ", " + json_data[index].cntr_state + ", " + json_data[index].cntr_pin);
	$(".cntr_phone").html("Phone: " + json_data[index].cntr_phone);
	$(".cntr_email").html("Email: " + json_data[index].cntr_email);
	
	map_lat		=	json_data[index].cntr_lat;
	map_lon		=	json_data[index].cntr_long;
	map_cntr	=	json_data[index].cntr_name;
	
	$(".list-study-centre").hide();
	$(".view-study-centre").show();
	
	init_map();
});


$(document).on('click','.view-all-study-centre',function() {
	$(".list-study-centre").show();
	$(".view-study-centre").hide();
});	

function init_map(){
	var myOptions = {
		zoom:17, 
		center:new google.maps.LatLng(map_lat, map_lon), 
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById('map'), myOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(map_lat, map_lon)});
	infowindow = new google.maps.InfoWindow({content:'<strong>'+map_cntr+'</strong>'});
	google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
	infowindow.open(map,marker);
}

//google.maps.event.addDomListener(window, 'resize', init_map);
//google.maps.event.addDomListener(window, 'load', init_map);

</script>

<script src="https://maps.googleapis.com/maps/api/js"></script>


