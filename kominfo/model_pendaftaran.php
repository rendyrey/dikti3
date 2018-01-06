<?php

  include 'conn.php';
  if(isset($_POST['submit'])){


  $nama = $_POST['nama'];
  $nem = $_POST['nem'];
  $raport1 = $_POST['raport1'];
  $raport2 = $_POST['raport2'];
  $raport3 = $_POST['raport3'];
  $jarak = $_POST['jarak'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $id_sekolah = $_POST['sekolah'];

  print_r($_POST);


    //bobot jarak didapatkan dari PPDB 2017
    //pada link https://nasional.tempo.co/read/881948/ppdb-2017-sma-di-jawa-barat-terapkan-skor-jarak-rumah-ke-sekolah

  if($jarak<=1){
    $bobot_jarak = 9;
  }else if($jarak>1 && $jarak<=3){
    $bobot_jarak = 8;
  }else if($jarak>3 && $jarak<=5){
    $bobot_jarak = 7;
  }else if($jarak>5 && $jarak<=7){
    $bobot_jarak = 6;
  }else if($jarak>7 && $jarak<=9){
    $bobot_jarak = 5;
  }else if($jarak>9 && $jarak<=11){
    $bobot_jarak = 4;
  }else if($jarak>11 && $jarak<=13){
    $bobot_jarak = 3;
  }else if($jarak>13 && $jarak<=15){
    $bobot_jarak = 2;
  }else if($jarak>15){
    $bobot_jarak = 1;
  }

  $bobot_jarak = $bobot_jarak*30/100; //bobot jarak 30 persen
  $bobot_nem = ($nem/4)*40/100; //bobot nem 40 persen
  $bobot_raport = (($raport1+$raport2+$raport3)/3)*30/100; //bobot raport 30 persen

  $nilai_akhir = $bobot_nem + $bobot_jarak + $bobot_raport;
  $query = "insert into pendaftaran (nama_pendaftar,nem,raport1,raport2,raport3,rmh_lat,rmh_lon,jarak_rmh,nilai_akhir,id_sekolah) values
  (
  '$nama',
  '$nem',
  '$raport1',
  '$raport2',
  '$raport3',
  '$latitude',
  '$longitude',
  '$jarak',
  '$nilai_akhir',
  '$id_sekolah')";


  $sql = mysqli_query($conn, $query);

    if ($sql) {
          header('location:index.php?status=1');
      } else {
          echo "Error: " . $sql . "<br>" . $query . "<br>" .$conn->error;
    }
  mysqli_close($conn);

}
 ?>
