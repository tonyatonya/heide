<!DOCTYPE html>
<html lang="en">
<head>
<title>Heide Emigre</title>
<?php include('inc_head.php'); ?>
</head>
<body>
	<div id="skrollr-body" class="wrapper">
		<?php include('inc_header.php'); ?>
		<!-- content here-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7 map-canvas-frame">
					<!-- map zone -->
					<div id="map-canvas"></div>
					<!-- end map zone -->
				</div>
				<div class="col-lg-5 contact-background" style="background-image: url(images/contact/contact-bg.jpg);">

						<!-- contact form -->
						<img src="images/contact/contact-bg.jpg" class="dummy">
						<!-- end contact-form -->
						<div class="contact-form-holder">
								<div class="contact-form">
									<h3>CONTACT US</h3>
									<ul>
										<li>E-mail : <a href="mailto:stay@heide-emigre.com">stay@heide-emigre.com</a></li>
										<li>Tel : <a href="tel:(+66) 94-749-4142">(+66) 94-749-4142</a> / <a href="tel:(+66) 0965695142">(+66) 0965695142</a></li>
										<li>Facebook : <a href="#">heideemigre</a></li>
										<li>Instragram : <a href="#">heideemigre</a></li>
									</ul>
									<form>
										<input type="text" class="form-control" placeholder="NAME">
										<input type="text" class="form-control" placeholder="E-MAIL">
										<textarea class="form-control" placeholder="MESSAGE"></textarea>
										<input type="submit" value="SEND">
									</form>
									<div class="clear"></div>
								</div>
						</div>

				</div>


			</div>
		</div>
		<!-- end content here -->
		<?php include('inc_footer.php'); ?>

		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmn53s9D4N06_g3NnnLq9jpMTC4WAIx8A&center=13.725543133385932,460.54611971378324&zoom=16&format=png&maptype=roadmap&style=element:geometry%7Ccolor:0xf5f5f5&style=element:labels.icon%7Cvisibility:off&style=element:labels.text.fill%7Ccolor:0x616161&style=element:labels.text.stroke%7Ccolor:0xf5f5f5&style=feature:administrative.land_parcel%7Celement:labels.text.fill%7Ccolor:0xbdbdbd&style=feature:poi%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:poi.park%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:road%7Celement:geometry%7Ccolor:0xffffff&style=feature:road.arterial%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:road.highway%7Celement:geometry%7Ccolor:0xdadada&style=feature:road.highway%7Celement:labels.text.fill%7Ccolor:0x616161&style=feature:road.local%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:transit.line%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:transit.station%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:water%7Celement:geometry%7Ccolor:0xc9c9c9&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&size=480x360"></script>


		<script type="text/javascript">
	//map
	var mapStyles = [
						  {
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#f5f5f5"
						      }
						    ]
						  },
						  {
						    "elementType": "labels.icon",
						    "stylers": [
						      {
						        "visibility": "off"
						      }
						    ]
						  },
						  {
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#616161"
						      }
						    ]
						  },
						  {
						    "elementType": "labels.text.stroke",
						    "stylers": [
						      {
						        "color": "#f5f5f5"
						      }
						    ]
						  },
						  {
						    "featureType": "administrative.land_parcel",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#bdbdbd"
						      }
						    ]
						  },
						  {
						    "featureType": "poi",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#eeeeee"
						      }
						    ]
						  },
						  {
						    "featureType": "poi",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#757575"
						      }
						    ]
						  },
						  {
						    "featureType": "poi.park",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#e5e5e5"
						      }
						    ]
						  },
						  {
						    "featureType": "poi.park",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#9e9e9e"
						      }
						    ]
						  },
						  {
						    "featureType": "road",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#ffffff"
						      }
						    ]
						  },
						  {
						    "featureType": "road.arterial",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#757575"
						      }
						    ]
						  },
						  {
						    "featureType": "road.highway",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#dadada"
						      }
						    ]
						  },
						  {
						    "featureType": "road.highway",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#616161"
						      }
						    ]
						  },
						  {
						    "featureType": "road.local",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#9e9e9e"
						      }
						    ]
						  },
						  {
						    "featureType": "transit.line",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#e5e5e5"
						      }
						    ]
						  },
						  {
						    "featureType": "transit.station",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#eeeeee"
						      }
						    ]
						  },
						  {
						    "featureType": "water",
						    "elementType": "geometry",
						    "stylers": [
						      {
						        "color": "#c9c9c9"
						      }
						    ]
						  },
						  {
						    "featureType": "water",
						    "elementType": "labels.text.fill",
						    "stylers": [
						      {
						        "color": "#9e9e9e"
						      }
						    ]
						  }
					]

	/*
	var locations = [
			['TERMINAL 21',13.738056,100.560782,"{{asset('public/front/images/contactus/terminal.jpg')}}","terminal21"],
			['JJ MARKET',13.800233,100.551316,"{{asset('public/front/images/contactus/jj.jpg')}}","jjmarket"],
			['ZEN @ CENTRAL WORLD',13.747386,100.540801,"{{asset('public/front/images/contactus/terminal.jpg')}}","zen"]
		]

	var x;
	var y;

		$("#map-canvas").mousemove(function(e){
			x = e.pageX - this.offsetLeft;
			y = e.pageY - this.offsetTop;
		})
	    var map = new google.maps.Map(document.getElementById('map-canvas'), {
	      	zoom: 12,
		  	center: new google.maps.LatLng(13.785545,100.546786),
		  	mapTypeId: google.maps.MapTypeId.ROADMAP,
			mapTypeControl: false,
			zoomControl: false,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.DEFAULT,
				position: google.maps.ControlPosition.LEFT_TOP
			},
			panControl: false,
			streetViewControl: false,
			streetViewControlOptions: {
				position: google.maps.ControlPosition.LEFT_TOP
			},
			scaleControl: false,
			overviewMapControl: false,
			styles: mapStyles
	    });

	    var marker, i;
		//var	iconBase = "<i class='heide-map-pin'></i>";
	    for (i = 0; i < locations.length; i++){
	      	marker = new google.maps.Marker({
	        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	        map: map,
			//icon: iconBase
	    });

		var infowindow = new google.maps.InfoWindow();
		var overlay = new google.maps.OverlayView();
		overlay.draw = function() {};
		overlay.setMap(map);

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
	        return function() {
		        console.log("locations[i][4] = ",locations[i][4]);
						$('#' + locations[i][4]).modal('show');
	        }
	    })(marker, i));


		google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
	        return function() {
		        var projection = overlay.getProjection();
				var pixel = projection.fromLatLngToContainerPixel(marker.getPosition());
				console.log("pixel x = ", pixel.x , "pixel y = ", pixel.y);

		        $(".gm-style").append('<div class="map-pop">'+
									  '<figure><img src="'+locations[i][3]+'"></figure>'+
									  '<div class="location-name">'+locations[i][0]+'</div>'+
									  '</div>');
		        $(".map-pop").css({
					'top':pixel.y - 100,
					'left':pixel.x + 30

		        })

	          $(".map-pop").fadeIn();


	        }
	    })(marker, i));

	    google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
	        return function() {

	          $(".map-pop").fadeOut();
	          setTimeout(function(){
		         $(".map-pop").remove();
	          },100)

	        }
	    })(marker, i));


	    }

	*/




		// new map script
		function FontAwesomeMarker(latlng, map, args) {
			this.latlng = latlng;
			this.args = args;
			this.setMap(map);
		}

		FontAwesomeMarker.prototype = new google.maps.OverlayView();

		FontAwesomeMarker.prototype.draw = function() {
			var self = this,
		  	panes = this.getPanes(),
		  	marker = this.marker;

			if (!marker) {
			  marker = this.marker = document.createElement('div');
				marker.className = 'marker';

		    var icon = document.createElement('i');
		   icon.className = 'heide-' + this.args.icon;
		    icon.style.fontSize = this.args.fontSize;
		    icon.style.color = this.args.color;
		    marker.appendChild(icon);

		    var point = this.getProjection().fromLatLngToDivPixel(this.latlng);
		    if (point) {
		      marker.style.left = (point.x - 25) + 'px';
		      marker.style.top = (point.y - 25) + 'px';
		    }

				google.maps.event.addDomListener(marker, "click", function(event) {
					alert('You clicked on a custom marker!');
					google.maps.event.trigger(self, "click");
				});

				panes.overlayImage.appendChild(marker);
			}
		};

		FontAwesomeMarker.prototype.remove = function() {
			if (this.marker) {
				this.marker.parentNode.removeChild(this.marker);
				this.marker = null;
			}
		};

		FontAwesomeMarker.prototype.getPosition = function() {
			return this.latlng;
		};

		function initialize() {
			var myLatlng = new google.maps.LatLng(13.785545,100.546786),
		    mapOptions = {
		      zoom: 15,
		      center: myLatlng,
		      disableDefaultUI: true
		    };

			var map = new google.maps.Map(document.getElementById('map-canvas'), {
			      	zoom: 12,
				  	center: new google.maps.LatLng(13.785545,100.546786),
				  	mapTypeId: google.maps.MapTypeId.ROADMAP,
					mapTypeControl: false,
					zoomControl: false,
					zoomControlOptions: {
						style: google.maps.ZoomControlStyle.DEFAULT,
						position: google.maps.ControlPosition.LEFT_TOP
					},
					panControl: false,
					streetViewControl: false,
					streetViewControlOptions: {
						position: google.maps.ControlPosition.LEFT_TOP
					},
					scaleControl: false,
					overviewMapControl: false,
					styles: mapStyles
				});



			var markers = [
		  	{
		      latLan: new google.maps.LatLng(13.738056,100.560782),
		      icon: 'map-pin',
		      color: '#c7652b',
		      fontSize: '35px'
		    },
		    {
		     	latLan: new google.maps.LatLng(13.800233,100.551316),
		      icon: 'map-pin',
		      color: '#c7652b',
		      fontSize: '35px'
		    },
		    {
		      latLan: new google.maps.LatLng(13.747386,100.540801),
		      icon: 'map-pin',
		      color: '#eaaf0a',
		      fontSize: '35px'
		    }
		  ]


			/*
var markers = [
		  	{
		      latLan: '13.738056,100.560782',
		      icon: 'map-pin',
		      color: '#c7652b',
		      fontSize: '35px'
		    },
		    {
		     	latLan: '13.800233,100.551316',
		      icon: 'map-pin',
		      color: '#c7652b',
		      fontSize: '35px'
		    },
		    {
		      latLan: '13.747386,100.540801',
		      icon: 'map-pin',
		      color: '#eaaf0a',
		      fontSize: '35px'
		    }
		  ]
*/




		  markers.forEach(function(item) {
		    new FontAwesomeMarker(
		      item.latLan,
		      map,
		      {
		        icon: item.icon,
		        color: item.color,
		        fontSize: item.fontSize
		      }
		    );
		  });
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		// end new map script



		/*
			marker = new google.maps.Marker({
	        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
	        map: map,
		*/


  </script>






	</div>
</body>
</html>