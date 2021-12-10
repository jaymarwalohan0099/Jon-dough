<?php
$user = ($_POST['user']);
$password = ($_POST['password']);
$passwords = md5($_POST['password']);
//DATA CONNECTION
$conn = new mysqli('localhost','root','','johndoedatabase');
if($conn->connect_error)
{
	die("Connection Failed : ".$conn->connect_error);

}
else
{
	
	
		
		$stmt = $conn->prepare("Select * from user Where username = ?");
		$stmt->bind_param("s",$user);
		$stmt->execute();
		$stmt_result = $stmt->get_result();




		if($stmt_result->num_rows > 0)
		{
		$data = $stmt_result->fetch_assoc();
		if($data['password'] === $passwords)
		{
			
			session_start();
			$_SESSION['user'] = $user;
			header("Location:loading.html");
			//echo "Success";
		}
		else
		{
			header("Location: LogIn.php?error=Authentication Failed");
			exit();
		}
		}
		else
		{
			header("Location: LogIn.php?error=Authentication Failed");
			exit();
		}

}

?>