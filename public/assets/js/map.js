/*-----------------------------------------------------------------------------------
    Template Name: Hotel Miranda Hoetel Resort Booking HTML Template
    Template URI: https://webtend.biz/onitir
    Author: WebTend
    Author URI: https://www.webtend.com
    Version: 1.0

	Note: This is Main js File For Google Mapss
-----------------------------------------------------------------------------------*/

$(function () {
	'use strict';

	// Map for Room Details Page
	function initroomMap() {
		var options = {
			zoom: 11,
			center: { lat: 40.7128, lng: -74.006 },
			styles: [
				{
					featureType: 'all',
					elementType: 'geometry.fill',
					stylers: [
						{
							weight: '2.00',
						},
					],
				},
				{
					featureType: 'all',
					elementType: 'geometry.stroke',
					stylers: [
						{
							color: '#9c9c9c',
						},
					],
				},
				{
					featureType: 'all',
					elementType: 'labels.text',
					stylers: [
						{
							visibility: 'on',
						},
					],
				},
				{
					featureType: 'landscape',
					elementType: 'all',
					stylers: [
						{
							color: '#f2f2f2',
						},
					],
				},
				{
					featureType: 'landscape',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#ffffff',
						},
					],
				},
				{
					featureType: 'landscape.man_made',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#ffffff',
						},
					],
				},
				{
					featureType: 'poi',
					elementType: 'all',
					stylers: [
						{
							visibility: 'off',
						},
					],
				},
				{
					featureType: 'road',
					elementType: 'all',
					stylers: [
						{
							saturation: -100,
						},
						{
							lightness: 45,
						},
					],
				},
				{
					featureType: 'road',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#eeeeee',
						},
					],
				},
				{
					featureType: 'road',
					elementType: 'labels.text.fill',
					stylers: [
						{
							color: '#7b7b7b',
						},
					],
				},
				{
					featureType: 'road',
					elementType: 'labels.text.stroke',
					stylers: [
						{
							color: '#ffffff',
						},
					],
				},
				{
					featureType: 'road.highway',
					elementType: 'all',
					stylers: [
						{
							visibility: 'simplified',
						},
					],
				},
				{
					featureType: 'road.arterial',
					elementType: 'labels.icon',
					stylers: [
						{
							visibility: 'off',
						},
					],
				},
				{
					featureType: 'transit',
					elementType: 'all',
					stylers: [
						{
							visibility: 'off',
						},
					],
				},
				{
					featureType: 'water',
					elementType: 'all',
					stylers: [
						{
							color: '#46bcec',
						},
						{
							visibility: 'on',
						},
					],
				},
				{
					featureType: 'water',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#c8d7d4',
						},
					],
				},
				{
					featureType: 'water',
					elementType: 'labels.text.fill',
					stylers: [
						{
							color: '#070707',
						},
					],
				},
				{
					featureType: 'water',
					elementType: 'labels.text.stroke',
					stylers: [
						{
							color: '#ffffff',
						},
					],
				},
			],
		};

		var map = new google.maps.Map(
			document.getElementById('roomMap'),
			options
		);

		// Let's also add a marker while we're at it
		var iconBase = '../assets/img/maps/pin-dark.png';
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(40.7128, -74.006),
			map: map,
			icon: iconBase,
			title: 'Cryptox',
		});
	}
	if ($('#roomMap').length != 0) {
		google.maps.event.addDomListener(window, 'load', initroomMap);
	}

	// Places Maps
	function initMapPlaces() {
		var options = {
			zoom: 11,
			center: { lat: 40.7128, lng: -74.006 },
			styles: [
				{
					featureType: 'all',
					elementType: 'labels.text.fill',
					stylers: [
						{
							saturation: 36,
						},
						{
							color: '#000000',
						},
						{
							lightness: 40,
						},
					],
				},
				{
					featureType: 'all',
					elementType: 'labels.text.stroke',
					stylers: [
						{
							visibility: 'on',
						},
						{
							color: '#000000',
						},
						{
							lightness: 16,
						},
					],
				},
				{
					featureType: 'all',
					elementType: 'labels.icon',
					stylers: [
						{
							visibility: 'off',
						},
					],
				},
				{
					featureType: 'administrative',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#000000',
						},
						{
							lightness: 20,
						},
					],
				},
				{
					featureType: 'administrative',
					elementType: 'geometry.stroke',
					stylers: [
						{
							color: '#000000',
						},
						{
							lightness: 17,
						},
						{
							weight: 1.2,
						},
					],
				},
				{
					featureType: 'landscape',
					elementType: 'geometry',
					stylers: [
						{
							color: '#000000',
						},
						{
							lightness: 20,
						},
					],
				},
				{
					featureType: 'poi',
					elementType: 'geometry',
					stylers: [
						{
							color: '#000000',
						},
						{
							lightness: 21,
						},
					],
				},
				{
					featureType: 'road.highway',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#000000',
						},
						{
							lightness: 17,
						},
					],
				},
				{
					featureType: 'road.highway',
					elementType: 'geometry.stroke',
					stylers: [
						{
							color: '#000000',
						},
						{
							lightness: 29,
						},
						{
							weight: 0.2,
						},
					],
				},
				{
					featureType: 'road.arterial',
					elementType: 'geometry',
					stylers: [
						{
							color: '#000000',
						},
						{
							lightness: 18,
						},
					],
				},
				{
					featureType: 'road.local',
					elementType: 'geometry',
					stylers: [
						{
							color: '#000000',
						},
						{
							lightness: 16,
						},
					],
				},
				{
					featureType: 'transit',
					elementType: 'geometry',
					stylers: [
						{
							color: '#000000',
						},
						{
							lightness: 19,
						},
					],
				},
				{
					featureType: 'water',
					elementType: 'geometry',
					stylers: [
						{
							color: '#000000',
						},
						{
							lightness: 17,
						},
					],
				},
			],
		};

		// New map
		var map = new google.maps.Map(
			document.getElementById('placesMaps'),
			options
		);

		// Listen for click on map
		google.maps.event.addListener(map, 'click', function (event) {
			// Add marker
			addMarker();
		});

		// Array of markers
		var markers = [
			{
				coords: { lat: 40.7128, lng: -74.006 },
				iconImage: '../assets/img/maps/pin-white.png',
				content: `
                    <div class="map-info-window">
                        <div class="info-window-img" style="background-image: url(assets/img/maps/place-1.jpg);">
                        </div>
                        <div class="info-content">
                            <h4>Duplex Restaurant</h4>
                            <p> 1,500m | 21 min. Walk </p>
                        </div>
                    </div>
                `,
			},
			{
				coords: { lat: 40.60816, lng: -74.27765 },
				iconImage: '../assets/img/maps/pin-white.png',
				content: `
                    <div class="map-info-window">
                        <div class="info-window-img" style="background-image: url(assets/img/maps/place-2.jpg);">
                        </div>
                        <div class="info-content">
                            <h4>Duplex Restaurant</h4>
                            <p> 1,500m | 21 min. Walk </p>
                        </div>
                    </div>
                `,
			},
			{
				coords: { lat: 40.7986, lng: -74.2391 },
				iconImage: '../assets/img/maps/pin-white.png',
				content: `
                    <div class="map-info-window">
                        <div class="info-window-img" style="background-image: url(assets/img/maps/place-3.jpg);">
                        </div>
                        <div class="info-content">
                            <h4>Duplex Restaurant</h4>
                            <p> 1,500m | 21 min. Walk </p>
                        </div>
                    </div>
                `,
			},
			{
				coords: { lat: 40.7237, lng: -73.7049 },
				iconImage: '../assets/img/maps/pin-white.png',
				content: `
                    <div class="map-info-window">
                        <div class="info-window-img" style="background-image: url(assets/img/maps/place-4.jpg);">
                        </div>
                        <div class="info-content">
                            <h4>Duplex Restaurant</h4>
                            <p> 1,500m | 21 min. Walk </p>
                        </div>
                    </div>
                `,
			},
		];

		// Loop through markers
		for (var i = 0; i < markers.length; i++) {
			// Add marker
			addMarker(markers[i]);
		}

		// Add Marker Function
		function addMarker(props) {
			var marker = new google.maps.Marker({
				position: props.coords,
				map: map,
			});

			// Check for customicon
			if (props.iconImage) {
				// Set icon image
				marker.setIcon(props.iconImage);
			}

			// Check content
			if (props.content) {
				var infoWindow = new google.maps.InfoWindow({
					content: props.content,
					padding: 0,
				});

				marker.addListener('click', function () {
					infoWindow.open(map, marker);
				});
			}
		}
	}
	if ($('#placesMaps').length != 0) {
		google.maps.event.addDomListener(window, 'load', initMapPlaces);
	}

	// Contact Form Map
	function initContactMap() {
		var options = {
			zoom: 11,
			center: { lat: 40.7128, lng: -74.006 },
			styles: [
				{
					featureType: 'all',
					elementType: 'geometry.fill',
					stylers: [
						{
							weight: '2.00',
						},
					],
				},
				{
					featureType: 'all',
					elementType: 'geometry.stroke',
					stylers: [
						{
							color: '#9c9c9c',
						},
					],
				},
				{
					featureType: 'all',
					elementType: 'labels.text',
					stylers: [
						{
							visibility: 'on',
						},
					],
				},
				{
					featureType: 'landscape',
					elementType: 'all',
					stylers: [
						{
							color: '#f2f2f2',
						},
					],
				},
				{
					featureType: 'landscape',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#ffffff',
						},
					],
				},
				{
					featureType: 'landscape.man_made',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#ffffff',
						},
					],
				},
				{
					featureType: 'poi',
					elementType: 'all',
					stylers: [
						{
							visibility: 'off',
						},
					],
				},
				{
					featureType: 'road',
					elementType: 'all',
					stylers: [
						{
							saturation: -100,
						},
						{
							lightness: 45,
						},
					],
				},
				{
					featureType: 'road',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#eeeeee',
						},
					],
				},
				{
					featureType: 'road',
					elementType: 'labels.text.fill',
					stylers: [
						{
							color: '#7b7b7b',
						},
					],
				},
				{
					featureType: 'road',
					elementType: 'labels.text.stroke',
					stylers: [
						{
							color: '#ffffff',
						},
					],
				},
				{
					featureType: 'road.highway',
					elementType: 'all',
					stylers: [
						{
							visibility: 'simplified',
						},
					],
				},
				{
					featureType: 'road.arterial',
					elementType: 'labels.icon',
					stylers: [
						{
							visibility: 'off',
						},
					],
				},
				{
					featureType: 'transit',
					elementType: 'all',
					stylers: [
						{
							visibility: 'off',
						},
					],
				},
				{
					featureType: 'water',
					elementType: 'all',
					stylers: [
						{
							color: '#46bcec',
						},
						{
							visibility: 'on',
						},
					],
				},
				{
					featureType: 'water',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#c8d7d4',
						},
					],
				},
				{
					featureType: 'water',
					elementType: 'labels.text.fill',
					stylers: [
						{
							color: '#070707',
						},
					],
				},
				{
					featureType: 'water',
					elementType: 'labels.text.stroke',
					stylers: [
						{
							color: '#ffffff',
						},
					],
				},
			],
		};

		var map = new google.maps.Map(
			document.getElementById('contactMaps'),
			options
		);

		// Let's also add a marker while we're at it
		var iconBase = '../assets/img/maps/pin-dark.png';
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(40.7128, -74.006),
			map: map,
			icon: iconBase,
			title: 'Cryptox',
		});
	}
	if ($('#contactMaps').length != 0) {
		google.maps.event.addDomListener(window, 'load', initContactMap);
	}
});
