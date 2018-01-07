<?php

// ini_set('display_errors',0);
$koneksi = mysqli_connect("lensadata.id","lensadat_root","lensadata246","lensadat_dikti");
//ambil parameter\
// $id_narasumber = 'NS002';
$id_sub_topik = $_POST['id_sub_topik'];

     $sql = "
          SELECT
               *,topik_berita.id_berita as id_berita,
               topik_berita.topik_berita as topik_berita
          FROM
               topik_berita,sub_topik_berita
          WHERE
              topik_berita.id_berita = sub_topik_berita.id_berita AND
               sub_topik_berita.id_sub_topik = '$id_sub_topik'
     ";
     $get_model_sub_topik = mysqli_query($koneksi,$sql);

    //  echo "fuck you";
     while($data = mysqli_fetch_array($get_model_sub_topik)){
          echo '<option value="'.$data['id_berita'].'">'.$data['topik_berita'].'</option>';
     }


?>