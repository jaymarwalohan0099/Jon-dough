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
     <h1>ADMIN</h1>
     <form action="admin.php" method="POST">
    <p>Username</p>
    <input type="text" name="user" placeholder="Enter username">
    <p>Password</p>
    <input type="password" name="password" placeholder="Enter Password">
    <?php if (isset($_GET['error'])) { ?>
        <p class= "error" name="error" style="font-family: sans-serif;color: darkred;font-size: 15px;"> <?php echo $_GET['error']; ?></p>
    <?php } ?>
    <input type="submit" name="" value="login">
    <br><a href="#">Forgot password?</a><br>
      <a href="#">Don't have an account?</a>
   </form>
</div>


</nav>
</body>
</head>
</html>

