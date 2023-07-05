<?php
  include('db.php');
      
      $create = "CREATE TABLE email (
           id INT NOT NULL AUTO_INCREMENT,
           email VARCHAR(60) NOT NULL,
          

            PRIMARY KEY (id)

        )";
         $result =$con->query($create);
         	# code...
         if ($result) {
         	# code...
         	echo "Table successfully created";
         }
         else{
         	die ( "Database access access ERROR:" . $con->error);
         }
?>