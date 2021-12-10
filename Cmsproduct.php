<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
     <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" contents="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="CMS products.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gluten:wght@800&display=swap" rel="stylesheet">






</head>
<body>
    <div class="main">
    <div class="menu">
     <h2 id="logo" style="font-size:40px;"> JON DOUGH </h2>
     <a href="dash.html">Dashboard</a>
     <a href="cmsproduct.php">Products</a>
     <a href="cmsuser.php">User</a>
     <a href="cmsorder.html">Orders</a>
     <a href="cmshistory.php">History transaction</a>


</div>
<div class="container">
    <div class="header">
        <div class="nav">
           
                <div class="user">
                 
                    <div class="img-case">
                    <img src="adminicon.png" alt="admin"  style="width:90px;height:80px;" >
                    </div>
                </div>
            </div>
        </div>
    
   
  <div class="mytabs">
        <input type="radio" id="tabdonuts" name="mytabs" checked="checked">
        <label for="tabdonuts">DONUTS</label>
        <div class="tab">
            <h2>DONUTS</h2>
            <table class="content-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>STOCK</th>
      <th>PRICE</th>
    </tr>
  </thead>
  <?php
$conn = new mysqli ('localhost','root','','johndoedatabase');

if($conn-> connect_error){
  die("Connection failed: ". $conn-> connect_error);
}

$sql = "SELECT id,products,quantity,price from donuts";
$result = $conn-> query($sql);

if ($result-> num_rows > 0){
  while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["id"] ."</td><td>". $row["products"] ."</td><td>" .$row["quantity"] . "</td><td>" .$row["price"] . "</td></tr>";
  }
echo "</table>";
}
else{
  echo "0 result";
}
$conn-> close();
  ?>
 <tbody>
  </tbody>
</table>

        </div>

        <input type="radio" id="tabdrinks" name="mytabs">
        <label for="tabdrinks">DRINKS</label>
        <div class="tab">
            <h2>DRINKS</h2>
            <table class="content-table">
  <thead>
      <tr>
<th>ID</th>
      <th>NAME</th>
      <th>STOCK</th>
      <th>PRICE</th>
    </tr>
  </thead>
   <?php
$conn = new mysqli ('localhost','root','','johndoedatabase');

if($conn-> connect_error){
  die("Connection failed: ". $conn-> connect_error);
}

$sql = "SELECT id,products,quantity,price from donuts";
$result = $conn-> query($sql);

if ($result-> num_rows > 0){
  while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["id"] ."</td><td>". $row["products"] ."</td><td>" .$row["quantity"] . "</td><td>" .$row["price"] . "</td></tr>";
  }
echo "</table>";
}
else{
  echo "0 result";
}
$conn-> close();
  ?>
  <tbody>

    
   

    
   
   
 
    </tr>
  </tbody>
</table>

        </div>

     </div>

</div>

  
</body>
</html>