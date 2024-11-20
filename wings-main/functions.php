<?php

function check_login($conn)
{

	if(isset($_SESSION['UN']))
	{

		$id = $_SESSION['UN'];
		$query = "select * from users where UN = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: Login.php");
	die;

}

