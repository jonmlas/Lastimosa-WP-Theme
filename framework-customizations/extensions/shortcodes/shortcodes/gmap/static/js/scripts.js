/* ==============================================
Google Maps
=============================================== */

$("#map").gmap3({
    marker:{     
	address:"Los Angeles, CA", 
	options:{ icon: "../img/marker.png"}},
    map:{
    options:{
	styles: [ {
	stylers: [ { "saturation":-100 }, { "lightness": 0 }, { "gamma": 0.5 }]},
	],
	zoom: 13,
	scrollwheel:false,
	draggable: true }
	}
	});	
