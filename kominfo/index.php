<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
				margin:0;
       }
    </style>
		<script src='jquery.js' type='text/javascript'></script>
  </head>
  <body style='margin:30px'>
    <h3>Pendaftaran Siswa Online</h3>
    <h3><font color='green'><?php if(isset($_GET['status'])) echo "Data berhasil dimasukkan";?></font></h3>
		<div id="wrapper">
			<form action='model_pendaftaran.php' method='post'>
				<table>
					<tr>
						<td>Nama:</td>
						<td><input type='text' name='nama' required></td>
					</tr>
					<tr>
						<td>NEM:</td>
						<td><input type='text' name='nem' id='auto_number1' required></td>
					</tr>
					<tr>
						<td>Nilai Rapot Kelas 1:</td>
						<td><input type='text' name='raport1' id='auto_number2' required></td>
					</tr>
					<tr>
						<td>Nilai Rapot Kelas 2:</td>
						<td><input type='text' name='raport2' id='auto_number3' required></td>
					</tr>
					<tr>
						<td>Nilai Rapot Kelas 3:</td>
						<td><input type='text' name='raport3' id='auto_number4' required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Jarak Rumah ke Sekolah (km):</td>
						<td><input type='text' name='jarak' id="auto_number5" required>
					</tr>
					<tr>
						<td colspan='2'>Koordinat Rumah: (Drag di peta)</td>
					</tr>
					<tr>
						<td>Latitude:</td>
						<td><input name="latitude" id="lat-input" type="number" value="-6.895375" placeholder="Latitude" step="0.000001" required readonly='readonly'></td>
					</tr>
					<tr>
						<td>Longitude:</td>
						<td><input name="longitude" id="lng-input" type="number" value="107.612636" placeholder="Longitude" step="0.000001" required readonly='readonly'></td>
					</tr>
          <tr>
            <td>Sekolah yang diminati</td>
            <td>
              <?php
              include 'conn.php';
              $query = "select * from sekolah order by id_sekolah";
              $exe = mysqli_query($conn,$query);
              ?>
              <select name='sekolah' required>
                <option value=''>Pilih Sekolah</option>
                <?php

                while($row=mysqli_fetch_assoc($exe)){
                    echo "<option value='".$row['id_sekolah']."'>".$row['nama_sekolah']."</option>";
                }
               ?>
            </select>
          </td>
          </tr>
          <tr>
            <td colspan='2'><input type='submit' name='submit' value='Submit'>
          </tr>

				</table>
			</form>
			<!-- map would be loaded here -->
			<div id="map-canvas"></div>
		</div>
    <div id="map"></div>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

    <script>
      function initMap() {
				var lat = document.getElementById('lat-input').value;
				var lng = document.getElementById('lng-input').value;

				var myLatlng = new google.maps.LatLng(lat, lng); //initial position
				// myMap = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
					center: myLatlng, //center map to initial position
			    disableDefaultUI: false, //display the map UI
				streetViewControl: false, //hide street view
				panControl: true, //show pan controls
        });
        var marker = new google.maps.Marker({
          position: myLatlng, //set the marker to initialize position
          map: map,
					draggable:true
        });
				google.maps.event.addListener(marker, 'dragend', function(evt){
	    		document.getElementById('lat-input').value = evt.latLng.lat().toFixed(6);
	    		document.getElementById('lng-input').value = evt.latLng.lng().toFixed(6);
	    	});

	    	google.maps.event.addDomListener(window, 'load', initialize);
      }

			//update the input fields after the marker has been dragged

    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGngmlDwm_fygti80ghzJL34UOgv3W3NE&callback=initMap">
    </script>

<script>
$(function(){
	$('#auto_number').keyup(function(event) {

		// skip for arrow keys
		if(event.which >= 37 && event.which <= 40) return;

		// format number
		$(this).val(function(index, value) {
			return value
			.replace(/\D/g, "")
			.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
			;
		});
	});

	$('#auto_number1').keyup(function(event) {

		// skip for arrow keys
		if((event.which >= 37 && event.which <= 40) || event.which == 188) return;

		// format number
		$(this).val(function(index, value) {
			return value
			.replace(/[^\d.]/g, "")
			// .replace(/\B(?=(\d{3})+(?!\d)+(,))/g, "")
			;
		});
	});

  $('#auto_number2').keyup(function(event) {

		// skip for arrow keys
		if((event.which >= 37 && event.which <= 40) || event.which == 188) return;

		// format number
		$(this).val(function(index, value) {
			return value
			.replace(/[^\d.]/g, "")
			// .replace(/\B(?=(\d{3})+(?!\d)+(,))/g, "")
			;
		});
	});

  $('#auto_number3').keyup(function(event) {

		// skip for arrow keys
		if((event.which >= 37 && event.which <= 40) || event.which == 188) return;

		// format number
		$(this).val(function(index, value) {
			return value
			.replace(/[^\d.]/g, "")
			// .replace(/\B(?=(\d{3})+(?!\d)+(,))/g, "")
			;
		});
	});

  $('#auto_number4').keyup(function(event) {

		// skip for arrow keys
		if((event.which >= 37 && event.which <= 40) || event.which == 188) return;

		// format number
		$(this).val(function(index, value) {
			return value
			.replace(/[^\d.]/g, "")
			// .replace(/\B(?=(\d{3})+(?!\d)+(,))/g, "")
			;
		});
	});

  $('#auto_number5').keyup(function(event) {

		// skip for arrow keys
		if((event.which >= 37 && event.which <= 40) || event.which == 188) return;

		// format number
		$(this).val(function(index, value) {
			return value
			.replace(/[^\d.]/g, "")
			// .replace(/\B(?=(\d{3})+(?!\d)+(,))/g, "")
			;
		});
	});
});
</script>
  </body>
</html>
