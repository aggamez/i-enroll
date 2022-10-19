<?php
    include('config.php');
    $id = $_POST['id'];
    
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $sex = $_POST['sex'];
    $civStat = $_POST['civStat'];
    $contactNo = $_POST['contactNo'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $program = $_POST['program'];
    $yrLvl= $_POST['yrLvl'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query =    "UPDATE `user-student` 
    
                SET `fName` = '$fName', `mName` = '$mName',`lName` = '$lName', 
                `address` = '$address', `birthdate` = '$birthdate',`sex` = '$sex', 
                `civStat` = '$civStat', `contactNo` = '$contactNo',`religion` = '$religion', 
                `religion` = '$religion', `program` = '$program',`yrLvl` = '$yrLvl',
                `username` = '$username',`password` = '$password', `email` = '$email'

                WHERE id = $id;";

    $result = $con->query($query);

    if($result){
		header("location:../../adminStudents.php");
	}else{
		header("location:../../adminStudents.php");
	}
?>