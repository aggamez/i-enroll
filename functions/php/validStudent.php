<?php
    session_start();
    include "config.php";
    $idStud = $_POST['idStud'];

    $query =    "UPDATE `user-student` 
    
                SET `validation` = 'T'

                WHERE `idStud` = '$idStud';";

    $result = $con->query($query);

    if($result){
		header("location:../../adminDash.php");
	}else{
		header("location:../../adminDash.php");
	}
?>