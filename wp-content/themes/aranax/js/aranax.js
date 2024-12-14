$=jQuery.noConflict();


$(document).ready(function() {
	
		/* ======= Carousels ======= */
		$('#news-carousel').carousel({interval: false});
    
    
	});
 

$(document).on("click",".more_button",function() {
    $(this).parent().find('.more_employeecontent').toggle();
}); 

//show google map only in contact page
var pathname = window.location.pathname;
if(pathname.search("/page/contact") != -1) {
	function init_map(){
		var myOptions = {
			zoom:14, 
			center:new google.maps.LatLng(27.9309884, 96.1551152), 
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById('map'), myOptions);
		marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(27.9309884, 96.1551152)});
		infowindow = new google.maps.InfoWindow({content:'<strong>Denning College for Teachers\' Education</strong><br>Near RWD Central Store<br>Tezu, Lohit District, Arunachal Pradesh'});
		google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
		infowindow.open(map,marker);
	}
	
	google.maps.event.addDomListener(window, 'load', init_map);
}