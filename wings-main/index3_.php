<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_.css">
	<title>Data Entry Page</title>
</head>
<body>

	<h3>WINGS<br> Passenger Details</h3>
	<br> 	

	
<?php

	
	$iterations=$_POST['Passenger'];

	
	$from=$_POST['from'];
	$to=$_POST['to'];
	$Ddate=$_POST['Ddate'];
	$class=$_POST['Class'];
	
	
	$airpno=$_POST['Flight_No'];  /*if airpno= AI 233 ,, making it AI_233*/
	$delimiter = ' ';
	$words = explode($delimiter, $airpno);
	$airpno_1=$words[0];
	$airpno_2=$words[1];
	$airpno=$airpno_1."_".$airpno_2;
	
	
	echo '
	<form action = "index1_.php"  method="post">
		<br>
		<input placeholder="Email for correspondence..." type="text" name="email" id="email" required>
		<input placeholder="telephone..." type="text" name="telephone" id="telephone" required>
		<input type="hidden" value='.$iterations.' name="people" id="people">
		<input type="hidden" value='.$from.' name="from" id="from">
		<input type="hidden" value='.$to.' name="to" id="to">
		<input type="hidden" value='.$Ddate.' name="Ddate" id="Ddate"><br>
		<input type="hidden" value='.$class.' name="class" id="class"><br>		
		<input type="hidden" value='.$airpno.' name="airpno" id="airpno"><br>
		
	';

	for($i = 1; $i<=$iterations; $i++)
{		

	echo '
	<div class="tab">Passenger '.$i.' :<br>
		<input placeholder="First name..." name="person['.$i.'][first_name]" >
		<input placeholder="Last name..." name="person['.$i.'][last_name]">
	</div><br>';	

			
}
	echo '
		<input type="submit" value="submit" name="submit1">
	</form>
	';


?>	
</body>
</html>