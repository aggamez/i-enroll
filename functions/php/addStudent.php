<?php
    session_start();
    include "config.php";

    $countQuery = "SELECT COUNT(`id`) as `totCount` FROM `user-student`";
    $resQuery = $con->query($countQuery);
    $rowCount = $resQuery->fetch_assoc();
    $count = $rowCount['totCount'];


    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $sex = $_POST['sex'];
    $civStat = $_POST['civStat'];
    $contactNo = $_POST['contactNo'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $program = $_POST['program'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    
    

    if($status == "N"){
        $idStud= substr($currYear, 2, 2) . "-" . sprintf('%05d', $count);
        $yrLvl = 1;
        $yrReg = $currYear;
    }else{
        $yrLvl = $_POST['yrLvl'];
        $yrReg = $_POST['yrReg'];
        $idStud = $_POST['idStud'];
    }
    
    $password = generateRandomString(8);

    $uploadOk = 1;
    $target_dir = "../../extfiles/validator/";
    $target_file = $target_dir . basename($_FILES["validator"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<script>
        window.alert('Sorry, a file with the same name exists.');
        </script>";
    $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["validator"]["size"] > 500000) {
        echo "<script>
        window.alert('Sorry, the file is too large.');
        </script>";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "pdf") {
        echo "<script>
        window.alert('Sorry, PDF files are only allowed.');
        </script>";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>
        window.alert('Sorry, file upload failed.');
        window.location.href = '../../home.php';
        </script>";
    // if everything is ok, try to upload file
    } else {
        $query =   "INSERT INTO `user-student` (`idStud`, `fName`, `mName`, `lName`, `address`, `birthdate`, `sex`, `civStat`, `contactNo`, `nationality`, `religion`, `program`, `yrReg`, `yrLvl`, `password`, `email`, `status`) 
                    VALUES ('$idStud', '$fName', '$mName', '$lName', '$address', '$birthdate', '$sex', '$civStat', '$contactNo', '$nationality', '$religion', '$program', '$yrReg', '$yrLvl', '$password', '$email', '$status')";

        $result = $con->query($query);

        if($result && $uploadOk == 1){ 
            $fileName = $target_dir . $idStud . "." . $imageFileType;
            if (move_uploaded_file($_FILES["validator"]["tmp_name"], $fileName)) {
                echo "<script>
                window.alert('File upload successful!');
                </script>";
            } else{}
            
            $time = date_create('now');
            $dt = date_format($time, 'Y-m-d H:i:s');
            $dl = date_format($time, 'YmdHis');

            $source = 'SYSTEM';
            $target = $idStud;
            $action = 'ADD STUDENT';
            $idParse = $target . "cstud" . $dl;
            $idLog = hash('sha256', $idParse);

            $logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
            $log = $con->query($logQuery);

            $currQuery = "SELECT * FROM `curriculums` WHERE `idCurr` = '$program'";
            $currData = $con->query($currQuery);
            $currVal = $currData -> fetch_assoc();
            $courCode = $currVal['idCourse'];

            $subQuery = "SELECT * FROM `subject` WHERE `program` = '$courCode'";
            $subData = $con->query($subQuery);
            while($subjects = $subData->fetch_assoc()){
                $course = $subjects['idSub'];
                $units = $subjects['unitTot'];
                $subStatus = 'O';
                $statQuery = "INSERT INTO `student-academics` (`idStud`, `idSub`, `units`, `status`) VALUES ('$idStud', '$course', '$units', '$subStatus')";
                $acadQuery = $con->query($statQuery);
            }
        } else {header("location:../../home.php");}
            ?>

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
                        <h3>Here is your credentials. You may change the password later.</h3>
                        <h4>Username : <?php echo $idStud?></h4>
                        <h4>Password : <?php echo $password?></h4>
                        <h4>E-Mail : <?php echo $email?> <br> </h4>
                        
                        <h3>Note: If you are a recurring student (Regular/Irregular),</h3>
                        <h3> please wait for record processing before enrollment.</h3>
                        <a class="btn btn-lg btn-success py-1 px-2" href="../../studLogin.php">
                        Proceed to Log-in
                        </a>
                    </div>
                </body>
            </html>
	<?php }
?>

