<?php 
    $connection=mysqli_connect("localhost","root","","vehicle management");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>vehicle management system</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Permanent+Marker&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    

 
</head> 
<style>

body {
  background-color: rgb(180, 234, 234);
}
    
.parallax {
    /* The image used */
    background-image: url("bus-people-public-transportation-34171.png");
    height: 100%;
    

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("pexels-photo-280310 .jpeg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }


  .arrar{
    display: flex;
    align-items: center;
  }
  #bus_route{
    display: inline-flex;
    align-items:flex-end;

  }
  .texts{
    font-size: 8vh;
    font-family: 'Bruno Ace SC', cursive;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white; 
    -webkit-text-stroke: 2px black;
  }
  .textinns{
    font-size: 3vh;
    font-family: 'Permanent Marker', cursive;
    text-align: center;
    position: absolute;
    top: 64%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white; 
    -webkit-text-stroke: 1px black;
  }

  .cont1{
    display: flex;
    justify-content: center;
  }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   
   
 
       
           
       
        
    <div class="parallax foo">
       <?php include 'navbar.php';?>
           <div class="texts">
            Fleet Management System</div><br>
            <div class="textinns"><p>A management system where you can easily manage fleet</p></div>
          </div>
    </div>                 
    
    <div class="cont1">
      <div class="map1">
      <div class="page-header">
            <h1 style="text-align: center; font-family: 'Abril Fatface', cursive;">Our Major Routes</h1>      
        </div>
       <br><br>
       <iframe width="400" height="300" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ5zwbSVHlDDkRsJ1N_fzZNXM&destination=place_id:ChIJLbZ-NFv9DDkRQJY4FbcFcgM&key=AIzaSyCL49eDqaxFysamuDikEhoby8BnNOUPTOc"></iframe>
        <iframe width="400" height="300" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ5zwbSVHlDDkRsJ1N_fzZNXM&destination=place_id:ChIJ3w_FQbvxDDkRuph3atJv8OY&key=AIzaSyCL49eDqaxFysamuDikEhoby8BnNOUPTOc"></iframe>
        <iframe width="400" height="300" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ5zwbSVHlDDkRsJ1N_fzZNXM&destination=place_id:ChIJWYjjgtUZDTkRHkvG5ehfzwI&key=AIzaSyCL49eDqaxFysamuDikEhoby8BnNOUPTOc"></iframe></div>
                          
        </div>
        
        <br>
        <div class="page-header">
            <h1 style="text-align: center; font-family: 'Abril Fatface', cursive;">Our Drivers</h1>      
        </div>
        <div class="parallax1"></div>
        <div id="driver" class="container">
          
          <div class="row">
              <div class="col-md-12">
                  <p style="font-size: 20px; font-family: 'Comfortaa', cursive;">The driver are very punctual and they provides great service. Every one of them is professional and great at their jobs and have cleared certain tests. All have significant prior experience and are professional at work.</p>
                  
              </div>
          </div>
               
        </div>
        
        
        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center; font-family: 'Abril Fatface', cursive;">Our Trucks </h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                
                <img src="pexels-photo-385998.jpeg" class="img-responsive" >  
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:30px; font-family: 'Passion One', cursive;"><b>As of now we have 3 trucks and each one of it is well maintained. These trucks goes in different directions of the city.</b></p>
              </div>
              
          </div>       
        </div>
        
        
          
          <p></p>      
                
        </div>  
        
        <footer style="background-image: url('foo.jpeg'); 
          color: #fff; padding-top: 70px;
          padding-bottom: 70px;" class="container-fluid text-center font-family: 'Cinzel Decorative', cursive;"  >
                <p>All rights reserved</p><br>
                <p>Copyright &#169; S.P.Y Verse LTD.
        </footer>
        
        
        
        
    
    
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>
    
</body>
</html>