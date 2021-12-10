<html>
<head>
<title>Login form Design</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gluten:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="sdd.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
<body>
    <div class="loginbox" id="rasta">
    <img src="user.png" class="Account">
     <h1>Login Here</h1>
     <form action="connect.php" method="POST">
    <p>Username</p>
    <input type="text" name="user" placeholder="Enter Username">
    <p>Password</p>
    <input type="password" name="password" placeholder="Enter Password">
    <?php if (isset($_GET['error'])) { ?>
        <p class= "error" name="error" style="font-family: sans-serif;color: darkred;font-size: 15px;"> <?php echo $_GET['error']; ?></p>
    <?php } ?>
    <input type="submit" name="" value="login">
    <br><a href="#">Forgot password?</a><br>
      <a href="SignUp.php">Don't have an account?</a>
   </form>
</div>

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
    <title>Responsive Footer - Sagar Developer</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gluten:wght@800&display=swap" rel="stylesheet">
  <style>
  
   .nav-link {
   font-family: 'Gluten', cursive;
}

.dropbtn {
  font-size: 16px;
  border: none;
  cursor: pointer;
  font-family: 'Gluten', cursive;
   background-color: #dda703;
   color: #007bff;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #dda703;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #ffffff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-family: 'Gluten', cursive;
}

.dropdown-content a:hover {background-color: #007bff;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
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
  <ul class="navbar-nav">
   
    <li class="nav-item">
      <a class="nav-link" href="SignUp.php" style="color:#ffffff;">Sign Up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="LogIn.php" style="color:#ffffff;">Log in</a>
    </li>
  </ul>
</nav>
</body>
</head>
</html>

