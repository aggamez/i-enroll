<!doctype html>
<?php
    include('functions/php/config.php');

    $enrollCode = $_POST['enrollCode'];

    $enrollQuery =  $con -> query("SELECT * FROM `enroll-codes` WHERE `enrollCode` = '$enrollCode'") or die($con -> error);
    $enrollData = $enrollQuery -> fetch_assoc();

?>
<html>

    <head>
        <title>i-Enroll System</title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/css/bootstrap-icons-1.9.1/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>
        <script src="lib/js/jquery-3.6.1.min.js"></script>
        <script src="lib/js/html2pdf.bundle.min.js"></script>

    </head>

    <body>
        <div class="d-flex my-1" id="document">
            <div class="container container-fluid border border-dark border-2"> <!-- upper part -->
                <div class="d-flex flex-row align-items-center justify-content-center gap-5 py-2">
                    <img src="assets/img/taguig-logo.png" alt="" srcset="" style="height: 6rem;">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <h5>Republic of the Philippines</h5>
                        <h2>Taguig City University</h2> 

                    </div>
                    <img src="assets/img/school-logo.png" alt="" srcset="" style="height: 6rem;">
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center py-1">
                    <h3>Certificate of Enrollment</h3>
                    <h4>Academic Year <?php echo $enrollData['year'];?> - <?php echo $enrollData['year'] + 1;?></h4>
                    <h4><?php if($enrollData['semester'] == 1) echo "First"; elseif($enrollData['semester'] == 2) echo "Second";?> Semester</h4> 
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center py-1">
                    <?php
                        $idStud = $enrollData['idStud'];
                        $studQuery =  $con -> query("SELECT * FROM `user-student` WHERE `idStud` = '$idStud'") or die($con -> error);
                        $studData = $studQuery -> fetch_assoc();
                    ?>

                    <h6 class="pb-1">Student No.: <?php echo $studData['idStud']?></h6>
                    
                    <h6>Name: <?php echo $studData['lName'] . ", " . $studData['fName'] . " " . $studData['mName']?></h6>
                    
                    <h6>Year Level / Section: <?php 
                        $status;
                        if ($studData['status'] == 'N') $status = "New";
                        elseif ($studData['status'] == 'R') $status = "Regular";
                        elseif ($studData['status'] == 'X') $status = "Irregular";
                        echo $studData['yrLvl'] . "/ " . $studData['program'] . " /" .  $status?></h6>

                    <?php
                        $curr = $studData['program'];
                        $currQuery =  $con -> query("SELECT * FROM `curriculums` WHERE `idCurr` = '$curr'") or die($con -> error);
                        $currData = $currQuery -> fetch_assoc();

                        $dept = $currData['department'];
                        $deptQuery =  $con -> query("SELECT * FROM `departments` WHERE `idDept` = '$dept'") or die($con -> error);
                        $deptData = $deptQuery -> fetch_assoc();
                    ?>

                    <h6>College: <?php echo "(". $deptData['idDept'] . ") " . $deptData['nameDept']?></h6>
                    <h6>Course / Track: <?php echo "(". $currData['idCurr'] . ") " . $currData['nameCurr']?></h6>   
                </div>
                
                <div class="d-flex flex-column align-items-start justify-content-center py-1">
                    <?php
                        $studQuery =  $con -> query("SELECT * FROM `user-student` WHERE `idStud` = '$idStud'") or die($con -> error);
                        $studData = $studQuery -> fetch_assoc();
                    ?>

                    <h5 class=""><b>Enrolled Courses</b></h5>

                    <table class="table table-striped table-bordered w-100 text-center">
                        <thead class="fs-6">
                            <tr>
                                <th>Subject Code</th>
                                <th>Title</th>
                                <th>Units</th>
                                <th>Schedule</th>
                                <th>Room</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            $units = 0;
                            $enrolledQuery = $con -> query("SELECT * FROM `student-enrollment` WHERE `idStud` = '$idStud' AND `enrollCode` = '$enrollCode'") or die($con -> error);
                            while($rowEnroll = $enrolledQuery -> fetch_assoc()):
                                $section = $rowEnroll['section'];
                                $enSubj = $rowEnroll['idSub'];
                                $enSubQuery = $con -> query("SELECT * FROM `subject` WHERE `idSub` = '$enSubj'") or die($con -> error);
                                $enSubRes = $enSubQuery -> fetch_assoc();
                                $enSchedQuery = $con -> query("SELECT * FROM `schedule` WHERE `idSub` = '$enSubj' AND `section` = '$section'") or die($con -> error);
                                $enSchedRes = $enSchedQuery -> fetch_assoc();
                                $units += $enSubRes['unitTot'];
                        ?>
                            <tr>
                                <td> <?php echo $enSubRes['idSub']; ?> </td>
                                <td> <?php echo $enSubRes['name'];?> </td>
                                <td> <?php echo $enSubRes['unitTot']; ?> </td>
                                <td> <?php echo $enSchedRes['days'] . " / " . $enSchedRes['timeIni'] . "-" . $enSchedRes['timeEnd']; ?> </td>
                                <td> <?php echo $enSchedRes['room']; ?> </td>
                            </tr>

                        <?php endwhile ?>

                            <tr>
                                <td colspan="2">Total Units</td>
                                <td><?php echo $units; ?></td>
                                <td colspan="2"></td>
                            </tr>
                        </tbody>
                    </table>
                    

                </div>
            </div>

            <div>

            </div>
        </div>

    </body>

    <script>
        <?php
            $filename = $enrollCode .'.pdf';
        ?>
        var element = document.getElementById('document');
        /*
        var opt = {
            margin:       0.25,
            filename:     '<?php echo $filename; ?>',
            image:        { type: 'png', quality: 0.98 },
            html2canvas:  { scale: 1 },
            jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
        */
        var worker = html2pdf().from(element).saveAs('<?php echo $filename; ?>');

        
    </script>

</html>
