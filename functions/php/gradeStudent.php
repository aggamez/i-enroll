<!doctype html>
<html>
  <?php
      include "config.php";

      $idStud = $_POST['idStud'];
      $gradeRow = array();
      $gradeRow = $_POST['gradeRow'];
      foreach($gradeRow as $row){
        $status;
        $idSub = $row['idSub'];
        $grade = $row['grade'];
        if($grade <= 3.0):
          $status = 'P';
        elseif($grade == 5.00):
          $status = 'O';
        else:
          $status = 'E';
        endif;


        $query = "UPDATE `student-academics` 
      
        SET `grade` = '$grade', `status` = '$status'

        WHERE `idStud` = '$idStud' AND `idSub` = '$idSub';";

        $result = $con->query($query);

      }
      header("location:../../faculProxy.php");
  ?>
</html>
