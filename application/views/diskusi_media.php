<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  @font-face {
    font-family: Roboto;
    src: url('<?php echo base_url();?>assets/Roboto-Regular.ttf');
  }

  html {
    font-family: Roboto !important;
  }

  body{
    font-family: Roboto !important;
  }

  div{
    font-family: Roboto !important;
  }
</style>
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
    <div class="headerpanel" style="background-color:#681818">

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

      <div class="media leftpanel-profile" style="background-color:#AFA82B">
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
            <li><a href="<?php echo site_url('Dashboard/index');?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
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
            <li class="nav-parent active"><a href=""><i class="fa fa-cube"></i> <span>Program Media</span></a>
              <ul class="children">
                <li><a href='<?php echo site_url('ProgramMedia/wawancara');?>'>Wawancara</a></li>
                <li><a href='<?php echo site_url('ProgramMedia/press_release');?>'>Press Release</a></li>
                <li><a href='<?php echo site_url('ProgramMedia/konferensi_pers');?>'>Konferensi Pers</a></li>
                <li><a href='<?php echo site_url('ProgramMedia/liputan_lapangan');?>'>Liputan Lapangan</a></li>
                <li class='active'><a href='<?php echo site_url('ProgramMedia/diskusi_media');?>'>Diskusi Media</a></li>
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
      <li>Program Media</li>
      <li class="active">Diskusi Media</li>
    </ol>

    <div class="panel">
      <div class="panel-heading">
        <h4 class="panel-title">Submit Program Media</h4>
        <p></p>
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
        <form action="<?=site_url('ProgramMedia/post');?>" method='post' id='form_program'>
          <input type='hidden' name='id_program' value='5'>
          <div class="form-group">
            <select name ='id_sub_topik' id="cmb_sub_topik" class="form-control select_search" style="width: 100%" data-placeholder="Sub Topik Berita" required>
              <option value=''>Sub Topik Berita</option>
              <?php 
              $i=0;
                for($i<0;$i<$jml_sub_topik;$i++){
                  // echo "<hr>";
                  echo "<option value=".$id_sub_topik[$i].">".$nama_sub_topik[$i]."</option>";
                }
               ?>
            </select>
          </div>
          <div class="form-group">
            <select name ='id_unit' class="form-control select_search" style="width: 100%" data-placeholder="Unit" required>
              <option value=''>Sub Topik Berita</option>
              <?php
              $i=0;
                for($i<0;$i<$jml_unit;$i++){
                  // echo "<hr>";
                  echo "<option value=".$id_unit[$i].">".$nama_unit[$i]."</option>";
                }
               ?>
            </select>
          </div>
          <div class="form-group">
                  <input type="text" placeholder="Judul Berita" class="form-control" name='judul' required>
          </div>

          <div class="form-group">
            <select name='tone' class="form-control select_search" style="width: 100%" data-placeholder="Tone Berita">
              <option value=''></option>
              <option value='1'>Positif</option>
              <option value='-1'>Negatif</option>
              <option value='0'>Netral</option>

            </select>
          </div>
          <div class="form-group">
                  <input type="text" id='auto_number1' placeholder="Ad Value" class="form-control" name='ad_value' required>
          </div>
          <div class="form-group" style='margin-top:20px;'>
            <textarea name='isi' id="autosize" class="form-control" rows="3" placeholder="Isi Berita" required></textarea>
          </div>
          <div class="form-group" style='margin-top:30px;'>
            <button class="btn btn-primary btn-block" form='form_program'>Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div> <!-- contentpanel -->

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
      url: "http://localhost/dikti/index.php/Narasumber/get/",
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
      url: "http://localhost/dikti/index.php/Narasumber/get/",
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
      url: "http://localhost/dikti/index.php/Narasumber/get/",
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
      url: "http://localhost/dikti/index.php/Narasumber/get/",
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

  $("#cmb_topik").change(function(){
    var id_berita = $(this).val();

    $.ajax({
      type: "POST",
      dataType: "html",
      url: "http://localhost/dikti/index.php/Berita/get_sub_topik/",
      data: "id_berita="+id_berita,
      success: function(data){
        // alert("hello wordl");
        if(data==''){
          $("select#cmb_sub_topik").html('<option value="">Sub Topik</option>');

        }else{

          $("select#cmb_sub_topik").html('<option value="">Sub Topik</option>'+data);
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
