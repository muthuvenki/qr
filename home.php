<head>
	<style>
p{
	margin-top: -10px;
}
</style>

</head>
<?php
$start=substr($_POST['start'], -4);//to get starting k! id
$end=substr($_POST['end'], -4);

$convert = sprintf("%04d", $start);//to satisfy the condition of 4 digit number (xxxx)
$date =substr(date("Y"), -2);//to get last two character of the sys date

echo '<table>';
echo '<tr>';


for ($i = 0; $i < $end; $i++)
{
	echo '</tr><tr>';
 	for($j=1;$j<=10;$j++)
	{
		$k="KQ"."$date"."$convert";
        echo '<td> <img  src="test.php?id='.$k.'" /><p align=center>'.$k.'</p></td>';
        //echo $k;
	}	
	
      echo "<br>";
      $start++;
      $convert = sprintf("%04d", $start);
	
 
 
}
?>