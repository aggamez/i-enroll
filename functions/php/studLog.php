<?php
    include('config.php');

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = $con -> query("SELECT * from `user-student` WHERE username = '$user'") or die($con -> error);
    $data = $query -> fetch_assoc();

    $userChk = $data['username'];
    $passChk = $data['password'];

    if($user == $userChk){
        if($pass == $passChk){
            header("location:../../studDash.php");
        } else{
            header("location:../../adminLogin.php");
        }
    } else{
        header("location:../../adminLogin.php");
    }

?>
