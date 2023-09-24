<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','vehicle management');
   $sql="SELECT * FROM bill WHERE id='$id'";
   $result=mysqli_query($conn,$sql);

   $bill=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Billing</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vina+Sans&display=swap" rel="stylesheet">

  </head>
  <style>
    body{
    background-image: url("imagebill2.jpg");
    height: 100%;
    min-height: 600px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
  <body>
    
    <br><br><br>
	 <?php include 'navbar_admin.php';?>
     
    <div class="container">
      <div class="row" >

        </div> 
        <div class="col-md-6" style="background-color: rgba(0, 0, 0, 0.804); color:azure; margin-top: 30vh; margin-left: 20vw; ">
        <h2 style="font-family: 'Vina Sans', cursive;">Billing Information</h2>
        <hr>
          
        <table class="table" >
           
          <tr>
            <th >Service Charge:</th>
            <td><?php echo $bill['salary']; ?></td>
          </tr>
          <tr>
            <th >Equipment:</th>
            <td><?php echo $bill['equipment']; ?></td>
          </tr>
          <tr>
            <th >Oil:</th>
            <td><?php echo $bill['oil']; ?></td>
          </tr>
          <tr>
            <th >Total Cost:</th>
            <td><?php echo $bill['tcost']; ?></td>
          </tr>
        </table>  

        </div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 