<?php
    include('config.php');
    
    $code = $_POST['code'];
    $name = $_POST['name'];
    $program = $_POST['program'];
    $type = $_POST['type'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $units = $_POST['units'];
    $prerequisite = $_POST['prerequisite'];
    $corequisite = $_POST['corequisite'];

    $query = "INSERT INTO `subject` (`code`, `name`, `type`, `units`, `semester`, `year`, `program`, `prerequisite`, `corequisite`) VALUES ('$code', '$name', '$type', '$units', '$semester', '$year', '$program', '$prerequisite', '$corequisite')";

    $result = $con->query($query);

	if($result){
		header("location:../../adminSubjects.php");
	}else{
		header("location:../../adminSubjects.php");
	}
?>