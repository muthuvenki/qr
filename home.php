
<head>
	<style>
.qr{
	
	margin-right: 2px;

}
.qrcontent{
	margin-top: -25px;
	text-align: center;
	font-size: 10px;
}
</style>

</head>
<?php
include("phpqrcode/qrlib.php");
include("qrchecker.php");

ini_set('max_execution_time', 1000); 
$start=substr($_POST['star'], -4);//to get starting k! id
$end=substr($_POST['end'], -4);

$convert = sprintf("%04d", $start);//to satisfy the condition of 4 digit number (xxxx)
$date =substr(date("Y"), -2);//to get last two character of the sys date

echo '<table>';
echo '<tr>';

$pre="KQ"."$date"."$convert";
$current="KQ"."$date"."$convert";

for ($i = $start; $i <= $end; $i++)
{
	if($pre == $current){
        $pre=$convert;
        //echo $convert;
        //echo $pre+0001;
	echo '</tr><tr>';
 	for($j=1;$j<=10;$j++)
	{
		$k="KQ"."$date"."$convert";
		QRcode::png($k,$k.'.png', QR_ECLEVEL_L);//to call a  qrcode lib to print qr code
        $result=qrchecker($k.'.png');//to call an api to read a qr code
        if($k == $result){
        $current=substr($result, -4);
        //echo $current;
        echo '<td><p align=center><img  src="'.$k.'.png" height="75px"/></p><p class="qrcontent">'.$k.'</p></td>';
        //echo $k;
        }
	}	
	
     
      $start++;
      $convert = sprintf("%04d", $start);
	
 }
 
}

?>