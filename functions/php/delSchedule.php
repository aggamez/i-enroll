<?php
    session_start();
	include('config.php');
    
    $id = $_POST['idSub'];

    $query = "DELETE FROM `schedule` WHERE `idSub` = '$id'";

    $result = $con->query($query);

	if($result){
		$time = date_create('now');
        $dt = date_format($time, 'Y-m-d H:i:s');
        $dl = date_format($time, 'YmdHis');

        $source = $_SESSION['idAdmin'];
        $target = $id;
        $action = 'REMOVE SCHEDULE';
        $idParse = substr($target, 0, 2) . "ds" . $dl;
        $idLog = hash('sha256', $idParse);

		$logQuery = "INSERT INTO `logs` (`idLog`, `date`, `source`, `action`, `target`) VALUES ('$idLog', '$dt', '$source', UPPER('$action'), '$target')";
        $log = $con->query($logQuery);
		header("location:../../adminSchedules.php");
	}else{
		header("location:../../adminSchedules.php");
	}
?>