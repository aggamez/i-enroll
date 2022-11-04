<?php
    session_start();
    include "config.php";
    
    $code = $_POST['code'];
    $subCode = $_POST['subCode'];
    $name = $_POST['name'];

    $query = "INSERT INTO `curriculums` (`code`, `name`) VALUES ('$code', '$name')";

    $result = $con->query($query);

	if($result){
		header("location:../../adminCurriculum.php");
	}else{
		header("location:../../adminCurriculum.php");
	}
?>