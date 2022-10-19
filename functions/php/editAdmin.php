<?php
    include('config.php');
    
    $id = $_POST['id'];
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query =    "UPDATE `user-admin` 

                SET `fName` = '$fName', `mName` = '$mName',`lName` = '$lName', 
                `username` = '$username',`password` = '$password', `email` = '$email'

                WHERE id = $id;";

    $result = $con->query($query);

	if($result){
		header("location:../../adminAccounts.php");
	}else{
		header("location:../../adminAccounts.php");
	}
?>