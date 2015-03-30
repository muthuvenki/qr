<?php
include("phpqrcode/qrlib.php");

  //QRcode::png('PHP QR Code :)'.$_GET['id'],"",'2');
 QRcode::png('PHP QR Code :)'.$_REQUEST['id'],$_REQUEST['id'].'.png', QR_ECLEVEL_L); 
  ?>