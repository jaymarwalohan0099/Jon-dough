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
	
	
		
		$stmt = $conn->prepare("Select * from admin Where Username = ?");
		$stmt->bind_param("s",$user);
		$stmt->execute();
		$stmt_result = $stmt->get_result();



		if($stmt_result->num_rows > 0)
		{
		$data = $stmt_result->fetch_assoc();
		if($data['Password'] === $password)
		{
			header("Location:loadingAdmin.html");
			echo "Success";
		}
		else
		{
			header("Location: AdminLogin.php?error=Authentication Failed");
			exit();
		}
		}
		else
		{
			header("Location: AdminLogin.php?error=Authentication Failed");
			exit();
		}

		

	

		
		 

		


	



}

?>