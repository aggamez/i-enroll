<?php
    include('config.php');
    
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
    $yrLvl= $_POST['yrLvl'];
    $username = $program . $lName;
    $password = $program . $lName;
    $emailParse = str_replace(' ', '', strtolower($lName . $fName));
    $email = $emailParse . "@tcu.edu.ph";

    $query =    "INSERT INTO `user-student` (`fName`, `mName`, `lName`, `address`, `birthdate`, `sex`, `civStat`, `nationality`, `religion`, `program`, `yrLvl`, `username`, `password`, `email`) 
                VALUES ('$fName', '$mName', '$lName', '$address', '$birthdate', '$sex', '$civStat', '$nationality', '$religion', '$program', '$yrLvl', '$username', '$password', '$email')";

    $result = $con->query($query);

	if($result){ ?>
       
            
	<?php } else{
		header("location:/i-enroll/studCreate.php");
	}
?>

<html>
    <head>
    <title> i-Enroll System </title>

    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="../../lib/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <h3>Here is your credentials. You may change the username and password later.</h3>
    <h4>Username : <?php echo $username?></h4>
    <h4>Password : <?php echo $password?></h4>
    <h4>E-Mail : <?php echo $email?></h4>

    <a class="btn btn-success py-1 px-2 ms-auto" href="../../studLogin.php">
    Proceed to Log-in
    </a>
    </body>
</html>