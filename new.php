<?php

$db = new mysqli ('localhost','root','','johndoedatabase');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$surname = $_POST['surname'];
	$gender = $_POST['sex'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	if(isset($_POST['signup']))
	{
	if($db->connect_error ){
		die('Connection Failed : '.$db->connect_error);
	}
	else{
		$sql = "INSERT INTO users (username,password,firstname,middlename,surname,gender,email,address) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result =([$username,$password,$firstname,$middlename,$surname,$gender,$email,$address]);
		mysqli_query($db,$sql);
		if($result){
			echo "Successfully saved.";
		}else{
			echo "There were erros while saving the data.";
		}
	}
		
	}
	else
	{
	echo 'No data';
	}
	
	
?> 