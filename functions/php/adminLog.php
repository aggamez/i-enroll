<?php
    include('config.php');

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = $con -> query("SELECT * from `user-admin` WHERE username = '$user'") or die($con -> error);
    $data = $query -> fetch_assoc();

    $userChk = $data['username'];
    $passChk = $data['pass'];

    if($user == $userChk){
        if($pass == $passChk){
            header("location:/i-enroll/adminDash.php");
        } else{
            header("location:/i-enroll/adminLogin.php");
        }
    } else{
        header("location:/i-enroll/adminLogin.php");
    }
