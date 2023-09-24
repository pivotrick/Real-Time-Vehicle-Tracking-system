<?php
    $connection= mysqli_connect("localhost","root","","vehicle management");
    
    session_start();

    $veh_id= $_GET['busid']; 

    $sql= "SELECT * FROM `vehicle` WHERE veh_id='$veh_id' or veh_reg='$veh_id'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Truck Details</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<style>
    body{
    background-image: url("trucklistbg2.jpg");
    height: 100%;
    min-height: 600px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
</style>
<body>  
  
   <?php  include 'navbar.php';?>
   <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	
   
</div>
<br><br>
       
        <div class="container">
          <div class="row" style="background-color: rgba(0, 0, 0, 0.804); color:azure;"> 
          <div class="fb-profile-text" id="h1" >
                            <h2><?php echo $row['veh_reg']; ?></h2>
            </div>
            <hr>
           <div class="col-sm-3">
                   <div class="fb-profile">
                        <img height="250" width="250" align="left" class="fb-image-profile thumbnail userpic" src="vehicle picture/<?php echo $row['veh_photo'] ?>" alt="dp"/>
                        
                    </div>
           </div> 
           
           <div class="col-sm-9">
               <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                      About Vehicle </a>
                    </li>
                    
                    <!--
                    <li>
                      <a href="#tab_default_2" data-toggle="tab">
                     Bill </a>
                    </li>
                    -->
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">

                     <h4><strong>Brand</strong></h4>
                      <p><?php echo $row['brand']; ?></p>
                      
                      <h4><strong>Color</strong></h4>
                      <p><?php echo $row['veh_color']; ?></p>
                      
                      <h4><strong>Registration No</strong></h4>
                      <p>
                        <?php echo $row['veh_reg']; ?> 
                      </p>
                      <!--
                      
                      -->
                      <h4><strong>Type</strong></h4>
                      <p><?php echo $row['veh_type']; ?></p>
                      
                      <h4><strong>Chesis No</strong></h4>
                      <p><?php echo $row['chesisno']; ?></p>
                      
                      
                      
                      
                      
                      <h4><strong>Vehicle Registration Date</strong></h4>
                      <p><?php echo $row['veh_regdate']; ?></p>

                    </div>
                    
                            
                  </div>
                  
                   
                  
                
                  
                </div>
              </div>
           </div>
          </div>
        </div>
        
          <!-- /container fluid-->  
        <div class="container">
          <div class="col-sm-12"> 
              
          </div>
    </div>
    
</body>
</html>




