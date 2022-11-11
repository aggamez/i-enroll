<?php
    session_start();
    include "config.php";
    
    $idCurr = $_POST['idCurr'];
    $idCourse = $_POST['idCourse'];
    $nameCurr = $_POST['nameCurr'];

    $query = "INSERT INTO `curriculums` (`idCurr`, `idCourse`, `nameCurr`) VALUES ('$idCurr', '$idCourse', '$nameCurr')";

    $result = $con->query($query);

	if($result){
		header("location:../../adminCurriculum.php");
	}else{
		header("location:../../adminCurriculum.php");
	}
?>