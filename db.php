<?php
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname = 'email';

   $con = mysqli_connect($host, $user,$pass,$dbname);

   if(!$con) {

       die('could not get connection: ' . mysqli_connect());
       }else{
        echo "";
       }

?>