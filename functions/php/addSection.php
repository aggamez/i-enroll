<?php
    session_start();
    include "config.php";
    
    $section = $_POST['section'];
    $idCourse = $_POST['idCourse'];
    $type = $_POST['type'];

    $query = "INSERT INTO `sections` (`section`, `idCourse`, `type`) VALUES ('$section', '$idCourse', '$type')";

    $result = $con->query($query);

	if($result){
		header("location:../../adminSections.php");
	}else{
		header("location:../../adminSections.php");
	}
?>