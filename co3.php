<html>
    <head>
        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.min.js" type="text/javascript"></script>
        <script src="demo3.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3&&key=AIzaSyDjWaybaCZ_jcenMg0wSts00ceN-Sm-Neo&callback=myMap" type="text/javascript"></script>
        <style type="text/css">
            #map{
                width: 100%;
                height: 900px;
                border: 0px;
                padding: 0px;
            }
            .wrapper {
         margin-left: auto;
         margin-right: auto;
         width: 60%;
         padding-right: 10px;
         padding-left: 10px;
     }
     
     input {
         width : 150px;
         margin: 0;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box;
     }
     input[type=text] {
       width:100%;
         padding: 12px 12px;
             height: 10px;
     
         margin: 8px 0;
     }
     input[type=password] {
       width:100%;
         padding: 12px 12px;
             height: 10px;
     
         margin: 4px 2px;
     }
     input[type=button] {
         background-color: gray;
         border: none;
         color: black;
         
         text-decoration: none;
         font-weight: bold;
             height: 20px;
     
         margin: 4px 2px;
         cursor: pointer;
     }
     input[type=text]:focus {
         background-color: lightblue;
     }
     input[type=button]:hover {
         background-color: #686868;
     }
     
     #Main_heading{
          text-align: center;
     }
     
     #messages {
         margin-top: 12px;
         margin-bottom: 12px;
         padding: 12px;
         width:100%;
         display: inline-block;
         border:1px solid black;
         max-height: 250px;
         min-height: 250px;
         overflow: scroll;
     }
     #messages span {
         overflow-y: scroll;
         overflow: scroll;
     }
     
        </style>
    </head>
        <body>
        <?php include 'navbar.php';?><br><br>
            <section class="mappageList">
                <div>
                    <div class="google-mapsPage">
                        <div class="map-responsive">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </section>
            <script type="text/javascript">
            // Set initial latitude and longitude for map and starting point for marker.
            var lat_initial  = 28.631301;
            var long_initial = 77.370925;
            initMap();
            function initMap()
            {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(lat_initial,long_initial),
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions:
                    {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    scrollwheel: true,
                    navigationControl: true,
                    scaleControl: false,
                    disableDoubleClickZoom: true,
                    zoomControl: true,
                    zoomControlOptions: {
                        position: google.maps.ControlPosition.RIGHT_TOP,
                    },
                });
                        
            }
            var INTERVAL = 5000;
            var markers_array = [];
            var lat_array=[28.631301 ,28.631299, 28.631302, 28.631303, 28.631392, 28.631435, 28.631431,
 28.631429, 28.631424, 28.631421, 28.631415, 28.631415, 28.631411, 28.631407,
 28.631401, 28.631401, 28.631387, 28.631377, 28.631371, 28.631428, 28.631683,
 28.631777, 28.631928, 28.631978, 28.63178,  28.631981, 28.63187,  28.631996,
 28.632005, 28.632012, 28.632021, 28.632025, 28.632018, 28.632023, 28.632038,
 28.632046, 28.632053, 28.632055, 28.632057, 28.632053, 28.632057, 28.632069];
            var long_array=[77.370925, 77.370836, 77.370678, 77.37052,  77.37018,  77.370619, 77.370682,
 77.37082,  77.370941, 77.371126, 77.371303, 77.371499, 77.371717 ,77.372038,
 77.372807, 77.373277, 77.373824, 77.374038, 77.374287, 77.374264, 77.374096,
 77.373981, 77.373668, 77.373364, 77.373027, 77.372617, 77.372209, 77.371751,
 77.371252, 77.370647, 77.370287, 77.369923, 77.369545, 77.369234, 77.368859,
 77.368400, 77.367689, 77.366857, 77.366056, 77.365154, 77.364283, 77.363496];
          
            getMarkers();
            
            function getMarkers() {
                {
                for(j=1; j<markers_array.length; j++){
                    lat_initial  = lat_array[j];
                    long_initial = long_array[j];}
                    for(i=0; i<markers_array.length; i++){
                        markers_array[i].setMap(null);
                    }
                     
                    addMarkers(lat_initial, long_initial);
                    
                    window.setTimeout(getMarkers,INTERVAL);
                }
            
                
            
            }
            
            
            function addMarkers(lats, longs) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lats, longs),
                    map:map
                });
                markers_array.push(marker);
            }
        
            
        </script>
        <div class="wrapper">
            <input type="button" onclick="startConnect()"  value="Connect">
            <input type="button"  onclick="startDisconnect()" value="Disconnect"> <br>
         </form>
         <div id="messages"></div>
      </div>
            
        </body>
</html>