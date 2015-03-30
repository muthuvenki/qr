<?php
function qrchecker($string){
 $ch = curl_init("http://api.qrserver.com/v1/read-qr-code/");
 $post = array("MAX_FILE_SIZE" => "1048576",
    "file"=>"@D:\wamp\www\qr-master/\\".$string,
);
 //curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $post); 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $output = curl_exec($ch);       
 curl_close($ch);
  $var=json_decode($output);
  return($var[0]->symbol[0]->data);
}
?> 