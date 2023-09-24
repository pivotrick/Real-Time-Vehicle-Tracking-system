<?php
    session_start();
     $connection= mysqli_connect('localhost','root','','vehicle management');

    $select_query="SELECT * FROM `tripcost`";
    $result= mysqli_query($connection,$select_query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>trip Details</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vina+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">

</head>
<style>
      body{
    background-image: url("admindriver2.jpg");
    height: 100%;
    min-height: 600px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<body>
    <?php include 'navbar_admin.php'; ?>
    <br><br>
    <div class="container">
        <div class="row">
             
            <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.804); color:azure; margin-top: 30vh;">
                <div class="page-header">
                    <h1 style="text-align: center; font-family: 'Vina Sans', cursive;">Trip Details</h1>
                 
                </div>
                
                <table id="myTable" class="table table-bordered animated rubberBand">
                    <thead>
                        <th>Booking Id</th>
                        <th>Total Km</th>
                        <th>Oil Cost</th>
                        <th>Extra Cost</th>
                        <th>Total Cost Cost</th>
                    </thead>
                    <tbody>
                        <?php while($row=mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?php echo $row['booking_id']; ?></td>
                            <td><?php echo $row['total_km']; ?></td>
                            <td><?php echo $row['oil_cost']; ?></td>
                            <td><?php echo $row['extra_cost']; ?></td>
                            <td><?php echo $row['total_cost']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
                
            </div>
     
        </div>
    </div>
</body>
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>