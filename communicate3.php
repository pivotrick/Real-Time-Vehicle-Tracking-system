<!DOCTYPE html>
<html>
<head>
  <title>HiveMQ Publish</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Vina+Sans&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
</head>
<style>
  body{
      background-image: url("comtruck.jpg");
      height: 100%;
      min-height: 600px; 
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      }
  .main1{
    padding: 20px;
    margin-top: 32vh;
    margin-left: 35vw;
    justify-content: center;
    background-color: rgba(0, 0, 0, 0.804); 
    color:azure;
    max-width: fit-content;
    align-items: center;
    border-radius: 10px;
  }

  button{
    font-size: 3vh;
    border-radius: 2px;
    color: beige;
    background-color: brown;
    margin-left: 8vw;
  }

  input{
    border-radius: 10px;
    color: rgba(240, 248, 255, 0.497);
  }
</style>
<body>
<?php include 'navbar.php';?>
  <div class="main1">
  <h1 style="font-family: 'Instrument Serif', serif; font-size: 7vh; margin-bottom: 5px; margin-left:3vw; margin-right:3vw">Send Message:</h1>

  <br>

  <label for="message" style="font-size: 3vh; font-family: 'Cormorant Garamond', serif;">Message:</label><br>
  <input type="text" id="message" style="width: 21vw;"><br>

  <br><br>

  <button style="font-family: 'Cormorant Garamond', serif;" onclick="publishMessage()">Publish</button>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.js"></script>
  <script>
    const client = new Paho.MQTT.Client('broker.hivemq.com', 8000, 'clientId' + Math.random().toString(16).substr(2, 8));

    function publishMessage() {
      const topic = "DAFSPYVERSE"
      const message = document.getElementById('message').value;

      const messageObj = new Paho.MQTT.Message(message);
      messageObj.destinationName = topic;

      client.send(messageObj);
    }

    client.connect({
      onSuccess: function () {
        console.log('Connected to HiveMQ broker');
      },
      onFailure: function (errorMessage) {
        console.log('Failed to connect to HiveMQ broker: ' + errorMessage);
      }
    });
  </script>
</body>
</html>
