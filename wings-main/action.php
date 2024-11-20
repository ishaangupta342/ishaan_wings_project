<!DOCTYPE html>
<html>
<head>
    <title>Flights</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="cardstyle.css">
</head>
<nav class="navbar container">
    <div class="navbar__logo">
      <h1>Wings</h1>
    </div>
    <!-- <img src="logowings.png" alt="Error"> -->
    
    <div class="navbar__nav">         
      <ul class="navbar__menu">
        <li class="navbar__item"><a href="Main.html" class="navbar__link">Search Flights</a></li>
        <li class="navbar__item"><a href="about.html" class="navbar__link">About</a></li>
      </ul>
    </div>
    
  </nav>
<body>
<div class="Menu">
  <br>
<?php
include "comd.php"; // Using database connection file here
$q2="Select * from Flights where Origin='$from' AND Destination='$to' AND Dep_Date='$Ddate';";
$rs=mysqli_query($conn,$q2);
$num = mysqli_num_rows($rs);
if($num <= 0)
{     
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 style="text-align: center; font-size: 50px; color: #151B54;">No Flights Available</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
}
?>
<?php
while($data = mysqli_fetch_array($rs))
{
?>
<form action="index_.php" method="POST">
 <div class='flight-card'>
  <div class='flight-card--header'>
    <div class='flight-card--header-logo'>
      <img src='https://book.jetblue.com/assets/header/img/jetblue-white-reg.png'>
    </div>
    <div class='flight-card--header-details'>
      <div class='details-passenger'>
        <span class='detail--text'>
          <?php 
          $Adate=$data["Arr_Date"];
          $Airline=$data["Company"];
          $CP='P'.$class;
          $Price=$data[$CP];
          $DTime=$data["Dep_Time"];
          $ATime=$data["Arrv_Time"];
          $Flight_No=$data["Flight_No"];
          $ECap=$data[$class];
          ?>
          <input type="submit" style="background-color:#151B54;color:white;width:150px;
height:40px;border-radius: 12px;font-size: 25px;border: none;" value="Book Now"/>
          <input type="hidden" name="Ddate" value="<?=$Ddate?>">
          <input type="hidden" name="from" value="<?=$from?>">
          <input type="hidden" name="Adate" value="<?=$Adate?>">
          <input type="hidden" name="to" value="<?=$to?>">
          <input type="hidden" name="Company" value="<?=$Airline?>">
          <input type="hidden" name="Price" value="<?=$Price?>">
          <input type="hidden" name="Dep_Time" value="<?=$DTime?>">
          <input type="hidden" name="Arrv_Time" value="<?=$ATime?>">
          <input type="hidden" name="Flight_No" value="<?=$Flight_No?>">
          <input type="hidden" name="Passenger" value="<?=$passenger?>">
          <input type="hidden" name="Class" value="<?=$class?>">
          <input type="hidden" name="Capacity" value="<?=$ECap?>">
        </span>
      </div>
      <div class='details-depart'>
        <span class='detail--title'>
          Departs
        </span>
        <span class='detail--text'>
        <?php echo $Ddate;?>
        </span>
      </div>
      <div class='details-arrive'>
        <span class='detail--title'>
          Arrives
        </span>
        <span class='detail--text'>
        <?php echo $data["Arr_Date"];?>
        </span>
      </div>
    </div>
  </div>
  <div class='flight-card--details'>
    <div class='bc-from'>
      <span class='detail-code'>
      <?php echo strtoupper(substr($from,0,3));?>
      </span>
      <span class='detail-city'>
      <p><?php echo $from;?></p>
      <p><?php echo $DTime;?></p>
      </span>
    </div>
    <div class='bc-plane'>
      <img src='https://cdn.onlinewebfonts.com/svg/img_537856.svg'>
    </div>
    <div class='bc-to'>
      <span class='detail-code'>
      <?php echo strtoupper(substr($to,0,3));?>
      </span>
      <span class='detail-city'>
      <p><?php echo $to;?></p>
      <p><?php echo $ATime;?></p>
      </span>
    </div>
    <div class='flight-card-details--text'>
      <div class='text-left'>
        <span class='text-hline'>
          Operator
        </span>
        <span class='text-actual'>
        <?php echo $data["Company"];?>
        </span>
      </div>
      <div class='text-middle'>
        <span class='text-hline'>
          Flight
        </span>
        <span class='text-actual'>
        <?php echo $data["Flight_No"];?>
        </span>
      </div>
      <div class='text-right'>
        <span class='text-hline'>
          Class
        </span>
        <span class='text-actual mint'>
        <?php echo $class;?>
        </span>
      </div>
    </div>
    <div class='flight-card-details--admin'>
      <div class='admin-left'>
      <?php 
      $x="Seats available - $data[$class]";
      echo $x;
      ?> 
      </div>
      <div class='admin-right'>
      <?php
      $CP='P'.$class;
      $PClass=$data[$CP];
      $x="Price - Rs.$PClass";
      echo $x;
      ?> 
      </div>
    </div>
  </div>
</div>
<br>
</form>
<?php
}
?>
</div>
</body>
<!-- <footer class="footer">
        <ul class="social-icon">
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a></li>
        </ul>
        <ul class="menu">
          <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
          <li class="menu__item"><a class="menu__link" href="#">About</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
    
        </ul>
        <p>&copy;2021 Wings | All Rights Reserved</p>
      </footer> -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
     
</html>
