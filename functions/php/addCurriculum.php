<?php
    include('config.php');
    
    $code = $_POST['code'];
    $subCode = $_POST['subCode'];
    $name = $_POST['name'];

    $query = "INSERT INTO `curriculums` (`code`, `subCode`, `name`) VALUES ('$code', '$subCode', '$name')";

    $result = $con->query($query);

	if($result){
		header("location:../../adminCurriculum.php");
	}else{
		header("location:../../adminCurriculum.php");
	}
?>