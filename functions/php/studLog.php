<?php
    session_start();
    include "config.php";
    include_once "funcs.php";


    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = $con -> query("SELECT `idStud`, `password` from `user-student` WHERE `idStud` = '$user'") or die($con -> error);
    $data = $query -> fetch_assoc();

    $userChk = $data['idStud'];
    $passChk = $data['password'];

    if($user == $userChk){
        if($pass == $passChk){
            $_SESSION['studUser'] = $data['idStud'];

            $codeQuery = $con -> query("SELECT * from `enroll-codes` WHERE (`idStud` = '$user' AND `year` = '$currYear' AND `semester` = '$currSem')") or die($con -> error);
            if(mysqli_num_rows($codeQuery) > 0):
                $codeRes = $codeQuery -> fetch_assoc();
                $enrollCode = $codeRes['enrollCode'];
                $_SESSION['enrollCode'] = $enrollCode;
            else:
                $enrollCode = generateRandomString(30);
                $checkQuery = $con -> query("SELECT * from `enroll-codes` WHERE `enrollCode` = '$enrollCode'") or die($con -> error);
                if(mysqli_num_rows($codeQuery) > 0):
                    header("location:../../studLogin.php");
                else:
                    $_SESSION['enrollCode'] = $enrollCode;
                    $codeIn = $con -> query("INSERT INTO `enroll-codes` (`enrollCode`, `idStud`, `year`, `semester`) VALUES ('$enrollCode', '$user', '$currYear', '$currSem')") or die($con -> error);
                endif;
            endif;

            header("location:../../studEnroll.php");
        } else{
            header("location:../../studLogin.php");
        }
    } else{
        header("location:../../studLogin.php");
    }

?>
