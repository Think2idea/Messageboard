<?php
$fh=fopen('./msg.txt', 'r');
 
 while( ($row=fgetcsv($fh))  !=false)
	 {
	 echo $row[0];
	 }
?>