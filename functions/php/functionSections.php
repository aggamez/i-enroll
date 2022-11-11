<?php

use function PHPSTORM_META\type;

    session_start();
    include "config.php";

    $idStud = $_SESSION['studUser'];
    $enrollCode = $_SESSION['enrollCode'];

    $studQuery = "SELECT * FROM `user-student` WHERE `idStud` = '$idStud'";
    $studIns = $con -> query($studQuery) or die($con -> error);
    $studData = $studIns -> fetch_assoc();
    $yrLvl = $studData['yrLvl'];
    
    $type = $_POST['type'];

    if($type == "add"):
        $idSub = $_POST['idSub'];
        $section = $_POST['section'];
        $addQuery = "INSERT INTO `student-enrollment` (`enrollCode`, `idStud`, `idSub`, `section`) VALUES ('$enrollCode', '$idStud', '$idSub', '$section')";
        $addIns = $con -> query($addQuery) or die($con -> error);
        if($addIns):
            $statQuery = "UPDATE `student-academics` SET `status` = 'R' WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
            $statEdit = $con -> query($statQuery) or die($con -> error);
            if($statEdit):
                header("location:../../studEnroll.php");
            else:
                header("location:../../studEnroll.php");
            endif;
        else:
            header("location:../../studEnroll.php");
        endif;

    elseif($type == "quick"):
        $section = $_POST['section'];
        $courQuery = "SELECT * FROM `subject` WHERE `year` = '$yrLvl' AND `semester` = '$currSem'";
        $courIns = $con -> query($courQuery) or die($con -> error);
        while($courData = $courIns -> fetch_assoc()):
            $idSub = $courData['idSub'];
            $addQuery = "INSERT INTO `student-enrollment` (`enrollCode`, `idStud`, `idSub`, `section`) VALUES ('$enrollCode', '$idStud', '$idSub', '$section')";
            $addIns = $con -> query($addQuery) or die($con -> error);
            if($addIns):
                $statQuery = "UPDATE `student-academics` SET `status` = 'R' WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
                $statEdit = $con -> query($statQuery) or die($con -> error);
                if($statEdit):
                    header("location:../../studEnroll.php");
                else:
                    header("location:../../studEnroll.php");
                endif;
            else:
                header("location:../../studEnroll.php");
            endif;
        endwhile;

    elseif($type == "enroll"):
        $courQuery = "SELECT * FROM `student-enrollment` WHERE `enrollCode` = '$enrollCode'";
        $courIns = $con -> query($courQuery) or die($con -> error);
        while($courData = $courIns -> fetch_assoc()):
            $idSub = $courData['idSub'];
            $statQuery = "UPDATE `student-academics` SET `status` = 'E' WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
            $statEdit = $con -> query($statQuery) or die($con -> error);
            if($statEdit):?>
                <!doctype html>
                <html>
                    <head>
                    <title> i-Enroll System </title>

                    <link rel="stylesheet" href="../../assets/css/style.css">
                    <link rel="stylesheet" href="../../lib/css/bootstrap.min.css">
                    <link rel="stylesheet" href="../../lib/css/bootstrap-icons-1.9.1/bootstrap-icons.css">

                    <script src="../../lib/js/bootstrap.bundle.min.js"></script>
                    <script src="../../lib/js/jquery-3.6.1.min.js"></script>
                    </head>
                    <body class="">
                        <div class="d-flex flex-column align-items-center justify-content-center gap-2 min-vh-100 w-100" >
                            <h3>Successfully Enrolled. You may request Registration Form at the Admin/Registrar.</h3>
                            <h4>Enroll Code: <?php echo $enrollCode?></h4>
                            
                            <a class="btn btn-lg btn-success py-1 px-2" href="studOut.php">
                            Proceed to Log-Out
                            </a>
                        </div>
                    </body>
                </html>
            <?php 
            else:
            endif;
        endwhile;

    elseif($type == "change"):
        $section = $_POST['section'];
        $idSub = $_POST['idSub'];
        $chgQuery = "UPDATE `student-enrollment` SET `section` = '$section' WHERE `idSub` = '$idSub' AND `enrollCode` = '$enrollCode'";
        $chgIns = $con -> query($chgQuery) or die($con -> error);
        if($chgIns):
            header("location:../../studEnroll.php");
        else:
            header("location:../../studEnroll.php");
        endif;

    elseif($type == "delete"):
        $section = $_POST['section'];
        $idSub = $_POST['idSub'];
        $addQuery = "DELETE FROM `student-enrollment` WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
        $addIns = $con -> query($addQuery) or die($con -> error);
        if($addIns):
            $statQuery = "UPDATE `student-academics` SET `status` = 'O' WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
            $statEdit = $con -> query($statQuery) or die($con -> error);
            if($statEdit):
                header("location:../../studEnroll.php");
            else:
                header("location:../../studEnroll.php");
            endif;
        else:
            header("location:../../studEnroll.php");
        endif;

    else:
        header("location:../../studEnroll.php");
    endif;
    ?>