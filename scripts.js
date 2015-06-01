/*
	JavaScript/JQuery sample code
	Edgardo Bermúdez
	
	This method is used by other functions to return settings according to one of the three positions.
	The data was modified to be able to publish this file on GitHub.
*/
$(document).ready(function(){
	
	/*Map*/
	if ($('#map_canvas').size() > 0) {
		var latlng = new google.maps.LatLng(10.1234, -66.1234);
		var myOptions = {
			zoom: 14,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: true
		};
	
		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		var image = $('#map-icon').attr('src');
		var icon = new google.maps.Marker({
			position: latlng,
			map: map,
			icon: image
		});
	}
	
	/*Map: Colombia*/
	if ($('#map_canvas_colombia').size() > 0) {
		var latlng = new google.maps.LatLng(4.1234, -74.1234);
		var myOptions = {
			zoom: 14,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: true
		};
	
		var map = new google.maps.Map(document.getElementById("map_canvas_colombia"), myOptions);
		var image = $('#map-icon').attr('src');
		var icon = new google.maps.Marker({
			position: latlng,
			map: map,
			icon: image
		});
	}
	/*Map: USA*/
	if ($('#map_canvas_miami').size() > 0) {
		var latlng = new google.maps.LatLng(25.1234, -80.1234);
		var myOptions = {
			zoom: 14,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: true
		};
	
		var map = new google.maps.Map(document.getElementById("map_canvas_miami"), myOptions);
		var image = $('#map-icon').attr('src');
		var icon = new google.maps.Marker({
			position: latlng,
			map: map,
			icon: image
		});
	}	
});