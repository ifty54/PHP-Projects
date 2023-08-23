<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Home</title>
<link rel="stylesheet" type="text/css" href="/navbar/style.css">
</head>
<body>
<?php
    include "./navbar/header.php";
?>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
       <div class="container">
          <div class="pics">
            <div class="pic">
              <img src="./images/westham.jpg" alt="News Image" class="news-image">
              <h1 class="your_text">West Ham sign former Arsenal defender<br> Konstantinos Mavropanos </h1>
              <p class="there_text">Greek international joins Hammers on five-year deal from Stuttgart</p>
              <div class="start_bt">
                <div class="read_bt"><a href="https://www.premierleague.com/news/3646826">Read More</a></div>
              </div>
            </div>
            <div class="pic">
              <img src="./images/mac.jpg" alt="News Image" class="news-image" width=640px height=360px>
              <h1 class="your_text">Mac Allister's red card against<br> Bournemouth overturned </h1>
              <p class="there_text">Liverpool midfielder now eligible to face Newcastle on Sunday</p>
              <div class="start_bt">
                <div class="read_bt"><a href="https://www.premierleague.com/news/3646849">Read More</a></div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container-fluid">
      <div class="banner_section_2">
            <div class="row">
              <div class="col-lg-4 col-sm-12 padding_0">
                <div class="box_main">
                  <div class="internet_icon">01</div>
                  <h4 class="broadband_text">Statistics</h4>
                  <p class="many_text">How Mitrovic's exit will impact Fulham</p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 padding_0">
                <div class="box_main active">
                  <div class="internet_icon">02</div>
                  <h4 class="broadband_text active">Analysis</h4>
                  <p class="many_text active">Shearer: Man Utd midfield couldn't cope with Sarr</p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 padding_0">
                <div class="box_main">
                  <div class="internet_icon">03</div>
                  <h4 class="broadband_text">Update</h4>
                  <p class="many_text">Guardiola set to miss two matches following back surgery</p>
                </div>
              </div>
            </div>
          </div> 
    </div>
    
<?php
    include "footer.php";
?>
</body>
</html>
