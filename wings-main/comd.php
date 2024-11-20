<?php
   $from=ucfirst($_POST['flight-depart-text']);
   $to=ucfirst($_POST['flight-arrival-text']);
   $class=$_POST['class-type'];
   $passenger=$_POST['adults'];
   $Ddate=$_POST['Ddate'];
   $username="root";
   $password="";
   $conn = new mysqli("localhost",$username,$password,"Database_1");
   if($conn->connect_error){
       die("Connection failed: ".$conn->connect_error);
   }
  
?>