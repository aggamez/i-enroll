<?php
    include('config.php');
    
    $id = $_POST['id'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $program = $_POST['program'];
    $type = $_POST['type'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $units = $_POST['units'];
    $prerequisite = $_POST['prerequisite'];
    $corequisite = $_POST['corequisite'];

    $query =    "UPDATE `subject` 

                SET `code` = '$code', `name` = '$name',`type` = '$type', 
                `units` = '$units',`semester` = '$semester', `year` = '$year', 
                `program` = '$program', `prerequisite` = '$prerequisite', `corequisite` = '$corequisite'

                WHERE id = $id;";

    $result = $con->query($query);

	if($result){
		header("location:../../adminSubjects.php");
	}else{
		header("location:../../adminSubjects.php");
	}
?>