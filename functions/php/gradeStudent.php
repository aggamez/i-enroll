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
        else:
          $status = 'O';
        endif;


        $query = "UPDATE `student-academics` 
      
        SET `grade` = '$grade', `status` = '$status'

        WHERE `idStud` = '$idStud' AND `idSub` = '$idSub';";

        $result = $con->query($query);

      }
      header("location:../../faculDash.php");
  ?>
</html>
