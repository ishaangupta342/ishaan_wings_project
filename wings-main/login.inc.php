<?php

    include_once 'dbh.inc.php';

    $UN = $_POST['UN'];
    $PS = $_POST['PS'];
    
	$sql = "SELECT * FROM signup WHERE UN='$UN';";
	$result=mysqli_query($conn, $sql);
	if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['PS'] === $PS)
					{
						header("Location: main.html"); //REDIRECT TO THE PAGE REQUIRED. MAIN.PHP IS JUST FOR SAMPLE
						die;
					}
					else
					{
						header("Location: LoginIncPass.php");
						die;
					}
				}
			}
			header("Location: LoginNoRec.php");
	

    

?>