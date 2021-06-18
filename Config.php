<?php
 $host = "localhost";
 $user = "root";
 $password = "";
 $db = "Assignment";


 $connection = mysqli_connect($host,$user,$password,$db);

 if(! $connection ) {
    die('Could not connect: ' . mysql_error());
 }
  echo 'Connected successfully';

 ?>