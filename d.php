<?php 	
$filename = $_GET['file'].'.jpg';
header('content-disposition:attachment;filename='.urlencode($filename));
$fb = fopen($filename,'r');
while(!feof($fb)){
	echo fread($fb,8192);
	flush();
 }
 fclose($fb);
 header('content-disposition:attachment;filename'.urlencode($filename));
 $fb = fopen($filename, 'r');
 while(!feof($fb)){
    echo fread($fb, 8672);
    flush();
 }
 fclose($fb);
 ?>
