<?php

	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$passwords = md5($password);
	$conpassword = $_POST['Conpassword'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$surname = $_POST['surname'];
	$phone = $_POST['C-Number'];
	$email = $_POST['email'];
	$housenum = $_POST['HNSN'];
	$barangay = $_POST['Baranggay'];
	$city = $_POST['City'];
	$region = $_POST['Region'];
	
	//$validation = $_POST['NEW'];
	$count = "0";
	$counts = "0";

	for ($i="0";$i<strlen($password);$i++)
	{
		$count=$count+1;
	}
	

	$conn = new mysqli ('localhost','root','','johndoedatabase');

	if($conn->connect_error )
	{
		die('Connection Failed : '.$conn->connect_error);
	}
	else

	{

		$stmt = $conn->prepare("select * from user where username = ?");
		$stmt->bind_param("s",$username);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		
		if($stmt_result->num_rows !=0)
		{
			header("Location:SignUp.php?error=Username is already taken");
			
		}
		else
		{
			if ( $count >= '8')
			{

				if($password != $conpassword)
				{
				header("Location:SignUp.php?error=Password does not match");
				}
				else
				{
					$sql_query = "INSERT INTO user (username,password,firstname,middlename,surname,gender,email,phone,housenum,barangay,city,region) 
					VALUES ('$username','$passwords','$firstname','$middlename','$surname','$gender','$email','$phone','$housenum','$barangay','$city','$region')";

					$rs = mysqli_query($conn,$sql_query);

			
					echo "Created an account successfully!";
		
					mysqli_close($conn);
					header("Location:loadingSignUp.html");
				}

			}
			else
			{
			


				header("Location:SignUp.php?error=The password must be 8 characters or more");
				
				

				
			}
		

	}
		

			
				

	}

?>