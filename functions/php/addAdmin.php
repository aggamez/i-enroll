<?php
    include('config.php');
    
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $emailParse = str_replace(' ', '', strtolower($lName .'.'. $fName));
    $email = $emailParse . "@tcu.edu.ph";

    $query =    "INSERT INTO `user-admin` (`fName`, `mName`, `lName`, `username`, `password`, `email`) 
                VALUES ('$fName', '$mName', '$lName', '$username', '$password', '$email')";

    $result = $con->query($query);

	if($result){
		header("location:../../adminAccounts.php");
	}else{
		header("location:../../adminAccounts.php");
	}
?>