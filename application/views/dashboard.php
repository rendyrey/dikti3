ade<!DOCTYPE html>
<html lang="en" >
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
  <header>
    <div class="headerpanel" style="background-color:#681818">
      <div class="logopanel">
        <h4><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/ristek_dikti_logo.png" height="30" hspace="5">    Media Monitoring</a></h4>
      </div><!-- logopanel -->
      <div class="headerbar">
        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
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
  <div class="leftpanel" style="font-family: roboto !important;">
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
      </div><!-- left panel profile -->
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
                  echo "<li ><a href=".site_url('Berita/tabel_berita/').$id_berita_menu[$i]." style='margin-bottom:15px;'>".$topik_berita[$i]."</a></li>";
                  // echo "<hr>";
                }
                ?>
                <!-- <li><a href=''></a></li> -->
              </ul>
            </li>
            <li class="nav-parent"><a href=""><i class="fa fa-cube"></i> <span>Program Media</span></a>
              <ul class="children">
                <li class='active'><a href='<?php echo site_url('ProgramMedia/wawancara');?>'>Wawancara</a></li>
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

        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-announcement">
              <ul class="panel-options">
                <li><a><i class="fa fa-refresh"></i></a></li>
                <li><a class="panel-remove"><i class="fa fa-remove"></i></a></li>
              </ul>
              <div class="panel-heading">
                <h4 class="panel-title">Berita Hari Ini</h4>
              </div>
              <div class="panel-body">
                <h2><br>
                  Pilih berita mana yang akan ditampilkan:</h2>
                  <script>
                  function showRSS(str) {
                    if (str.length==0) {
                      document.getElementById("rssOutput").innerHTML="";
                      return;
                    }
                    if (window.XMLHttpRequest) {
                      // code for IE7+, Firefox, Chrome, Opera, Safari
                      xmlhttp=new XMLHttpRequest();
                    } else {  // code for IE6, IE5
                      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange=function() {
                      if (this.readyState==4 && this.status==200) {
                        document.getElementById("rssOutput").innerHTML=this.responseText;
                      }
                    }
                    xmlhttp.open("GET","<?php echo base_url();?>assets/crawl.php?q="+str,true);
                    xmlhttp.send();
                  }
                  </script>


                  <form>
                    <select onchange="showRSS(this.value)" class="form-control select_search" style="width: 100%" data-placeholder="Pilih Media">
                      <option value="">Select an RSS-feed:</option>
                      <option value="Antara">Antara News</option>
                      <option value="Balipost">Bali Post</option>
                      <option value="CNN">CNN Indonesia</option>
                      <option value="Detik">Detik.com</option>
                      <option value="Kompas.com">Kompas.com</option>
                      <option value="Kompas.id">Kompas.id</option>
                      <option value="Liputan6">Liputan6.com</option>
                      <option value="PR">Pikiran Rakyat</option>
                      <option value="Republika">Republika</option>
                      <option value="SM">Suara Merdeka</option>
                      <option value="Tirto">Tirto.id</option>
                      <option value="Tribun">Tribun News</option>
                      <option value="TVOne">TV One News</option>
                      <option value="Vivanews">Vivanews</option>
                      <option value="VOA">VOA News</option>
                      <option value="BeritaSatu">Berita Satu</option>
                      <option value="Bisnis.com">Bisnis.com</option>
                      <option value="JawaPos">Jawa Pos</option>
                      <option value="Okezone">Okezone</option>
                      <option value="Tempo">Tempo</option>
                      <!-- <option value="Kabar24">Kabar24</option> -->
                      <!-- <option value="SinarHarapan">Sinar Harapan</option> <! belum -->
                      <option value="Beritagar">Beritagar</option>
                      <!-- <option value="Kumparan">Kumparan</option> <! belum -->
                      <option value="Rmol.co">Rmol.co</option>
                      <option value="JPNN">JPNN</option>
                      <option value="PojokSatu">Pojok Satu</option>
                      <!-- <option value="RRI">RRI</option> belum -->
                      <option value="AntaraJateng">Antara Jateng</option>
                      <option value="AntaraJabar">Antara Jabar</option>
                      <option value="AntaraJogja">Antara Jogja</option>
                      <option value="AntaraBali">Antara Bali</option>
                      <option value="AntaraJatim">Antara Jatim</option>
                      <option value="AntaraMegapolitan">Antara Megapolitan</option>
                      <option value="AntaraMataram">Antara Mataram</option>
                      <option value="AntaraGorontalo">Antara Gorontalo</option>
                      <option value="AntaraPapuabarat">Antara Papua Barat</option>
                      <option value="AntaraSultra">Antara Sulawesi Tenggara</option>
                      <option value="AntaraSulut">Antara Sulawesi Utara</option>
                      <option value="AntaraSulteng">Antara Sulawesi Tengah</option>
                      <option value="AntaraMakassar">Antara Makassar</option>
                      <option value="AntaraAceh">Antara Aceh</option>
                      <option value="AntaraKepri">Antara Kepulauan Riau</option>
                      <option value="AntaraBanten">Antara Banten</option>
                      <option value="AntaraKalteng">Antara Kalimantan Tengah</option>
                      <option value="AntaraKaltim">Antara Kalimantan Timur</option>
                      <option value="AntaraKalsel">Antara Kalimantan Selatan</option>
                      <option value="AntaraKalbar">Antara Kalimantan Barat</option>
                      <option value="AntaraKalut">Antara Kalimantan Utara</option>
                      <option value="AntaraKupang">Antara Kupang</option>
                      <option value="AntaraMaluku">Antara Maluku</option>
                      <option value="AntaraBabel">Antara Bangka Belitung</option>
                      <option value="AntaraJambi">Antara Jambi</option>
                      <option value="TribunJabar">Tribun Jabar</option>
                      <option value="TribunBogor">Tribun Bogor</option>
                      <option value="TribunJogja">Tribun Jogja</option>
                      <option value="TribunJateng">Tribun Jateng</option>
                      <option value="TribunSolo">Tribun Solo</option>
                      <option value="TribunSurabaya">Tribun Surabaya</option>
                      <option value="TribunSuryamalang">Tribun Suryamalang</option>
                      <option value="TribunBali">Tribun Bali</option>
                      <option value="TribunAceh">Tribun Aceh</option>
                      <option value="TribunMedan">Tribun Medan</option>
                      <option value="TribunPekanbaru">Tribun Pekanbaru</option>
                      <option value="TribunBatam">Tribun Batam</option>
                      <option value="TribunJambi">Tribun Jambi</option>
                      <option value="TribunPalembang">Tribun Palembang</option>
                      <option value="TribunBangka">Tribun Bangka</option>
                      <option value="TribunLampung">Tribun Lampung</option>
                    </select>
                  </form>
                  <br>
                  <div id="rssOutput">RSS-feed will be listed here...</div>
                </div>
              </div><!-- panel -->


            <div class="row panel-statistics">
              <a href="<?=site_url('Berita/tabel_tone/1');?>">
              <div class="col-sm-6">
                <div class="panel panel-success-full panel-updates">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-7 col-lg-8">
                        <h4 class="panel-title text-success">Positif</h4>
                        <h3><?=$jml_positif;?></h3>
                        <div class="progress">
                          <div style="width:<?=$persen_pos;?>%" role="progressbar" class="progress-bar progress-bar-success">
                            <!-- <span class="sr-only">75.7% Complete (success)</span> -->
                          </div>
                        </div>
                        <p>Berita Positif hari ini</p>
                      </div>
                      <div class=" col-sm-4">
                        <div class="pull-left">
                          <div class="icon icon ion-stats-bars"></div>
                        </div>
                        <div class="pull-left">
                          <h4 class="panel-title">&nbsp;&nbsp;Persentase</h4>
                          <h3><?=number_format($persen_pos,2,'.','');?>%</h3>

                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- panel -->
              </div><!-- col-sm-6 -->
            </a>

            <a href="<?=site_url('Berita/tabel_tone/-1');?>">
              <div class="col-sm-6">
                <div class="panel panel-danger-full panel-updates">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-7 col-lg-8">
                        <h4 class="panel-title text-success">Negatif</h4>
                        <h3><?=$jml_negatif;?></h3>
                        <div class="progress">
                          <div style="width:<?=$persen_neg;?>%"  role="progressbar" class="progress-bar progress-bar">
                            <!-- <span class="sr-only">75.7% Complete (success)</span> -->
                          </div>
                        </div>
                        <p>Berita Negatif hari ini</p>
                      </div>
                      <div class=" col-sm-4">
                        <div class="pull-left">
                          <div class="icon icon ion-stats-bars"></div>
                        </div>
                        <div class="pull-left">
                          <h4 class="panel-title">&nbsp;&nbsp;Persentase</h4>
                          <h3><?=number_format($persen_neg,2,'.','');?>%</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- panel -->
              </div><!-- col-sm-6 -->
            </a>

            <a href="<?=site_url('Berita/tabel_tone/0');?>">
              <div class="col-sm-6">
                <div class="panel panel-warning-full panel-updates">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-7 col-lg-8">
                        <h4 class="panel-title text-success">Netral</h4>
                        <h3><?=$jml_netral;?></h3>
                        <div class="progress">
                          <div style="width:<?=$persen_net;?>%" role="progressbar" class="progress-bar progress-bar-success">
                            <!-- <span class="sr-only">75.7% Complete (success)</span> -->
                          </div>
                        </div>
                        <p>Berita Netral hari ini</p>
                      </div>
                      <div class=" col-sm-4">
                        <div class="pull-left">
                          <div class="icon icon ion-stats-bars"></div>
                        </div>
                        <div class="pull-left">
                          <h4 class="panel-title">&nbsp;&nbsp;Persentase</h4>
                          <h3><?=number_format($persen_net,2,'.','');?>%</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- panel -->
              </div><!-- col-sm-6 -->
            </a>
            <a>
              <div class="col-sm-6">
                <div class="panel panel-updates">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-7 col-lg-8">
                        <h4 class="panel-title text-success">Total</h4>
                        <h3><?=$total;?></h3>
                        <div class="progress">
                          <div style="width:<?=$persen_tot;?>%" role="progressbar" class="progress-bar progress-bar-success">
                            <!-- <span class="sr-only">75.7% Complete (success)</span> -->
                          </div>
                        </div>
                        <p>Total Berita hari ini</p>
                      </div>

                    </div>
                  </div>
                </div><!-- panel -->
              </div><!-- col-sm-6 -->
            </a>





          </div><!-- col-md-12 -->
          <div class="col-md-6">
          <h3>Berita Kemenristekdikti</h3>
          <div style="height:350px;width:auto;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;background-color:white;">

            <?php
            if($jml_berita_today!=0){
              for($i=0;$i<$jml_berita_today;$i++){

                $tgl_news = date('D, j F Y',strtotime($tgl_berita[$i]));
                ?>
                <div class="panel">
                  <div class="panel-heading">
                    <h5 class="panel-title"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?=$tgl_news;?></h4>
                  </div>
                  <div class="panel-body">
                  <a href='<?php echo site_url('Berita/detail/').$id_isi_berita[$i];?>' target='_blank'><?=$judul_berita[$i];?></a>
                  </div>
                </div>
                <hr>
                <?php
              }


            }else{
              echo "<br><br>";
              echo "<center><h4>Belum ada berita</h4></center>";
            }
            ?>
          </div>

        </div><!-- row -->

        <div class="col-md-6">
          <h3>Trending Berita</h3>
          <div style="height:350px;width:auto;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;background-color:white;">
            <?php
            if($jml_berita_today!=0){

              for($i=0;$i<$jml_trend;$i++){

                $j=$i+1;
                ?>
                <div class="panel" style='height:30px;padding:0;'>
                  <div class="panel-body" style='height:30px;'>
                    <a href='<?=site_url('Berita/berita_trend/').$id_berita[$i]."/".$id_sub_topik[$i]?>'>
                  <?="#".$j."  ".$topik_trend[$i];?>
                </a>
                  </div>
                </div>
                <hr>
                <?php
              }
            }else{
              echo "<br><br>";
              echo "<center><h4>Belum ada berita</h4></center>";
            }
            ?>

          </div>
        </div>

        <div class="col-md-6">
          <h3>Berita Non-Kemenristekdikti</h3>
          <div style="height:350px;width:auto;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;background-color:white;">

            <?php
            if($jml_berita_today!=0){
              for($i=0;$i<$jml_berita_today;$i++){

                $tgl_news = date('D, j F Y',strtotime($tgl_berita[$i]));
                ?>
                <div class="panel">
                  <div class="panel-heading">
                    <h5 class="panel-title"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?=$tgl_news;?></h4>
                  </div>
                  <div class="panel-body">
                  <a href='<?php echo site_url('Berita/detail/').$id_isi_berita[$i];?>' target='_blank'><?=$judul_berita[$i];?></a>
                  </div>
                </div>
                <hr>
                <?php
              }


            }else{
              echo "<br><br>";
              echo "<center><h4>Belum ada berita</h4></center>";
            }
            ?>
          </div>
        </div>

        <div class="col-md-6">
          <h3>Trending Berita</h3>
          <div style="height:350px;width:auto;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;background-color:white;">
            <?php
            if($jml_berita_today!=0){

              for($i=0;$i<$jml_trend;$i++){

                $j=$i+1;
                ?>
                <div class="panel" style='height:30px;padding:0;'>
                  <div class="panel-body" style='height:30px;'>
                    <a href='<?=site_url('Berita/berita_trend/').$id_berita[$i]."/".$id_sub_topik[$i]?>'>
                  <?="#".$j."  ".$topik_trend[$i];?>
                </a>
                  </div>
                </div>
                <hr>
                <?php
              }
            }else{
              echo "<br><br>";
              echo "<center><h4>Belum ada berita</h4></center>";
            }
            ?>

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
</body>
</html>
