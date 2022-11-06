<?php 
	include_once 'funcs.php';
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'i-enroll';

	$con = new mysqli($server,$user,$pass,$db);

	$tz = 'Asia/Manila';
	date_default_timezone_set('Asia/Manila');

	$currSem = 1;
	$currYear = 2022;
	
?>