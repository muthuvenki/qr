<?php
include("phpqrcode/qrlib.php");

  QRcode::png('PHP QR Code :)'.$_GET['id']);
  ?>