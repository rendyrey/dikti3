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
            <li class='active'><a href="<?php echo site_url('Grafik');?>"><i class="fa fa-pie-chart"></i> <span>Grafik</span></a></li>
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
      <li class="active">Grafik</li>
    </ol>

    <div class="panel">
      <div class="panel-heading">
        <h4 class="panel-title">Grafik</h4>
        <p>Monitoring media secara grafik</p></div>
        <div class="panel-body">
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
          google.charts.load('current', {'packages':['line']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {

            var data = new google.visualization.DataTable();

            <?php
            if($data=='topik'){
              ?>
              data.addColumn('string','Tanggal');
              <?php
              for($i=0;$i<$jml_topik_all;$i++){
                ?>
                data.addColumn('number','<?php echo $nama_topik[$i];?>');
                <?php
              }

            }else if($data == 'sub_topik'){
              ?>
              data.addColumn('string','Tanggal');
              <?php
              for($i=0;$i<$jml_topik_all;$i++){
                ?>
                data.addColumn('number','<?php echo $nama_sub_topik[$i];?>');
                <?php
              }

            }
            else if($data == 'media'){
              ?>
              data.addColumn('string','Tanggal');
              <?php
              for($i=0;$i<$jml_media;$i++){
                ?>
                data.addColumn('number','<?php echo $nama_media[$i];?>');
                <?php
              }
            }else if($data == 'narasumber'){
              ?>
              data.addColumn('string','Tanggal');
              <?php
              for($i=0;$i<$jml_narasumber_all;$i++){
                ?>
                data.addColumn('number','<?php echo $nama_narasumber[$i];?>');
                <?php
              }
            }
            else{
              ?>
              data.addColumn('string', 'Tanggal');
              data.addColumn('number', 'Positif');
              data.addColumn('number', 'Negatif');
              data.addColumn('number', 'Netral');
              <?php } ?>
              data.addRows([
                <?php
                if($data == 'topik'){
                  for($i=0;$i<$jml_tgl;$i++){
                    $l = $i+1;
                    echo "['".$tgl_berita[$i]."',";
                    for($j=0;$j<$jml_topik_all;$j++){
                      $k=$j+1;
                      echo $jml_topik[$i][$j];
                      if($k<$jml_topik_all){
                        echo ",";
                      }else{
                        echo "]";
                      }
                    }
                    if($l<$jml_tgl){
                      echo ",";
                    }
                  }
                }else if($data == 'sub_topik'){
                  for($i=0;$i<$jml_tgl;$i++){
                    $l = $i+1;
                    echo "['".$tgl_berita[$i]."',";
                    for($j=0;$j<$jml_sub_topik_all;$j++){
                      $k=$j+1;
                      echo $jml_sub_topik[$i][$j];
                      if($k<$jml_sub_topik_all){
                        echo ",";
                      }else{
                        echo "]";
                      }
                    }
                    if($l<$jml_tgl){
                      echo ",";
                    }
                  }
                }else if($data == 'narasumber'){
                  for($i=0;$i<$jml_tgl;$i++){
                    $l = $i+1;
                    echo "['".$tgl_berita[$i]."',";
                    for($j=0;$j<$jml_narasumber_all;$j++){
                      $k=$j+1;
                      echo $jml_narasumber[$i][$j];
                      if($k<$jml_narasumber_all){
                        echo ",";
                      }else{
                        echo "]";
                      }
                    }
                    if($l<$jml_tgl){
                      echo ",";
                    }
                  }
                }else if($data != 'media'){
                  for($i=0;$i<$jml_tgl;$i++){
                    $j=$i+1;
                    echo "['".$tgl_berita[$i]."',".$tone_positif[$i].",".$tone_negatif[$i].",".$tone_netral[$i]."]";
                    if($j<$jml_tgl){
                      echo ",";
                    }
                  }

                }else{
                  for($i=0;$i<$jml_tgl;$i++){
                    $l = $i+1;
                    echo "['".$tgl_berita[$i]."',";
                    for($j=0;$j<$jml_media;$j++){
                      $k=$j+1;
                      echo $jml_sumber[$i][$j];
                      if($k<$jml_media){
                        echo ",";
                      }else{
                        echo "]";
                      }
                    }
                    if($l<$jml_tgl){
                      echo ",";
                    }
                  }
                }
                ?>
                // [1,  37.8, 80.8, 41.8],
                // [2,  30.9, 69.5, 32.4],
                // [3,  25.4,   57, 25.7],
                // [4,  11.7, 18.8, 10.5],
                // [5,  11.9, 17.6, 10.4],
                // [6,   8.8, 13.6,  7.7],
                // [7,   7.6, 12.3,  9.6],
                // [8,  12.3, 29.2, 10.6],
                // [9,  16.9, 42.9, 14.8],
                // [10, 12.8, 30.9, 11.6],
                // [11,  5.3,  7.9,  4.7],
                // [12,  6.6,  8.4,  5.2],
                // [13,  4.8,  6.3,  3.6],
                // [14,  4.2,  6.2,  3.4]
              ]);

              var options = {
                chart: {
                  title: '<?php echo $judul;?>',
                  subtitle: 'pertanggal'
                },
                width: 900,
                height: 800,
                axes: {
                  x: {
                    0: {side: 'top'}
                  }
                }
              };

              var chart = new google.charts.Line(document.getElementById('line_top_x'));

              chart.draw(data, google.charts.Line.convertOptions(options));
            }
            </script>
            Jika ingin melihat grafik pie chart klik tombol di bawah ini
            <form action='<?php echo site_url('Grafik');?>' id='grafik_pie'>
              <button class="btn btn-info" form='grafik_pie'>Grafik Pie Chart</button>
            </form>
            <br>
            <form action=<?php echo site_url('Grafik/grafik_kronologi');?> method='post' id="form_cari">
              <div class="row">
                <div class="col-sm-2">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    <div class="timepicker"><input id="datepicker" type="text" placeholder="Tanggal Mulai" class="form-control ui-timepicker-input" autocomplete="off" name="tgl_awal" required></div>
                    <div class="timepicker"><input id="datepicker2" type="text" placeholder="Tanggal Akhir" class="form-control ui-timepicker-input" autocomplete="off" name="tgl_akhir" required></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <select id="select1" name="tone" class="form-control select2-hidden-accessible" style="width: 40%" data-placeholder="Tone" tabindex="-1" aria-hidden="true" required>
                    <option value=""></option>
                    <option value="tone_berita">Tone Berita</option>
                    <!-- <option value="tone_judul">Tone Judul</option> -->
                    <option value="tone_kutipan">Tone Kutipan</option>
                    <option value="media">Media</option>
                    <option value="narasumber">Narasumber</option>
                    <option value="topik">Topik Berita</option>
                    <!-- <option value="sub_topik">Sub Topik</option> -->
                  </select>
                  <button class="btn btn-primary" form="form_cari">Submit</button>
                </div>
              </div>
            </form>
            <div id="line_top_x" style="margin-top:50px;width: 100%; height: 800px;padding:auto;"></div>

          </div>
        </div><!-- panel -->

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

    // Textarea Auto Resize
    autosize($('#autosize'));

    // Select2 Box
    $('#select1, #select2, #select3').select2();
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
    $('#datepicker-inline').datepicker();
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
</body>
</html>
