<?php
    session_start();
    unset($_SESSION["idFaculty"]);
    header("Location:../../facultyLogin.php");
?>