<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="/favicon.ico">

      <title><?php echo $title ?> | GBuses</title>

      <!-- Open sans google fonts -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,800' rel='stylesheet' type='text/css'>
      <!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->

      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

      <!-- METRO UI CSS 2.0 FONTS -->
      <link href="<?php echo base_url(); ?>assets/css/iconFont.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>assets/css/datetimepicker.min.css" rel="stylesheet">

      <!-- Morris charts -->
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-md-12 top-nav">
               <h4 class="copyright pull-left"><strong>GBuses</strong> <small>version: 1.1</small></h4>
               <ul>
                  <li> <a href="<?php echo base_url(); ?>login/logout"><span class="icon-switch"></span></a></li>
                  <li>
                     <div class="btn-group" style="margin-top:5px;padding-right:5px;padding-left:5px;">
                        <button type="button" class="btn btn-primary dropdown-toggle btn-xs" style="background:#2b2b2b;border:1px solid #FFF" data-toggle="dropdown">
                           <?php echo ucfirst($this->session->userdata('language')) ?> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                           <li><a href="<?php echo base_url(); ?>admin/language/change/english">English</a></li>
                           <li><a href="<?php echo base_url(); ?>admin/language/change/espaniol">Español</a></li>
                        </ul>
                     </div>
                  </li>


               </ul>

            </div>
         </div>
