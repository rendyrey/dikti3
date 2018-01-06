<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

  <title>Kemenristek Dikti - Media Monitoring</title>
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ristek_dikti_logo.ico" type="image/x-icon">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/Hover/hover.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/weather-icons/css/weather-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/jquery-toggles/toggles-full.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/morrisjs/morris.css">


  <!-- untuk form -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/select2/select2.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/dropzone/dropzone.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/timepicker/jquery.timepicker.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/quirk.css">

  <script src="<?php echo base_url();?>assets/lib/modernizr/modernizr.js"></script>

  <script src="<?php echo base_url();?>assets/lib/jquery-ui/jquery-ui.js"></script>
  <script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.js"></script>
  <script src="<?php echo base_url();?>assets/lib/jquery-toggles/toggles.js"></script>

  <script src="<?php echo base_url();?>assets/lib/morrisjs/morris.js"></script>
  <script src="<?php echo base_url();?>assets/lib/raphael/raphael.js"></script>

  <script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.js"></script>
  <script src="<?php echo base_url();?>assets/lib/flot/jquery.flot.resize.js"></script>
  <script src="<?php echo base_url();?>assets/lib/flot-spline/jquery.flot.spline.js"></script>

  <script src="<?php echo base_url();?>assets/lib/jquery-knob/jquery.knob.js"></script>

  <script src="<?php echo base_url();?>assets/js/quirk.js"></script>
  <script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
</head>
<body>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/select2/select2.css">

  <header>
    <div class="headerpanel">

      <div class="logopanel">
        <h4><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/ristek_dikti_logo.png" height="30" hspace="5">    Media Monitoring</a></h4>

      </div><!-- logopanel -->

      <div class="headerbar">

        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

        <!-- <div class="searchpanel">
        <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </div> -->

  <div class="header-right">
    <ul class="headermenu">
      <li>

      </li>
      <li>
        <a href="<?php echo site_url('Login/process_logout');?>">
          <button id="" class="btn">
            Logout
            <i class="fa fa-sign-out"></i>
          </button>
        </li>
      </ul>
    </div><!-- header-right -->
  </div><!-- headerbar -->
</div><!-- header-->
</header>

