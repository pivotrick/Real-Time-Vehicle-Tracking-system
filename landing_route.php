<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Truck Routet</title>
</head>
<style>
    body{
    background-image: url("myturcks_disp.jpg");
    height: 100%;
    min-height: 700px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: inline-flex;
    justify-content: center;
    }
    .parent {
        margin: 1rem;
        padding: 1rem 1rem;
        text-align: center;
        width: 99vw;
     }
     .division {
        margin-top: 40vh;
        display: inline-block;
        border: 1px solid aquamarine;
        padding: 0.5vw;
        width: 30vw;
        font-family: 'Righteous', cursive;
        font-size: 5vh;
        background-color: rgba(0, 0, 0, 0.63);
        color: antiquewhite;
        text-decoration: none;
     }
</style>
<?php include 'navbar.php';?>
<div class='parent'>
    <div class='division'>
        <li>Scania
            <a href="route1.php" style="color: white;
        text-decoration: dotted;
        font-size: 3vh;"><ul>Truck Route</ul></a>
            <a href="co1.php" style="color: white;
        text-decoration: dotted;
        font-size: 3vh;"><ul>Live Tracking</ul></a>
        <a href="communicate1.php" style="color: white;
        text-decoration: dotted;
        font-size: 3vh;"><ul>Send Instructions</ul></a>
        </li>
    </div>
    <div class='division'> 
        <li>Mack
            <a href="route2.php" style="color: white;
        text-decoration: dotted;
        font-size: 3vh;"><ul>Truck Route</ul></a>
            <a href="co2.php" style="color: white;
        text-decoration: dotted;
        font-size: 3vh;"><ul>Live Tracking</ul></a>
        <a href="communicate2.php" style="color: white;
        text-decoration: dotted;
        font-size: 3vh;"><ul>Send Instructions</ul></a>
    </li></div>
    <div class='division'>
        <li>DAF
            <a href="route3.php" style="color: white;
        text-decoration: dotted;
        font-size: 3vh;"><ul>Truck Route</ul></a>
            <a href="co3.php" style="color: white;
        text-decoration: dotted;
        font-size: 3vh;"><ul>Live Tracking</ul></a>
        <a href="communicate3.php" style="color: white;
        text-decoration: dotted;
        font-size: 3vh;"><ul>Send Instructions</ul></a>
        </li>
    </div>
 </div>
</body>
</html>
