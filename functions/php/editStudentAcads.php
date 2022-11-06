<!doctype html>
<html>
  <?php
      include "config.php";

      $idStud = $_POST['idStud'];
      $acadRow = array();
      $acadRow = $_POST['acadRow'];
      foreach($acadRow as $row){
        $idSub = $row['idSub'];
        $status = $row['status'];

        $query = "UPDATE `student-academics` 
      
        SET `status` = '$status'

        WHERE `idStud` = '$idStud' AND `idSub` = '$idSub';";

        $result = $con->query($query);

      }
      header("location:../../adminStudents.php");
  ?>
</html>
