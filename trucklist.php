<?php
    $connection= mysqli_connect("localhost","root","","vehicle management");

    session_start();

    $sql= "SELECT * FROM `vehicle`";
    $res=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Trucks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    
</head> 

<style>
    body{
    background-image: url("trucklistbg.jpg");
    height: 100%;
    min-height: 600px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
</style>

<body> 
  
   <div id="myDiv">
  
   <?php include 'navbar.php'; ?>
   <br><br><br>
   <div class="container">
      <?php
        if(mysqli_num_rows($res)>0){ ?>
    <br><br>
      <div class="container">
         <div class="row">
             <div class="col-md-3"></div>
             <div class="col-md-6 foo" style="background-color: rgba(0, 0, 0, 0.804); color:azure;">
                 <div class="page-header">
                    <h1 class="animated bounceIn" style="text-align: center; font-family: 'Abril Fatface', cursive;">Truck List</h1>      
                  </div> 
                  <table class="table" style="font-family: 'Abril Fatface', cursive; color:azure;">
                    <thead>
                        <th>Truck Picture</th>
                        <th>Truck Registration No</th>
                    </thead>  

                    <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                    <tbody>
                        <tr>
                            <td><img height="100px" width="100px" src="vehicle picture/<?php echo $row["veh_photo"]; ?>" alt="dp"></td>

                            <td><a href="truckprofile.php?busid=<?php echo $row["veh_id"]; ?>"> <?php echo $row["veh_reg"] ?></a></td>
                        </tr>
                    </tbody> 
                <?php } }?>
                </table>
             </div>
             <div class="col-md-3"></div>
         </div>
          
      </div>  
       
   </div>
    </div> 
    
 <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
       

   
    
</body>
</html>
