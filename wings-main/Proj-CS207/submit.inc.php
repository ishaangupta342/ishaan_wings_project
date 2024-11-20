<?php

    include_once 'dbh.inc.php';

    $UN = $_POST['UN'];
    $PS = $_POST['PS'];
    $sql1 = "SELECT * FROM signup WHERE UN='$UN';";
	$result1=mysqli_query($conn, $sql1);
	if($result1)
			{
				if($result1 && mysqli_num_rows($result1) > 0)
				{

					header("Location: SignupExist.php"); 
					die;
				}
				else
				{
					$sql = "INSERT INTO signup (UN, PS) VALUES ('$UN','$PS');";
					mysqli_query($conn, $sql);
					header("Location: Login.php");
					die;
				}
			}
    
	

	
?>