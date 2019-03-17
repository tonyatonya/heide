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
			<div class="row contact-row">
				<div class="col-lg-4 contact-property" style="background-image: url(images/contact/contact-bg.jpg);">
					<ul>
						<li class="active"><img src="images/properties/properties-1.jpg"></li>
						<li><img src="images/properties/properties-2.jpg"></li>
						<li><img src="images/properties/properties-3.jpg"></li>
					</ul>
					<!--<img src="images/contact/contact-bg.jpg" class="dummy">-->
				</div>
				<div class="col-lg-8 map-canvas-frame">
					<div id="map-canvas" class="showpic"></div>
				</div>
			</div>
			<div class="row contact-row">
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-4">
							<div class="map-menu">
								<ul>
									<li class="active"><a href="#" datalat="13.738056" datalong="100.560782" datacolor="#c7652b" dataprop="ALOFT STUDIO" dataimg="images/properties/properties-1.jpg">ALOFT STUDIO</a></li>
									<li><a href="#" datalat="13.800233" datalong="100.551316" datacolor="#128885" dataprop="CANVAS" dataimg="images/properties/properties-2.jpg">CANVAS</a></li>
									<li><a href="#" datalat="13.747386" datalong="100.540801" datacolor="#eaaf0a" dataprop="STUDIO4" dataimg="images/properties/properties-3.jpg">STUDIO4</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="row">
								<div class="col-md-6">
									<div class="contact-content">
										<h2>SAY HELLO</h2>
										<hr>
										<p>
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
										</p>
										<p>
											E-mail : stay@heide-emigre.com
										</p>
										<p>
											Tel : (+66) 94-749-4142 / (+66) 96-569-5142

										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="contact-content">
										<h2>FOLLOW US</h2>
										<hr>
										<p>
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
										</p>
										<div class="social-menu">
											<ul>
												<li><a href="#"><img src="images/contact/ico-instragram.svg"></a></li>
												<li><a href="#"><img src="images/contact/ico-facebook.svg"></a></li>
												<li><a href="#"><img src="images/contact/ico-pinterest.svg"></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 order-first">
					<div class="row">
						<div class="col-lg-11 offset-lg-1 col-md-6 offset-md-3">
							<div class="contact-form-col">
								<form id="contact-form">
									<input type="text" class="form-control" placeholder="NAME">
									<input type="text" class="form-control" placeholder="E-MAIL">
									<textarea class="form-control" placeholder="MESSAGE"></textarea>
									<input type="submit" value="SEND" class="send-btn">
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- end content here -->

		<?php include('inc_footer.php'); ?>
	</div>


	<!-- modal -->

	<div id="contact-modal" class="modal main-modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	            </div>
	            <div class="modal-body">
		            <div class="row">
			            <div class="col-sm-4 offset-sm-4">
				            <div class="content-box al-center">
								<div class="content-detail">
									<img src="images/common/logo-circle-green.svg" class="modal-main-logo">
									<h2>THE MESSAGE WAS ALREADY SENT</h2>
									<hr class="separate-gold">
									<p>
										We'll try to respond within 48 hrs.
		If your have another question please contact
		stay@heide-emigre.com
									</p>
								</div>
							</div>
			            </div>
					</div>
	            </div>
	            <div class="modal-footer" style="border:none;"></div>
	        </div>
	    </div>
	</div>
	<!-- end moda -->



	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmn53s9D4N06_g3NnnLq9jpMTC4WAIx8A&center=13.725543133385932,460.54611971378324&zoom=16&format=png&maptype=roadmap&style=element:geometry%7Ccolor:0xf5f5f5&style=element:labels.icon%7Cvisibility:off&style=element:labels.text.fill%7Ccolor:0x616161&style=element:labels.text.stroke%7Ccolor:0xf5f5f5&style=feature:administrative.land_parcel%7Celement:labels.text.fill%7Ccolor:0xbdbdbd&style=feature:poi%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:poi%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:poi.park%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:poi.park%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:road%7Celement:geometry%7Ccolor:0xffffff&style=feature:road.arterial%7Celement:labels.text.fill%7Ccolor:0x757575&style=feature:road.highway%7Celement:geometry%7Ccolor:0xdadada&style=feature:road.highway%7Celement:labels.text.fill%7Ccolor:0x616161&style=feature:road.local%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&style=feature:transit.line%7Celement:geometry%7Ccolor:0xe5e5e5&style=feature:transit.station%7Celement:geometry%7Ccolor:0xeeeeee&style=feature:water%7Celement:geometry%7Ccolor:0xc9c9c9&style=feature:water%7Celement:labels.text.fill%7Ccolor:0x9e9e9e&size=480x360"></script>


	<script type="text/javascript">
		$(document).ready(function(){


			$(".send-btn").click(function(e){
				e.preventDefault();
				$("#contact-modal").modal('show');
			})

			$(".map-menu li a").click(function(e){
				e.preventDefault();
				var _parent = $(this).parent();
				var _datalat = $(this).attr("datalat");
				var _datalon = $(this).attr("datalong");
				var _datacolor = $(this).attr("datacolor");
				var _tabIndex = _parent.index();
				var _dataprop = $(this).attr("dataprop");
				var _dataimg = $(this).attr("dataimg");

				console.log("_tabIndex = ", _tabIndex, "_datalat = ", _datalat, "_datalon = ", _datalon, "_datacolor = ", _datacolor);

				if(_parent.hasClass("active") == false){
					$("#map-canvas.showpic").removeClass("showpic");
					$(".map-menu li.active").removeClass("active");
					_parent.addClass("active");
					changeMarkerPos(_datalat,_datalon,_datacolor);
					$(".contact-property ul li.active").removeClass("active");
					$(".contact-property ul li").eq(_tabIndex+1).addClass("active");

					setTimeout(function(){
						$(".map-info-box figure").replaceWith('<figure><img src="'+_dataimg+'"></figure>');
						$(".map-info-box p").replaceWith("<p>"+_dataprop+"</p>");
						$("#map-canvas").addClass("showpic");
					}, 300);

				}


			})



		})


			var map;
			var marker
			var lat = 14.071224; //defaultLat
			var lan = 100.602687; //defaultLon
			var pincolor = '#c7652b'; //defaultCol
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


						google.maps.event.addDomListener(marker, "click", function(event) {});

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
					map = new google.maps.Map(document.getElementById('map-canvas'), {
					      	zoom: 15,
						  	center: new google.maps.LatLng(lat, lan),
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
							draggable: false,
							styles: mapStyles
						});

					marker = new google.maps.Marker({
				      icon: 'map-pin',
				      color : pincolor,
				      fontSize: '35px'
				    })

				    new FontAwesomeMarker(
					      marker.latLan,
					      map,
					      {
					        icon: marker.icon,
					        color: marker.color,
					        fontSize: marker.fontSize
					      }
					    );




				}

				google.maps.event.addDomListener(window, 'load', initialize);
				var imgURL = 'images/contact/contact-bg.jpg'; //defaultimg
				var defaultData = '<div class="map-info-box"><figure>'+
					'<img src="'+imgURL+'">'+
					'</figure>'+
					'<p>Aloft Studio</p>'+
					'</div>';
				setTimeout(function(){
					$("#map-canvas").append(defaultData);
				}, 200)



		function changeMarkerPos(lat, lon,color){
		    myLatLng = new google.maps.LatLng(lat, lon)
		    marker.setPosition(myLatLng);
		    map.panTo(myLatLng);
		    $(".heide-map-pin").css({
				'color':color
			})
		}

	</script>

<!-- ******* dev note *********
	- รูป Location ต่างๆ สามารถเปลี่ยนได้จากหลังบ้าน
	- Pin สามารถกำหนดสีได้
	- Content ในหน้านี้แก้ได้ทุกจุด ยกเว้น Contact Form
-->
</body>
</html>