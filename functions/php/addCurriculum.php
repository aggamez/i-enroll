<?php
    include('config.php');
    
    $code = $_POST['code'];
    $name = $_POST['name'];

    $query = "INSERT INTO `curriculums` (`code`, `name`) VALUES ('$code','$name')";

    $result = $con->query($query);

	if($result){
		header("location:/i-enroll/adminCurriculum.php");
	}else{
		header("location:/i-enroll/adminCurriculum.php");
	}
?>