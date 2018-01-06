<!DOCTYPE html>
<html>
<head>
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

  <title>Detail Berita</title>

  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/weather-icons/css/weather-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/jquery-toggles/toggles-full.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/quirk.css">
  <script src="<?php echo base_url();?>assets/canvas/html2canvas.js>"></script>
  <script src="<?php echo base_url();?>assets/lib/modernizr/modernizr.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <script src="../lib/respond/respond.src.js"></script>
  <![endif]-->
  </head>

  <body>






    <div class="contentpanel">

      <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-home mr5"></i> Home</a></li>
        <li class='active'><a href="<?php echo site_url('Berita');?>">Berita</a></li>
        <!-- <li class="active">Typography</li> -->
      </ol>



      <div class="panel">
        <div class="panel-heading">
          <?php
          if($tone_judul==1){
            $label_judul='<span class="label label-success"><i class="fa fa-hand-o-up"></i>&nbsp;Positif</span>';
          }else if($tone_judul==0){
            $label_judul='<span class="label label-warning"><i class="fa fa-hand-o-right"></i>&nbsp;Netral</span>';
          }else if($tone_judul==-1){
            $label_judul='<span class="label label-danger"><i class="fa fa-hand-o-down"></i>&nbsp;Negatif</span>';
          }
          $label_berita='';
          if($tone_berita==1){
            $label_berita='<span class="label label-success"><i class="fa fa-hand-o-up"></i>&nbsp;Positif</span>';
          }else if($tone_berita==0){
            $label_berita='<span class="label label-warning"><i class="fa fa-hand-o-right"></i>&nbsp;Netral</span>';
          }else if($tone_berita==-1){
            $label_berita='<span class="label label-danger"><i class="fa fa-hand-o-down"></i>&nbsp;Negatif</span>';
          }
          $label_kutipan='';
          if($tone_kutipan==1){
            $label_kutipan='<span class="label label-success"><i class="fa fa-hand-o-up"></i>&nbsp;Positif</span>';
          }else if($tone_kutipan==0){
            $label_kutipan='<span class="label label-warning"><i class="fa fa-hand-o-right"></i>&nbsp;Netral</span>';
          }else if($tone_kutipan==-1){
            $label_kutipan='<span class="label label-danger"><i class="fa fa-hand-o-down"></i>&nbsp;Negatif</span>';
          }

          ?>
          <h4 class="panel-title"><?php echo $judul."&nbsp;".$label_judul;?></h4>
          <p><?php echo $isi_berita."&nbsp;".$label_berita;?></p>
        </div><!-- panel-heading -->
        <div class="panel-body">
          <p class="lead">
            <blockquote>
              <i class="fa fa-quote-left"></i>
              <p><?php echo $kutipan."&nbsp;".$label_kutipan;?></p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </p>
        </div>
        <!-- <center><button onclick="myFunction()">Print this page</button></center> -->
      </div><!-- panel -->

    </div><!-- contentpanel -->




	<script src='<?php echo base_url();?>assets/jsPDF/dist/jspdf.debug.js'></script>
	<script src='<?php echo base_url();?>assets/jsPDF/libs/html2pdf.js'></script>

	<script>
		var pdf = new jsPDF('p', 'pt', 'letter');
		var canvas = pdf.canvas;
		var width = 600;
		//canvas.width=8.5*72;
		document.body.style.width=width + "px";

		html2canvas(document.body, {
		    canvas:canvas,
		    onrendered: function(canvas) {
		        var iframe = document.createElement('iframe');
		        iframe.setAttribute('style', 'position:absolute;top:0;right:0;height:100%; width:100%');
		        document.body.appendChild(iframe);
		        iframe.src = pdf.output('datauristring');

		       //var div = document.createElement('pre');
		       //div.innerText=pdf.output();
		       //document.body.appendChild(div);
		    }
		});
     </script>
</body>
</html>
