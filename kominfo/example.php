<div id="wrapper">
	<label for="lat">Latitude</label>
	<input name="lat" id="lat-input" type="number" value="3.080410" placeholder="Latitude" step="0.000001" required>

	<label for="lng">Longitude</label>
	<input name="lng" id="lng-input" type="number" value="101.532111" placeholder="Longitude" step="0.000001" required>

	<!-- map would be loaded here -->
	<div id="map-canvas"></div>
</div>

<!-- The JavaScript -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script text="type/javascript">
	//function to validate a coordinate
	//http://stackoverflow.com/questions/11475146/javascript-regex-to-validate-gps-coordinates
	function check_lat_lon(lat, lon){
	  	ck_lat = /^(-?[1-8]?\d(?:\.\d{1,18})?|90(?:\.0{1,18})?)$/;
		ck_lon = /^(-?(?:1[0-7]|[1-9])?\d(?:\.\d{1,18})?|180(?:\.0{1,18})?)$/;
	  	var validLat = ck_lat.test(lat);
	  	var validLon = ck_lon.test(lon);
	  	return (validLat && validLon);
	}

	var myMap; //map variable
	var myMarker; //the position selection marker

	//setting up map
	function initialize() {
		//get default values
		var lat = document.getElementById('lat-input').value;
		var lng = document.getElementById('lng-input').value;

		//if invalid values given default to 0,0
		if (!check_lat_lon(lat, lng)) {
			lat = 0.0;
			lng = 0.0;
		}

		var myLatlng = new google.maps.LatLng(lat, lng); //initial position
		var mapOptions = {
		    zoom: 13, //set zoom level
		    center: myLatlng, //center map to initial position
		    disableDefaultUI: false, //display the map UI
			streetViewControl: false, //hide street view
			panControl: true, //show pan controls
		 };

		//initialize the map inside #map-canvas div
		myMap = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		//initialize the marker to select the location
		myMarker = new google.maps.Marker({
			animation: google.maps.Animation.DROP, //animate the marker in
		    position: myLatlng, //set the marker to initialize position
		    draggable: true, //make the marker draggable
		    map: myMap, //load the marker in the map
		});

		//update the input fields after the marker has been dragged
		google.maps.event.addListener(myMarker, 'dragend', function(evt){
    		document.getElementById('lat-input').value = evt.latLng.lat().toFixed(6);
    		document.getElementById('lng-input').value = evt.latLng.lng().toFixed(6);
    	});

    	//move the marker to new location when input fields updated
    	document.getElementById('lat-input').addEventListener('input', moveMarker);
    	document.getElementById('lng-input').addEventListener('input', moveMarker);
	}

	//move marker when user changes text
	//function to move the maker
	function moveMarker() {
		//get the specified coordinate values
		var lat = document.getElementById('lat-input').value;
		var lng = document.getElementById('lng-input').value;
		//move the marker only if the values are valid
		if ( check_lat_lon(lat, lng) ) {
			myMarker.setPosition( new google.maps.LatLng( lat, lng ) );
			myMap.panTo( new google.maps.LatLng( lat, lng ) );
		}
	}

	//initialize the map after the DOM has been loaded
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
