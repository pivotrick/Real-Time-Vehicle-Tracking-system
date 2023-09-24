<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <title>About Us</title>
</head>
<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<body>
    <div class="about-section">
        <h1>Our Team</h1>
        <h1 style="font-family: 'Cinzel Decorative', cursive;">Our SPY Verse</h1>
      
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="spa.jpeg" alt="S" style="width:100%">
            <div class="container">
              <h2>Sparsh</h2>
              <p class="title">S</p>
              <p>20104050@mail.jiit.ac.in</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="pra.jpg" alt="P" style="width:100%">
            <div class="container">
              <h2>Prarit</h2>
              <p class="title">P</p>
              <p>20104034@mail.jiit.ac.in</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="yuv.jpg" alt="Y" style="width:100%">
            <div class="container">
              <h2>Yuvraj</h2>
              <p class="title">Y</p>
              <p>20104032@mail.jiit.ac.in</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>