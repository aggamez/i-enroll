<!doctype html>
<html>
  <?php
      include "config.php";

      $idSub = $_POST['idSub'];
      $gradeRow = array();
      $gradeRow = $_POST['gradeRow'];
      foreach($gradeRow as $row){
        $status;
        $idStud = $row['idStud'];
        $midGrade = $row['midGrade'];
        $tntGrade = $row['tntGrade'];
        $grade = $row['grade'];
        if($grade <= 3.0):
          $status = 'P';
        else:
          $status = 'O';
        endif;


        $query = "UPDATE `student-academics` 
      
        SET `midGrade` = '$midGrade',
        SET `tntGrade` = '$tntGrade',
        SET `grade` = '$grade', 
      
        `status` = '$status'

        WHERE `idStud` = '$idStud' AND `idSub` = '$idSub';";

        $result = $con->query($query);

      }
      header("location:../../faculSects.php");
  ?>
</html>
