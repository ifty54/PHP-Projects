<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>
<?php
    include "./navbar/header.php";
?>
<div class="about-section">
  <h1>About Premier League</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Clubs</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="./images/ars.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Arsenal</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./images/avl.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Aston Villa</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/cry.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Crystal Palace</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/bha.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Brighton & Hove Albion</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/new.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Newcastle United</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/wol.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Wolves</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/whu.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Westham United</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/mci.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Manchester City</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/liv.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Liverpool</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/eve.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Everton</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/tot.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Tottenham Hotspur</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/bou.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Bournemouth</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/mun.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Manchester United</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/che.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Chelsea</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/ful.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Fulham</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/not.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Nottingham Forest</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/bre.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Brentford</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/bur.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Burnley</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/she.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Sheffield United</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="./images/lut.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Luton Town</h2>
        <p><button class="button">Website</button></p>
      </div>
    </div>
  </div>
  
</div>
<?php
    include "./footer.php";
?>
</body>
</html>
