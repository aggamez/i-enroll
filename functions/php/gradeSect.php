<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];
    $idArr = explode(", ", $id);
    $idSub = $idArr[0];
    $section = $idArr[1];

    $query = $con -> query("SELECT * from `student-enrollment` WHERE `idSub` = '$idSub' AND `section` = '$section'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { ?>
    <form 
        action="functions/php/gradeSection.php" 
        method="post">

        <div class="container gap-2 d-flex flex-column align-items-center overflow-auto" style="max-height: 30rem;">
            <h3>Students Enrolled</h3>
            <?php
                $idStud = $row['idStud'];
                $querys = "SELECT * FROM `user-student` WHERE `idStud` = '$idStud'";
                $results = $con->query($querys);

                if(mysqli_num_rows($results) > 0): ?>
                <table class="table table-striped table-bordered w-100">
                    <thead class="fs-6">
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php 
                        $counter = 1;
                        while ($rows = $results -> fetch_assoc()): 
                            $name = $rows['lName'] . ", " . $rows['fName'] . " " . $rows['mName'];
                            $grdQue = "SELECT * FROM `student-academics` WHERE `idStud` = '$idStud' AND `idSub` = '$idSub'";
                            $grdRes = $con->query($grdQue);
                            $grdVal = $grdRes -> fetch_assoc();
                            $grade = $grdVal['grade'];?>
                        <tr>
                            <td class="">
                                <input type="text" class="form-control input" 
                                    name="gradeRow[<?php echo $counter; ?>][idStud]" 
                                    value="<?php echo $idStud; ?>" readonly/>
                            </td>
                            <td class=""><?php echo $name; ?></td>
                            <td class="">
                                <div class="">
                                    <input type="number" class="form-control input" name="gradeRow[<?php echo $counter; ?>][grade]" maxlength="3" 
                                            min="1.00" max="5.00" step="0.25" value="<?php echo $grade?>" required>
                                </div>
                            </td>
                        </tr>
                    <?php $counter++; endwhile; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            
            <?php }?>
            
        </div>
        <div class="row">
            <div class="form-floating">
                    <input type="text" class="form-control visually-hidden" 
                    value="<?php echo $idSub;?>" name="idSub" placeholder="idSub">
            </div>
            <button class="btn btn-success" type="submit" name="gradeStudent">Grade Student</button>
        </div>
    </form>
<?php ?>