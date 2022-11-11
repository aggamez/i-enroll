<!doctype html>
<html>
  <?php
      include "config.php";
      
      $schedRow = array();
      $schedRow = $_POST['schedRow'];
      foreach($schedRow as $row){
        $section = $row['section'];
        $timeIni = $row['timeIni'];
        $timeEnd = $row['timeEnd'];

        $query = "UPDATE `schedule` 
      
        SET `timeIni` = '$timeIni', `timeEnd` = '$timeEnd'

        WHERE `section` = '$section'";

        $result = $con->query($query);

      }
      header("location:../../adminSchedules.php");
  ?>
</html>
