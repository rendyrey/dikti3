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

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/quirk.css">

  <script src="<?php echo base_url();?>assets/lib/modernizr/modernizr.js"></script>

  <script src="<?php echo base_url();?>assets/lib/jquery/jquery.js"></script>
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
<body class="signwrapper">

  <div class="sign-overlay"></div>
  <div class="signpanel"></div>

  <div class="panel signin">
    <div class="panel-heading">
      <h4 class="panel-title"><img src="<?php echo base_url();?>assets/images/ristek_dikti_logo.png"></h4>
      <h4 class="panel-title">Kementerian Riset Teknologi Dan Pendidikan Tinggi</h4>
    </div>
    <div class="panel-body">
      <!-- <button class="btn btn-primary btn-quirk btn-fb btn-block">Connect with Facebook</button> -->
      <div class="or"> Please Enter Your Information </div>
      <!-- <form action="index.html"> -->
      <?php echo form_open($action);?>
      <div class="form-group mb10">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="text" name="username" class="form-control" placeholder="Enter Username" value="<?php echo set_value('username');?>">
        </div>
        <?php echo form_error('username'); ?>
      </div>
      <div class="form-group nomargin">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo set_value('password');?>">
        </div>
        <?php echo form_error('password'); ?>

      </div>
      <!-- <div><a href="" class="forgot">Forgot password?</a></div> -->
      <br>
      <?php echo "<font color=red>$message</font><br>";?>
      <div class="form-group">
        <!-- <button class="btn btn-success btn-quirk btn-block"> -->
        <?php
        $myButton = array(
          'class' => 'btn btn-success btn-quirk btn-block',
          'name' => 'submit',
          'value' => 'Login'
        );
        ?>
        <?php echo form_submit($myButton);?>
        <!-- </button> -->
      </div>

      <hr class="invisible">
      <!-- <div class="form-group">
      <a href="signup.html" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Not a member? Sign up now!</a>
    </div> -->
  </div>
</div><!-- panel -->

</body>
</html>
