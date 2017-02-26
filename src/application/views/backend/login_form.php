<!DOCTYPE html>
<html>
   <head>
      <title><?php echo $title; ?> | GBuses</title>
      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

      <!-- Login form CSS -->
      <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style>
         /*html,body,.container,.row, .row > div {height: 100%;}*/
         .panel { margin-top: 50%;}
      </style>
   </head>
   <body>
      <div id="fullscreen_bg" class="fullscreen_bg"/>

      <div class="container">

         <div class="row">
            <div class="col-sm-4 col-sm-offset-6">
               <div class="panel panel-default">
                  <div class="panel-heading"><h4>GBuses <small>v1.1</small></h4></div>
                  <div class="panel-body">

                     <?php echo form_open('login/validate_credentials'); ?>
                     <p>
                        <input type="text" class="form-control" name="username" placeholder="Usuario" required="" autofocus="">
                     </p>
                     <p>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" required="">
                     </p>
                     <p class="checkbox">
                        <label><input type="checkbox" name="remember" /> Recordarme</label>
                     </p>
                     <p style="color: #FFF;"><?php echo $error ?></p>
                     <button class="btn btn-lg btn-secondary btn-block" type="submit">
                        Ingresar
                     </button>
                     <?php echo form_close(); ?>


                  </div>
                  <div class="panel-footer">
                     <p class="small pull-left"><a href="/">Página de Inicio</a></p>
                     <p class="text-muted small text-right">&copy; <?php echo date('Y') ?> FretelWEB.com</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
