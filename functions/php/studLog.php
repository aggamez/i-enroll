<?php
    session_start();
    include "config.php";
    include "funcs.php";


    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = $con -> query("SELECT `username`, `password` from `user-student` WHERE `username` = '$user'") or die($con -> error);
    $data = $query -> fetch_assoc();

    $userChk = $data['username'];
    $passChk = $data['password'];

    if($user == $userChk){
        if($pass == $passChk){
            $_SESSION['studUser'] = $user;
            $_SESSION['enrollCode'] = generateRandomString(15);
            header("location:../../studEnroll.php");
        } else{
            header("location:../../studLogin.php");
        }
    } else{
        header("location:../../studLogin.php");
    }

?>
