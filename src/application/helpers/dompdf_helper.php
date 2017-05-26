<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once( "./application/third_party/dompdf/autoload.inc.php");

use Dompdf\Dompdf;

if (!function_exists('pdf_create')) {

   function pdf_create($html, $filename = '', $stream = TRUE) {
      $dompdf = new Dompdf();
      $dompdf->load_html($html);
      $dompdf->render();
      if ($stream) {
         //array('Attachment'=>0) to view the pdf in browser
         $dompdf->stream($filename . ".pdf", array('Attachment' => 0));
      } else {
         return $dompdf->output();
      }
   }

}