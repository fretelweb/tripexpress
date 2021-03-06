<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="./favicon.ico">

      <title>Inicio - My Tour Perú</title>

      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>assets/css/datetimepicker.min.css" rel="stylesheet">

      <!-- METRO UI CSS 2.0 FONTS -->
      <link href="<?php echo base_url(); ?>assets/css/iconFont.min.css" rel="stylesheet">

      <!-- Login form CSS -->
      <link href="<?php echo base_url(); ?>assets/css/frontend.css" rel="stylesheet">
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>

   <body>

      <div id="inicio" class="container">
         <div class="header clearfix">
            <nav>
               <ul class="nav nav-pills pull-right">
                  <li role="presentation" class="active"><a href="#inicio">Inicio</a></li>
                  <li role="presentation"><a href="#destinos">Destinos</a></li>
                  <li role="presentation"><a href="#acerca">Acerca</a></li>
                  <li role="presentation"><a href="#contacto">Contacto</a></li>
                  <li><a href="/admin">Ingresar</a></li>
               </ul>
            </nav>
            <h1 class="">My Tour Perú <small>Viajes &amp; Turismo</small></h3>
         </div>
      </div> <!-- /container -->

      <div class="jumbotron">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-7">
                  <h3></h3>
               </div>
               <div class="col-sm-6 col-md-5 search_box">
                  <h4 ><?php echo lang('Search'); ?></h4>
                  <hr/>

                  <?php echo form_open('/booking/step_one') ?>
                  <div class="col-sm-4 col-md-6">
                     <div class="form-group">
                        <label for="city"><?php echo lang('Departure city'); ?></label>
                        <select class="form-control" name="from" id="from" >
                           <option value="0"></option>
                           <?php foreach ($cities as $city): ?>
                              <option value="<?php echo $city->destination_id ?>" <?php echo set_select('from', $city->destination_id); ?> ><?php echo $city->city ?></option>
                           <?php endforeach; ?>
                        </select>
                     </div>
                  </div>

                  <div class="col-sm-4 col-md-6">
                     <div class="form-group">
                        <label for="city"><?php echo lang('Arrival city'); ?></label>
                        <select class="form-control" name="to" id="to" value="<?php echo set_value('city'); ?>">
                           <option value="0"></option>
                           <?php foreach ($cities as $city): ?>
                              <option value="<?php echo $city->destination_id ?>" <?php echo set_select('to', $city->destination_id); ?>><?php echo $city->city ?></option>
                           <?php endforeach; ?>
                        </select>
                     </div>
                  </div>

                  <div class="col-sm-4 col-md-6">
                     <label><?php echo lang('Departure date'); ?></label>
                     <div class="form-group date" id="datepicker1">
                        <input type="text" class="form-control" name="from_date" id="from_date" data-date-format="YYYY-MM-DD" value="">
                        <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <script type="text/javascript">
                           $(function() {
                              $('#datepicker1').datetimepicker({
                                 pickTime: false, useCurrent: true
                              });
                           });
                        </script>
                     </div>
                  </div>

                  <div class="col-sm-4 col-md-6">
                     <label><?php echo lang('Return date'); ?> <span class="text-muted">(<?php echo lang('Optional'); ?>)</span></label>
                     <div class="form-group date" id="datepicker2">
                        <input type="text" class="form-control" name="from_back_date" id="from_back_date" data-date-format="YYYY-MM-DD" value="">
                        <span class="input-group-addon">
                           <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <script type="text/javascript">
                           $(function() {
                              $('#datepicker2').datetimepicker({
                                 pickTime: false, useCurrent: false
                              });
                           });
                        </script>
                     </div>
                  </div>

                  <div class="col-sm-3 col-md-3">
                     <label for="booked_seats"><?php echo lang('Tickets'); ?></label>
                     <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                     </select>

                  </div>

                  <div class="col-sm-3 col-md-3">
                     <div class="form-group">
                        <label for="returning"><?php echo lang('Returning'); ?></label><br/>
                        <input type="checkbox" name="returning" id="returning">

                     </div>
                  </div>

                  <div class="col-sm-12 col-md-12"><hr/>
                     <button type="submit" id="check" class="btn btn-success" value="submit"><span class="icon-search"></span> <?php echo lang('Check available tours'); ?></button>
                  </div>
                  <?php echo form_close() ?>
               </div>
            </div>
         </div>
      </div>

      <div id='destinos' class="container">
         <div class="row">
            <div class="col-sm-12">

               <h2 class="page-header">Paradas Turisticas</h2>
            </div>
            <div class="col-sm-6 col-md-3">
               <div class="thumbnail">
                  <img src="images/rutas/patapampa.jpg" alt="...">
                  <div class="caption">
                     <h3>Patapampa</h3>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3">
               <div class="thumbnail">
                  <img src="images/rutas/reserva.jpg" alt="...">
                  <div class="caption">
                     <h3>Reserva Nacional</h3>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3">
               <div class="thumbnail">
                  <img src="images/rutas/caniahuas.jpg" alt="...">
                  <div class="caption">
                     <h3>Pampa Cañahuas</h3>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3">
               <div class="thumbnail">
                  <img src="images/rutas/lagunillas.jpg" alt="...">
                  <div class="caption">
                     <h3>Lagunillas</h3>
                     <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  </div>
               </div>
            </div>
         </div>

         <div id="acerca"></div>

         <div id="contacto"></div>

         <footer class="footer">
            <p>&copy; <?php echo date("Y") . " My Tour Perú"; ?></p>
         </footer>

      </div> <!-- /container -->


      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/docs.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/moment.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/datetimepicker.js"></script>

   </body>
</html>