<section>

  <div class="leftpanel">
    <div class="leftpanelinner">

      <!-- ################## LEFT PANEL PROFILE ################## -->

      <div class="media leftpanel-profile">
        <div class="media-left">
          <a href="#">
            <img src="<?php echo base_url();?>assets/images/photos/loggeduser.png" alt="" class="media-object img-circle">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $_SESSION['username'];?><a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"><i class="fa fa-angle-down"></i></a></h4>
          <span><?php echo $_SESSION['user'];?></span>
        </div>
      </div><!-- leftpanel-profile -->

      <ul class="nav nav-tabs nav-justified nav-sidebar">
        <li class="tooltips active" data-toggle="tooltip" title="Main Menu"><a data-toggle="tab" data-target="#mainmenu"><i class="tooltips fa fa-ellipsis-h"></i></a></li>
        <li class="tooltips" data-toggle="tooltip" title="Post Berita"><a data-toggle="tab" data-target="#emailmenu"><i class="tooltips fa fa-pencil-square-o"></i></a></li>
      </ul>


      <div class="tab-content">

        <!-- ################# MAIN MENU ################### -->

        <div class="tab-pane active" id="mainmenu">
          <h5 class="sidebar-title">Main Menu</h5>
          <ul class="nav nav-pills nav-stacked nav-quirk">
            <li class="active"><a href="<?php echo site_url('Dashboard/index');?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="nav-parent"><a href=""><i class="fa fa-newspaper-o"></i> <span>Berita</span></a>
              <ul class="children">
                <?php
                $i=0;
                for($i<0;$i<$jml;$i++){
                  echo "<li ><a href=".site_url('Berita/tabel_berita/').$id_berita[$i]." style='margin-bottom:15px;'>".$topik_berita[$i]."</a></li>";
                  // echo "<hr>";
                }
                ?>
              </ul>
            </li>
            <li class="nav-parent"><a href=""><i class="fa fa-cube"></i> <span>Program Media</span></a>
              <ul class="children">
                <li><a href='<?php echo site_url('ProgramMedia/wawancara');?>'>Wawancara</a></li>
                <li><a href='<?php echo site_url('ProgramMedia/press_release');?>'>Press Release</a></li>
                <li><a href='<?php echo site_url('ProgramMedia/konferensi_pers');?>'>Konferensi Pers</a></li>
                <li><a href='<?php echo site_url('ProgramMedia/liputan_lapangan');?>'>Liputan Lapangan</a></li>
                <li><a href='<?php echo site_url('ProgramMedia/diskusi_media');?>'>Diskusi Media</a></li>
                <li><a href='<?php echo site_url('ProgramMedia/grafik');?>'>Grafik</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url('Media');?>"><i class="fa fa-list-alt"></i> <span>Media & Title</span></a></li>
            <li><a href="<?php echo site_url('Trend');?>"><i class="fa fa-list-ol"></i> <span>Trend Berita</span></a></li>
            <li><a href="<?php echo site_url('Grafik');?>"><i class="fa fa-pie-chart"></i> <span>Grafik</span></a></li>
          </ul>
        </div><!-- tab-pane -->

        <!-- ######################## POST MENu ##################### -->

        <div class="tab-pane" id="emailmenu">
          <div class="sidebar-btn-wrapper">
            <a href="<?php echo site_url('Dashboard/post');?>" class="btn btn-danger btn-block">Post Berita</a>
          </div>
        </div><!-- tab-pane -->

      </div><!-- tab-content -->

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

  <div class="mainpanel">

    <!--<div class="pageheader">
    <h2><i class="fa fa-home"></i> Dashboard</h2>
  </div>-->

  <div class="contentpanel">
    <ol class="breadcrumb breadcrumb-quirk">
      <li><a href="<?php echo site_url('Dashboard/index');?>"><i class="fa fa-home mr5"></i> Home</a></li>
      <li class="active">Edit Berita</li>
    </ol>

    <div class="panel">
      <div class="panel-heading">
        <h4 class="panel-title">Edit Berita</h4>
        <p>Isi Topik Berita, Judul Berita, dan Isi Berita</p>
      </div>
      <div class="panel-body">
        <?php
        if(isset($message)){
          ?>
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <strong><?php echo $message;?></strong>
          </div>
        <?php }?>
        <form action="<?php echo site_url('Berita/edit_berita')."/$id_isi_berita"; ?>" method=post id='form_berita'>
          Jenis Berita:
          <?php
          if($jenis_berita=="Kemenristekdikti"){
            ?>
            <label class="rdiobox">
              <input type="radio" name="jenis_berita" checked required value="Kemenristekdikti">
              <span>Kemenristekdikti</span><br>
            </label>
            <label class="rdiobox">
              <input type="radio" name="jenis_berita" value="Non-Kemenristekdikti">
              <span>Non-Kemenristekdikti</span>
            </label>
          <?php
          }else{
            ?>
            <label class="rdiobox">
              <input type="radio" name="jenis_berita" required value="Kemenristekdikti">
              <span>Kemenristekdikti</span><br>
            </label>
            <label class="rdiobox">
              <input type="radio" name="jenis_berita" checked value="Non-Kemenristekdikti">
              <span>Non-Kemenristekdikti</span>
            </label>
          <?php
          }
           ?>

          <div class="form-group">
            <select name ='id_sub_topik' id="cmb_sub_topik" class="form-control select_search" style="width: 100%" data-placeholder="Sub Topik Berita" required>
              <option value=''>Sub Topik Berita</option>
              <?php
              $i=0;
              for($i<0;$i<$jml_sub_topik;$i++){
                // echo "<hr>";
                if($kd_sub_topik ==  $id_sub_topik[$i]){
                  echo "<option value=".$id_sub_topik[$i]." selected>".$nama_sub_topik[$i]."</option>";
                }else{
                  echo "<option value=".$id_sub_topik[$i].">".$nama_sub_topik[$i]."</option>";
                }
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <select name='id_berita' id="cmb_topik" class="form-control select_search" style="width: 100%" data-placeholder="Topik Berita" required>
              <option value=''>Pilih</option>
              <?php
              $i=0;
              for($i<0;$i<$jml_topik;$i++){
                // echo "<hr>";
                if($kd_topik ==  $id_berita[$i]){
                  echo "<option value=".$id_berita[$i]." selected>".$topik_berita[$i]."</option>";
                }else{
                  echo "<option value=".$id_berita[$i].">".$topik_berita[$i]."</option>";
                }
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <input name='judul' type="text" value='<?php echo $judul;?>' placeholder="Judul Berita" class="form-control" required>
          </div>
          <div class="form-group">
            <select name='id_media' id="select1" class="form-control" style="width: 100%" data-placeholder="Sumber" required>
              <option value="">&nbsp;</option>
              <?php
              $i=0;
              for($i<0;$i<$jml_media;$i++){
                // echo "<hr>";
                if($sumber == $id_media[$i]){
                  echo "<option value=".$id_media[$i]." selected>".$nama_media[$i]."</option>";
                }else{
                  echo "<option value=".$id_media[$i].">".$nama_media[$i]."</option>";
                }
              }
              echo "<option value='Sumber Lain'>Sumber Lain</option>";
              ?>

            </select>
          </div>
          <div class="form-group">
            <select name='id_narasumber' id="cmb_narasumber" class="form-control select_search" style="width: 100%" data-placeholder="Narasumber 1" required>
              <option value="">Narasumber 1</option>
              <?php
              $i=0;
              for($i<0;$i<$jml_narasumber;$i++){
                // echo "<hr>";
                if($narasumber_inti1 == $id_narasumber[$i]){
                  echo "<option value=".$id_narasumber[$i]." selected>".$nama_narasumber[$i]."</option>";

                }else{
                  echo "<option value=".$id_narasumber[$i].">".$nama_narasumber[$i]."</option>";
                }
              }
              ?>

            </select>
          </div>
          <div class="form-group">
            <select name='sub_narasumber' id="cmb_sub_narasumber" class="form-control select_search" style="width: 100%" data-placeholder="Sub Narasumber 1" required>
              <option value="">Sub Narasumber 1</option>
              <?php
              foreach($subnarsum1 as $row){
                // echo "<hr>";
                if($id_narasumber1 == $row['id_sub_narasumber']){
                  echo "<option value=".$row['id_sub_narasumber']." selected>".$row['nama_sub_narasumber']."</option>";

                }else{
                  echo "<option value=".$row['id_sub_narasumber'].">".$row['nama_sub_narasumber']."</option>";
                }
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <select name='id_narasumber2' id="cmb_narasumber2" class="form-control select_search" style="width: 100%" data-placeholder="Narasumber 2">
              <option value="">Narasumber 2</option>
              <?php
              $i=0;
              for($i<0;$i<$jml_narasumber;$i++){
                // echo "<hr>";
                if($narasumber_inti2 == $id_narasumber[$i]){
                  echo "<option value=".$id_narasumber[$i]." selected>".$nama_narasumber[$i]."</option>";

                }else{
                  echo "<option value=".$id_narasumber[$i].">".$nama_narasumber[$i]."</option>";
                }
              }
              ?>

            </select>
          </div>
          <div class="form-group">
            <select name='sub_narasumber2' id="cmb_sub_narasumber2" class="form-control select_search" style="width: 100%" data-placeholder="Sub Narasumber 2">
              <option value="">Sub Narasumber 2</option>
              <?php
              foreach($subnarsum2 as $row){
                // echo "<hr>";
                if($id_narasumber2 == $row['id_sub_narasumber']){
                  echo "<option value=".$row['id_sub_narasumber']." selected>".$row['nama_sub_narasumber']."</option>";

                }else{
                  echo "<option value=".$row['id_sub_narasumber'].">".$row['nama_sub_narasumber']."</option>";
                }
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <select name='id_narasumber3' id="cmb_narasumber3" class="form-control select_search" style="width: 100%" data-placeholder="Narasumber 3" >
              <option value="">Narasumber 3</option>
              <?php
              $i=0;
              for($i<0;$i<$jml_narasumber;$i++){
                // echo "<hr>";
                if($narasumber_inti3 == $id_narasumber[$i]){
                  echo "<option value=".$id_narasumber[$i]." selected>".$nama_narasumber[$i]."</option>";

                }else{
                  echo "<option value=".$id_narasumber[$i].">".$nama_narasumber[$i]."</option>";
                }
              }
              ?>

            </select>
          </div>
          <div class="form-group">
            <select name='sub_narasumber3' id="cmb_sub_narasumber3" class="form-control select_search" style="width: 100%" data-placeholder="Sub Narasumber 3" >
              <option value="">Sub Narasumber 3</option>
              <?php
              foreach($subnarsum3 as $row){
                // echo "<hr>";
                if($id_narasumber3 == $row['id_sub_narasumber']){
                  echo "<option value=".$row['id_sub_narasumber']." selected>".$row['nama_sub_narasumber']."</option>";

                }else{
                  echo "<option value=".$row['id_sub_narasumber'].">".$row['nama_sub_narasumber']."</option>";
                }
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <select name ='id_narasumber4' id="cmb_narasumber4" class="form-control select_search" style="width: 100%" data-placeholder="Narasumber 4">
              <option value="">Narasumber 4</option>
              <?php
              $i=0;
              for($i<0;$i<$jml_narasumber;$i++){
                // echo "<hr>";
                if($narasumber_inti4 == $id_narasumber[$i]){
                  echo "<option value=".$id_narasumber[$i]." selected>".$nama_narasumber[$i]."</option>";

                }else{
                  echo "<option value=".$id_narasumber[$i].">".$nama_narasumber[$i]."</option>";
                }
              }
              ?>

            </select>
          </div>

          <div class="form-group">
            <select name ='sub_narasumber4' id="cmb_sub_narasumber4" class="form-control select_search" style="width: 100%" data-placeholder="Sub Narasumber 4">
              <option value="">Sub Narasumber 4</option>
              <?php

              foreach($subnarsum4 as $row){
                // echo "<hr>";
                if($id_narasumber4 == $row['id_sub_narasumber']){
                  echo "<option value=".$row['id_sub_narasumber']." selected>".$row['nama_sub_narasumber']."</option>";

                }else{
                  echo "<option value=".$row['id_sub_narasumber'].">".$row['nama_sub_narasumber']."</option>";
                }
              }
              ?>
            </select>
          </div>

          <div class="form-group">
          Upload Gambar Berita
          <input type="file" name="file_upload">
        </div>




              <div class="input-group">
               <input type="text" name='tgl_berita' value="<?=$tgl_berita;?>" class="form-control" placeholder="Tanggal Berita" id="datepicker" required>
               <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
             </div>
             <div class="form-group" style="margin-top:30px;">
               <input name='wartawan' value="<?=$wartawan;?>" type="text" placeholder="Wartawan" class="form-control" maxlength="30" required>
             </div>
             <label class="ckbox ckbox-primary">
                    <input type="checkbox" id="trigger"><span>Sumber Online</span>
                  </label>

            <div class="form-group" style="margin-top:30px;">
              <input name='halaman' type="text" value="<?=$halaman;?>" placeholder="Halaman" class="halaman form-control">
            </div>
             <div class="form-group" style="margin-top:30px;">
               <input name='link_berita' value="<?=$link_berita;?>" type="text" placeholder="Link Berita" class="sumber form-control" required disabled>
             </div>

             <div class="input-group">
                <span class="input-group-addon">Rp</span>
                <input type="text" value="<?=$ad_value;?>" class="form-control" placeholder="Ad Value" name="ad_value" id='auto_number1'>
              </div>

              <div class="input-group">
                 <span class="input-group-addon">Rp</span>
                 <input type="text" value="<?=$news_value;?>" class="form-control" placeholder="News Value" name="news_value" id='auto_number2'>
               </div>


              <div class="form-group" style='margin-top:20px;'>
                <textarea name='isi_berita' id="autosize" class="form-control" rows="3" placeholder="Isi Berita" required><?php echo strip_tags($isi_berita); ?></textarea>
              </div>
              <div class="form-group" style='margin-top:30px;'>
                <button class="btn btn-primary btn-block" form='form_berita'>Post</button>
              </div>
        </div>
      </div>

    </div><!-- contentpanel -->

  </div><!-- mainpanel -->

</section>



<script src="<?php echo base_url();?>assets/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-autosize/autosize.js"></script>
<script src="<?php echo base_url();?>assets/lib/select2/select2.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-toggles/toggles.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-maskedinput/jquery.maskedinput.js"></script>
<script src="<?php echo base_url();?>assets/lib/timepicker/jquery.timepicker.js"></script>
<script src="<?php echo base_url();?>assets/lib/dropzone/dropzone.js"></script>
<script src="<?php echo base_url();?>assets/lib/bootstrapcolorpicker/js/bootstrap-colorpicker.js"></script>

<script src="<?php echo base_url();?>assets/js/quirk.js"></script>

<script>
$(function() {

  enable_cb();
  $(".halaman").show();
  $("#trigger").click(enable_cb);
  function enable_cb() {
    if (this.checked) {
      $("input.sumber").prop("disabled",false);
    } else {
      $("input.sumber").prop("disabled", true);
      $("input.sumber").prop("required", false);
    }
    $(".halaman").toggle();
  }

  // Textarea Auto Resize
  autosize($('#autosize'));

  // Select2 Box
  $('#select1, #select2, #select3').select2();
  $('.select_search').select2();
  $("#select4").select2({ maximumSelectionLength: 2 });
  $("#select5").select2({ minimumResultsForSearch: Infinity });
  $("#select6").select2({ tags: true });

  // Toggles
  $('.toggle').toggles({
    on: true,
    height: 26
  });

  // Input Masks
  $("#date").mask("99/99/9999");
  $("#phone").mask("(999) 999-9999");
  $("#ssn").mask("999-99-9999");

  // Date Picker
  $('#datepicker').datepicker(({dateFormat: 'yy-mm-dd'}));
  $('#datepicker-inline').datepicker(({dateFormat: 'dd-mm-yyyy'}));
  $('#datepicker-multiple').datepicker({ numberOfMonths: 2 });

  // Time Picker
  $('#tpBasic').timepicker();
  $('#tp2').timepicker({'scrollDefault': 'now'});
  $('#tp3').timepicker();

  $('#setTimeButton').on('click', function (){
    $('#tp3').timepicker('setTime', new Date());
  });

  // Colorpicker
  $('#colorpicker1').colorpicker();
  $('#colorpicker2').colorpicker({
    customClass: 'colorpicker-lg',
    sliders: {
      saturation: {
        maxLeft: 200,
        maxTop: 200
      },
      hue: { maxTop: 200 },
      alpha: { maxTop: 200 }
    }
  });

});
</script>

<!--
untuk otomatis narasumber
-->
<script type="text/javascript">
$(function(){
  $("#cmb_narasumber").change(function(){
    var id_narasumber = $(this).val();

    $.ajax({
      type: "POST",
      dataType: "html",
      url: "http://localhost/dikti3/index.php/Narasumber/get/",
      data: "id_narasumber="+id_narasumber,
      success: function(data){
        // alert("hello wordl");
        if(data==''){
          $("select#cmb_sub_narasumber").html('<option value="">Sub Narasumber</option>');

        }else{

          $("select#cmb_sub_narasumber").html('<option value="">Sub Narasumber</option>'+data);
        }

      }

    });
  });

  $("#cmb_narasumber2").change(function(){
    var id_narasumber = $(this).val();

    $.ajax({
      type: "POST",
      dataType: "html",
      url: "http://localhost/dikti3/index.php/Narasumber/get/",
      data: "id_narasumber="+id_narasumber,
      success: function(data){
        // alert("hello wordl");
        if(data==''){
          $("select#cmb_sub_narasumber2").html('<option value="">Sub Narasumber</option>');

        }else{

          $("select#cmb_sub_narasumber2").html('<option value="">Sub Narasumber</option>'+data);
        }

      }

    });
  });

  $("#cmb_narasumber3").change(function(){
    var id_narasumber = $(this).val();

    $.ajax({
      type: "POST",
      dataType: "html",
      url: "http://localhost/dikti3/index.php/Narasumber/get/",
      data: "id_narasumber="+id_narasumber,
      success: function(data){
        // alert("hello wordl");
        if(data==''){
          $("select#cmb_sub_narasumber3").html('<option value="">Sub Narasumber</option>');

        }else{

          $("select#cmb_sub_narasumber3").html('<option value="">Sub Narasumber</option>'+data);
        }

      }

    });
  });

  $("#cmb_narasumber4").change(function(){
    var id_narasumber = $(this).val();

    $.ajax({
      type: "POST",
      dataType: "html",
      url: "http://localhost/dikti3/index.php/Narasumber/get/",
      data: "id_narasumber="+id_narasumber,
      success: function(data){
        // alert("hello wordl");
        if(data==''){
          $("select#cmb_sub_narasumber4").html('<option value="">Sub Narasumber</option>');

        }else{

          $("select#cmb_sub_narasumber4").html('<option value="">Sub Narasumber</option>'+data);
        }

      }

    });
  });

  $("#cmb_sub_topik").change(function(){
    var id_sub_topik = $(this).val();

    $.ajax({
      type: "POST",
      dataType: "html",
      url: "http://localhost/dikti3/index.php/Berita/get_topik/",
      data: "id_sub_topik="+id_sub_topik,
      success: function(data){
        // alert("hello wordl");
        if(data==''){
          $("select#cmb_topik").html('<option value="">Topik</option>');

        }else{

          $("select#cmb_topik").html('<option value="">Topik</option>'+data);
        }

      }

    });
  });

        $('#auto_number1').keyup(function(event) {

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

      $('#auto_number2').keyup(function(event) {

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
});
</script>

</body>
</html>
