<?php
  include('db.php');
      
      $create = "CREATE TABLE details (
           id INT NOT NULL AUTO_INCREMENT,
           name VARCHAR(32) NOT NULL,
           email VARCHAR(32) NOT NULL,
           phonenumber VARCHAR(32) NOT NULL,
           address VARCHAR(100) NOT NULL,
           service VARCHAR(40) NOT NULL,
           password VARCHAR(32) NOT NULL,
          
      
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