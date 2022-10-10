<?php
    include('config.php');
    
    $id = $_POST['submit'];

    $query = "DELETE FROM `curriculums` WHERE id = $id";

    $result = $con->query($query);

	if($result){
		header("location:/i-enroll/adminCurriculum.php");
	}else{
		header("location:/i-enroll/adminCurriculum.php");
	}
?>