<?php
$abc=$_POST['searchFor'];  //creating a variable “abc” and saving the data text box into it.
 $logfile = fopen('data.txt', 'a+');//open file data.txt in append mode  
 fwrite($logfile, $abc);// writing the content of abc into data.txt
 fclose($logfile);//close the file data.txt
?>