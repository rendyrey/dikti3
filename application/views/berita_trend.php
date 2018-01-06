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

  <header >
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
          <h4 class="media-heading"><?php echo $_SESSION['username'];?><a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"></a></h4>
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
            <li class="nav-parent active"><a href=""><i class="fa fa-newspaper-o"></i> <span>Berita</span></a>
              <ul class="children">
                <?php
                $i=0;
                for($i<0;$i<$jml;$i++){
                  if($berita_aktif==$tipe_berita[$i]){
                    echo "<li class='active'>";
                  }else{
                    echo "<li>";
                  }
                  echo "<a href='".site_url('Berita/tabel_berita/').$tipe_berita[$i]."' style='margin-bottom:15px;'>".$topik_berita[$i]."</a></li>";
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
      <li class="active">Berita</li>
    </ol>

    <div class="panel">
      <div class="panel-heading">
        <h4 class="panel-title"><strong><?php echo $topik;?></strong></h4>
        <p class="text primary">Tabel dengan isi berita yang berkaitan dengan <b><?php echo $topik;?></b></p>
      </div>

      <div class="panel-body">

        <form action=<?php echo site_url('Berita/tabel_berita')."/".$berita_aktif;?> method='post' id="form_cari">
          <div class="row">
            <div class="col-sm-2">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <div class="timepicker"><input id="datepicker" type="text" placeholder="Tanggal Mulai" class="form-control ui-timepicker-input" autocomplete="off" name="tgl_awal" required></div>
                <div class="timepicker"><input id="datepicker2" type="text" placeholder="Tanggal Akhir" class="form-control ui-timepicker-input" autocomplete="off" name="tgl_akhir" required></div>
              </div>
            </div>
            <div class="col-sm-6">
              <button class="btn btn-primary" form="form_cari">Submit</button>
              <br>
            </div>
          </div>
        </form>
        <br>
        <?php
        $date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
        $prev_date = date('Y-m-d', strtotime($date .' -1 day'));
        $next_date = date('Y-m-d', strtotime($date .' +1 day'));
        $new_format_date = date('D, j F Y',strtotime($date));
        ?>
        <div class="btn-group">
          <a href='<?php echo site_url('Berita/tabel_berita'); echo "/$berita_aktif/$prev_date" ;?>?date=<?php echo $prev_date;?>'><button type="button" class="btn btn-primary">Prev Day</button></a>
          <a><button type="button" class="btn btn-primary" disabled=""><?php echo $new_format_date;?></button></a>
          <a href='<?php echo site_url('Berita/tabel_berita'); echo "/$berita_aktif/$next_date" ;?>?date=<?php echo $next_date;?>'><button type="button" class="btn btn-primary">Next Day</button></a>
        </div>
        <br>
        <div class="table-responsive">
          <table id="dataTable1" class="table table-bordered table-striped-col">
            <thead>
              <tr>
                <th>No.</th>
                <th>Ringkasan</th>
                <th>Media</th>
              </tr>
            </thead>



            <tbody>
              <?php
              $i=0;
              $j=1;
              for($i=0;$i<$jml_isi_berita;$i++){
                $label_judul='';
                if($tone_judul[$i]==1){
                  $label_judul='<span class="label label-success"><i class="fa fa-hand-o-up"></i>&nbsp;Positif</span>';
                }else if($tone_judul[$i]==0){
                  $label_judul='<span class="label label-warning"><i class="fa fa-hand-o-right"></i>&nbsp;Netral</span>';
                }else if($tone_judul[$i]==-1){
                  $label_judul='<span class="label label-danger"><i class="fa fa-hand-o-down"></i>&nbsp;Negatif</span>';
                }
                $label_berita='';
                if($tone_berita[$i]==1){
                  $label_berita='<span class="label label-success"><i class="fa fa-hand-o-up"></i>&nbsp;Positif</span>';
                }else if($tone_berita[$i]==0){
                  $label_berita='<span class="label label-warning"><i class="fa fa-hand-o-right"></i>&nbsp;Netral</span>';
                }else if($tone_berita[$i]==-1){
                  $label_berita='<span class="label label-danger"><i class="fa fa-hand-o-down"></i>&nbsp;Negatif</span>';
                }
                $label_kutipan='';
                if($tone_kutipan[$i]==1){
                  $label_kutipan='<span class="label label-success"><i class="fa fa-hand-o-up"></i>&nbsp;Positif</span>';
                }else if($tone_kutipan[$i]==0){
                  $label_kutipan='<span class="label label-warning"><i class="fa fa-hand-o-right"></i>&nbsp;Netral</span>';
                }else if($tone_kutipan[$i]==-1){
                  $label_kutipan='<span class="label label-danger"><i class="fa fa-hand-o-down"></i>&nbsp;Negatif</span>';
                }




                echo "<tr>";
                echo "<td>".$j."</td>";
                echo "<td align='left'><span class='glyphicon glyphicon-time' style='margin-right:5px;'></span>".$tgl_berita[$i];
                echo "<br>";
                echo "<h4>".$judul[$i]."&nbsp;".$label_judul."</h4>";
                echo "<button class='btn btn-info btn-xs'>Topik: <i><b>".$topik."</b></i></button><br>";

                $string = strip_tags($isi_berita[$i]);
                if (strlen($string) > 350) {
                  // truncate string
                  $stringCut = substr($string, 0, 350);
                  // make sure it ends in a word so assassinate doesn't become ass...
                  $string = substr($stringCut, 0, strrpos($stringCut, ' '))."...";
                }

                echo "<p>".$string."</p>".$label_berita;
                ?>
                <right>
                  <a href="<?php echo site_url('Berita/detail/').$id_isi_berita[$i];?>"
                    target="popup"
                    onclick="window.open('<?php echo site_url('Berita/detail/').$id_isi_berita[$i];?>','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                    Detail Berita
                  </a>
                </right>
                <?php
                echo "</td>";
                echo "<td>";
                echo "<a href=".$link_berita[$i]." title=".$link_berita[$i]."><i class='fa fa-newspaper-o'></i> </a>".$media[$i]."<br>";
                echo "<i class='fa fa-calculator'></i> Value<br>";
                echo "<i class='fa fa-caret-right'></i> Ad : Rp.".number_format($ad_value[$i])."<br>";
                echo "<i class='fa fa-caret-right'></i> News : Rp.".number_format($news_value[$i])."<br>";
                echo "<i class='fa fa-camera'></i> ".$wartawan[$i]."<br>";
                echo "<a href='".site_url('Berita/hapus/').$id_isi_berita[$i]."/".$id_berita[$i]."' class='confirmation'><i class='fa fa-close'>&nbsp;Hapus Berita</i></a><br>";
                echo "<a href='".site_url('Berita/edit/').$id_isi_berita[$i]."/".$id_berita[$i]."'><i class='fa fa-pencil-square-o'>&nbsp;&nbsp;Edit Berita</i></a>";
                ?>
                <a href="<?php echo site_url('Berita/detail/').$id_isi_berita[$i];?>"
                  target="popup"
                  onclick="window.open('<?php echo site_url('Berita/detail2/').$id_isi_berita[$i];?>','popup','width=600,height=600,scrollbars=no,resizable=no'); return false;">
                  PDF File
                </a>
                <?php
                echo "</td>";
                echo "</tr>";
                $j++;
              }
              ?>




            </tbody>
          </table>
        </div>
      </div>
      <!-- The Modal -->

    </div><!-- panel -->
    <!-- Trigger/Open The Modal -->


  </div><!-- contentpanel -->



</div><!-- mainpanel -->
<!-- Modal content -->

</section>





<script src="<?php echo base_url();?>assets/lib/jquery/jquery.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-autosize/autosize.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-toggles/toggles.js"></script>
<script src="<?php echo base_url();?>assets/lib/jquery-maskedinput/jquery.maskedinput.js"></script>
<script src="<?php echo base_url();?>assets/lib/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/lib/select2/select2.js"></script>
<script src="<?php echo base_url();?>assets/lib/timepicker/jquery.timepicker.js"></script>
<script src="<?php echo base_url();?>assets/js/quirk.js"></script>
<script>
$(document).ready(function() {



  'use strict';

  $('#dataTable1').DataTable();

  var exRowTable = $('#exRowTable').DataTable({
    responsive: true,
    'fnDrawCallback': function(oSettings) {
      $('#exRowTable_paginate ul').addClass('pagination-active-success');
    },
    'ajax': 'ajax/objects.txt',
    'columns': [{
      'class': 'details-control',
      'orderable': false,
      'data': null,
      'defaultContent': ''
    },
    { 'data': 'no' },
    { 'data': 'ringkasan' },
    { 'data': 'media' },
  ],
  'order': [[1, 'asc']]
});

// Add event listener for opening and closing details
$('#exRowTable tbody').on('click', 'td.details-control', function () {
  var tr = $(this).closest('tr');
  var row = exRowTable.row( tr );

  if ( row.child.isShown() ) {
    // This row is already open - close it
    row.child.hide();
    tr.removeClass('shown');
  } else {
    // Open this row
    row.child( format(row.data()) ).show();
    tr.addClass('shown');
  }
});

function format (d) {
  // `d` is the original data object for the row
  return '<h4>'+d.name+'<small>'+d.position+'</small></h4>'+
  '<p class="nomargin">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
}

// Select2
$('select').select2({ minimumResultsForSearch: Infinity });


});
</script>

<script type="text/javascript">
$('.confirmation').on('click', function () {
  return confirm('Are you sure?');
});
</script>

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
  $('#datepicker2').datepicker(({dateFormat: 'yy-mm-dd'}));
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
