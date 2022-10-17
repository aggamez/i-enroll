<?php
    include('config.php');
    
    $id = $_POST['id'];
    $code = $_POST['code'];
    $subCode = $_POST['subCode'];
    $name = $_POST['name'];

    $query =    "UPDATE`curriculums` 
                SET code = '$code', subCode = '$subCode', name = '$name'
                WHERE id = $id;
                
                ";

    $result = $con->query($query);

	if($result){
		header("location:/i-enroll/adminCurriculum.php");
	}else{
		header("location:/i-enroll/adminCurriculum.php");
	}
?>