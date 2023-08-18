<?php
$hostname   = "localhost"; 
 $username = "stude291_careshare_user"; 
$password =  "@carsharing123";
$dbname = "stude291_careshare_databse"; 


        
      $link=mysqli_connect($hostname, $username, $password, $dbname)
        or die("Unable to connect to MySQL");
        date_default_timezone_set('Asia/Kolkata');


    ?>