<?php
    include('config.php');
    
    $id = $_POST['id'];

    $query = "DELETE FROM `subject` WHERE id = $id";

    $result = $con->query($query);

	if($result){
		header("location:/i-enroll/adminSubjects.php");
	}else{
		header("location:/i-enroll/adminSubjects.php");
	}
?>