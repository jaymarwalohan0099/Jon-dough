<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>DOUGHTNUTTY HOMEPAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="#">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gluten:wght@800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="sign.css">
  <style>
    #rasta{
    background-color: #dda703;
  }

  .fakeing {
    height: 100px;
    background: #e19304;

  }

  .fakeimg {
    height: 200px;
    background: #aaa;
  }
   .nav-link {
   font-family: 'Gluten', cursive;
}
h2 {
   font-family: 'Gluten', cursive;
   color: white;
}
h3 {
   font-family: 'Gluten', cursive;
   color: white;
   }
.dropbtn {
  font-size: 16px;
  border: none;
  cursor: pointer;
  font-family: 'Gluten', cursive;
  background-color: #dda703;
  color: white;

}

.dropdown {
  position: relative;
  display: inline-block;

}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color:#D18700;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-family: 'Gluten', cursive;
  color: white;
}

.dropdown-content a:hover {background-color: #FFC55C; text-decoration: none;}


.dropdown:hover .dropdown-content {
  display: block;
  text-decoration: none;
 
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
  text-decoration: none;
}
footer {
    position: none;
    bottom: 0;
    
   
}

@media (max-height:800px) {
    footer {
        position: none;
    }
    header {
        padding-top: 40px;
    }
}

.footer-distributed {
    background-color: #cc8502;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 80px;

}

.footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
    width: 30%;
}

.footer-distributed h3 {
    color: #ffffff;
    font: normal 36px 'Cookie', cursive;
    margin: 0;
}


.footer-distributed h3 span {
    color: #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links {
    color: #ffffff;
    margin: 20px 0 12px;
}

.footer-distributed .footer-links a {
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: inherit;
}

.footer-distributed .footer-company-name {
    color: #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
    width: 35%;
}

.footer-distributed .footer-center i {
    background-color: #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p {
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin: 0;
}

.footer-distributed .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
}

.footer-distributed .footer-center p a {
    color: #e0ac1c;
    text-decoration: none;
    ;
}

/* Footer Right */

.footer-distributed .footer-right {
    width: 30%;
}

.footer-distributed .footer-company-about {
    line-height: 20px;
    color: #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span {
    display: block;
    color: #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons {
    margin-top: 25px;
}

.footer-distributed .footer-icons a {
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
}

.footer-distributed .footer-icons a:hover {
    background-color: #3F71EA;
}

.error{
    background: #754C00;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    
}

.footer-links a:hover {
    color: #3F71EA;
}

@media (max-width: 880px) {
    .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }
    .footer-distributed .footer-center i {
        margin-left: 0;
    }
}       

  </style>
</head>
<body style="background-color:#dda703;">


   <div class="fakeing"> </div>
</div>


<nav class="navbar navbar-expand-sm bg-warning navbar-dark sticky-top">
  <a class="navbar-brand" href="Homepage.html">
  <img src="ask.png" alt="Logo" style="width:90px;"> 
</a>
  <ul class="navbar-nav" style="text-align:right;">
    
    <li class="nav-item">

</style>


<div class="dropdown">
  <a class="user" href="acc.html" style="color:#ffffff;" name = "user"><?php echo $_SESSION['user'];?></a>
  <div class="dropdown-content">
              <a href="acc.html">My Account</a>
              <a href="#">Orders</a>
              <a href="#">Logout</a>

          
    </li>
  </ul>
</nav>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>JON DOUGH</h2>
      <h5><i>Courtesy:</i></h5>
      <img src="lead.jpg" style="width:340px;height:200px;">
      <i>Whether it's at the end of a meal or during merienda time, sometimes, all we need is a good 'ol sweet donut to perk us up and complete our day</i>
      <h3>Some Links</h3>
      
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          
           <div class="dropdown" style="float:left;">
<button class="dropbtn" id="rasta">Products</button>
  <div class="dropdown-content" style="left:0;">
  <a id="donut" href="Products.html">DOUGHNUTS</a>
  <a id="donut2" href="drinks.html">DRINKS</a>
  </div>
</div>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="About us.html" >About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="Homepage.html">Home</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>LATEST DOUGHNUT</h2>
      <h5>Grab now until: Oct 7, 2021</h5>
      <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
 
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active" align="center">
     <a href="Products.html"> <img src="aws.png" alt="Los Angeles" style="width:500px;height:500px;"></a>
    </div>
    <div class="carousel-item" align="center">
    <a href="Products.html">  <img src="lol.png"  style="width:500px;height:500px;"></a>
    </div>
    <div class="carousel-item" align="center">
     <a href="Products.html"> <img src="sad.png" style="width:500px;height:500px;"></a>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>

      <br>
      <h2>PURELY BAKE</h2>
            
       <img src="bake.jpg" style="width:750px;height:200px;">
      <b><i>Courtesy:</i></b> https://www.ziprecruiter.com/Jobs/Baker</p>
       <br>
      <i>Our products are 100% freshly bake everyday and picked up letfover on the next day to make sure quality is preserved.</i>
    </div>
  </div>
</div>



  
</div>
<body>
    <header>
            </header>
    <footer class="footer-distributed">

        <div class="footer-left">
            

            <p class="footer-links">
                <a href="Homepage.html">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
                |
                <a href="#">Blog</a>
            </p>

            <p class="footer-company-name"  style="color: #D1D1D1;">Copyright © 2021 <strong>Doughtnuts</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>CAMARIN CALOOCAN CITY</span></p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>2-4212-2124</p>
            </div>
                    </div>
        <div class="footer-right">
            <p class="footer-company-about" style="color: #D1D1D1;" >
                <span>About the company</span>
                <strong >DOUGHNUTS</strong > FINDING DONUTS</p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>

</body>