<?php
$from=$_POST['from'];
$to=$_POST['to'];
$class=$_POST['Class'];
$passenger=$_POST['Passenger'];
$Ddate=$_POST['Ddate'];
$PClass=$_POST['Price'];
$Adate=$_POST['Arrv_Date'];
$Flight_No=$_POST['Flight_No'];
echo $Price;
echo $passenger;
echo $to;
echo $from;
echo $Flight_No;
$seatprocedure="DELIMITER $$
CREATE PROCEDURE decrease(
    in Flight_No varchar,
    in before_seats int,
    in class varchar,
    in seatsbooked int,
    in Origin varchar,
    in Destination varchar,
    out after_seats int,
)
BEGIN
    set after_seats = before_seats-seatsbooked;

END$$

DELIMITER ;

call decrease($Flight_No, $ECap, $class, $, $var5,$var3);
";
?>