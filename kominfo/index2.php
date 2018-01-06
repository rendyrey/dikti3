<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","ranking.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body style='margin:100px;'>

<form>
  <?php
  include 'conn.php';
  $query = "select * from sekolah order by id_sekolah";
  $exe = mysqli_query($conn,$query);
  ?>
  Ranking Tiap Sekolah:
  <select name='sekolah' required onchange="showUser(this.value)">
    <option value=''>Pilih Sekolah</option>
    <?php

    while($row=mysqli_fetch_assoc($exe)){
        echo "<option value='".$row['id_sekolah']."'>".$row['nama_sekolah']."</option>";
    }
   ?>
  </select>

</form>
<br>
<div id="txtHint"><b>Ranking Sekolah akan ditampilkan</b></div>

</body>
</html>
