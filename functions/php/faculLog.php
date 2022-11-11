<?php
    session_start();
    include "config.php";
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = $con -> query("SELECT * from `user-faculty` WHERE `idFaculty` = '$user'") or die($con -> error);
    $data = $query -> fetch_assoc();

    $userChk = $data['idFaculty'];
    $passChk = $data['password'];
    if($user == $userChk){
        if($pass == $passChk){
            $_SESSION['idFaculty'] = $data['idFaculty'];
            header("location:../../faculDash.php");
        } else{
            header("location:../../faculLogin.php");
        }
    } else{
        header("location:../../faculLogin.php");
    }

?>
