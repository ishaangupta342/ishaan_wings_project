<html>
<head>
	<link rel="stylesheet" type="text/css" href="style_.css">
	<title>Data Entry Page</title>
</head>
<body>

	<h3 align="center">WINGS<br> Passenger Details</h3>
	<br> 	


	<form action = "index_.php"  method="post">
		
		<label >From (City) </label>
		<input type="text" name="from" id="from" required><br>
		<label >To (City) </label>
		<input type="text" name="to" id="to" required><br>
		<label >Date of travel </label>
		<input type="text" name="date" id="date" required><br>
		<label >Airplane Number </label>
		<input type="text" name="airpno" id="airpno" required><br>
		
		<label >Number of Passengers</label>
		<input type="number" name="people" id="people" required><br>
		
		<input type="submit" value="Enter Passenger Details" name="submit0">
	</form>
	
</body>
</html>