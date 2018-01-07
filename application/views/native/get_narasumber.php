<?php

// ini_set('display_errors',0);
$koneksi = mysqli_connect("lensadata.id","lensadat_root","lensadata246","lensadat_dikti");
//ambil parameter\
// $id_narasumber = 'NS002';
$id_narasumber = $_POST['id_narasumber'];

     $sql = "
          SELECT
               id_sub_narasumber,
               nama_sub_narasumber
          FROM
               sub_narasumber
          WHERE
               id_narasumber = '$id_narasumber'
               ORDER BY nama_sub_narasumber ASC
     ";
     $get_model_narasumber = mysqli_query($koneksi,$sql);

    //  echo "fuck you";
     while($data = mysqli_fetch_array($get_model_narasumber)){
          echo '<option value="'.$data['id_sub_narasumber'].'">'.$data['nama_sub_narasumber'].'</option>';
     }
     		     if($id_narasumber=='NS008')

          echo "<option value='SNS065'>Lainnya</option>";

     

?>