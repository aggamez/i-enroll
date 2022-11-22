<!doctype html>
<html>
  <?php
    include "config.php";

    $countQuery = $con -> query("SELECT COUNT(*) as `count` from `survey`") or die($con -> error);
    $countResult = $countQuery ->fetch_assoc();
    $countVal = $countResult['count'] + 1;


    $preQuery = array();
    $name = $_POST['name'];
    $yrLvl = $_POST['yrLvl'];
    $section = $_POST['section'];
    $label = $_POST['label'];

    array_push($preQuery,$countVal,$name, $yrLvl, $section, $label);
    
    $valRow = array();
    $valRow = $_POST['evalRow'];
    foreach($valRow as $dimone){
        $total = 0;
        foreach($dimone as $dimtwo){
            $total += $dimtwo;
            array_push($preQuery, $dimtwo);
        }
        array_push($preQuery, $total);
    }

    $preValues = array_map(array($con, 'real_escape_string'), array_values($preQuery));
    $strQuery = implode("', '", $preValues);
    print($strQuery);


    $query = $con -> query("INSERT INTO `survey` 
                            VALUES ('$strQuery')") or die($con -> error);
    header("location:../../home.php");
  ?>
</html>
