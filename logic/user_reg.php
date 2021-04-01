<?php
include("../dbconfig.php");
if(isset($_POST['register'])) {
	$user_name = $_POST['username'];
	$user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
	$user_password = $_POST['password'];
    $limit = $_POST['limit'];
	$sql = "SELECT * FROM login WHERE email='$user_email'";
	$resultset = mysqli_query($conn, $sql) ;
	$row = mysqli_fetch_assoc($resultset);
	if(!isset($row['email'])){
        echo $limit;
		$stmt = $conn->prepare("INSERT INTO login (username,password,email,phone,tickets) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $user_name, $user_password,$user_email,$user_phone,$limit);
		$stmt->execute();
        echo "<script type='text/javascript'>alert('Registration Success . Please Login.');
        window.location.href='../index.php';
        
        </script>";

	} else {
        echo "<script type='text/javascript'>alert('Email Already Exists ');
        window.location.href='../index.php';
        
        </script>";
	}

       
       
        
    
}


?>