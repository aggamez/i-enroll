<?php
    session_start();
    include "config.php";
    
    $id = $_POST['id'];
    $type = $_POST['type'];
    $oldPass = $_POST['oldPass'];
    $newPass = $_POST['newPass'];

    if ($type == 'student'){
        $query = $con -> query("SELECT * from `user-student` WHERE `idStud` = '$id'") or die($con -> error);
        $data = $query -> fetch_assoc();

        $userChk = $data['idStud'];
        $passChk = $data['password'];

        if($id == $userChk){
            if($oldPass == $passChk){
                $query = "UPDATE `user-student` 
    
                        SET `password` = '$newPass'
        
                        WHERE `idStud` = '$id';";

                $result = $con->query($query);

                if($result){
                    $time = date_create('now');
                    $dt = date_format($time, 'Y-m-d H:i:s');
                    $dl = date_format($time, 'YmdHis');

                    $source = $id;
                    $target = $id;
                    $action = 'change password';
                    $idParse = substr($target, 0, 2) . "ed" . $dl;
                    $idLog = hash('sha256', $idParse);

                    $logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
                    $log = $con->query($logQuery);
                    header("location:../../studGrades.php");
                }else{
                    header("location:../../studGrades.php");
                }
               
            } else{
    
            }
        }
    }

    elseif ($type == 'faculty'){
        $query = $con -> query("SELECT * from `user-faculty` WHERE `idFaculty` = '$id'") or die($con -> error);
        $data = $query -> fetch_assoc();
    
        $userChk = $data['idFaculty'];
        $passChk = $data['password'];

        if($id == $userChk){
            if($oldPass == $passChk){
                $query =    "UPDATE `user-faculty` 
    
                    SET `password` = '$newPass'
    
                    WHERE `idFaculty` = '$id';";

                    $result = $con->query($query);

                    if($result){
                        $time = date_create('now');
                        $dt = date_format($time, 'Y-m-d H:i:s');
                        $dl = date_format($time, 'YmdHis');

                        $source = $id;
                        $target = $id;
                        $action = 'change password';
                        $idParse = substr($target, 0, 2) . "ed" . $dl;
                        $idLog = hash('sha256', $idParse);

                        $logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
                        $log = $con->query($logQuery);
                        header("location:../../faculSects.php");
                    }else{
                        header("location:../../faculSects.php");
                    }
               
            } else{
    
            }
        } 
    }


    
?>