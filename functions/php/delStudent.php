<?php
    session_start();
	include('config.php');
    
    $id = $_POST['id'];

    $query = "DELETE FROM `user-student` WHERE id = $id";

    $result = $con->query($query);

	if($result){
		header("location:../../adminStudents.php");
	}else{
		header("location:../../adminStudents.php");
	}
?>