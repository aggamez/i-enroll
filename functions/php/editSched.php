<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from `subject` WHERE `id` = '$id'") or die($con -> error);
    $subData = $query->fetch_assoc();
    $idSub = $subData['idSub'];

    $schedQuery = $con -> query("SELECT * from `schedule` WHERE `idSub` = '$idSub'") or die($con -> error);?>
    <form 
        action="functions/php/editSchedule.php" 
        method="post">
        <div class="container gap-2 d-flex flex-column">
            <div class="row">
                <div class="col-3">
                    <div class="form-floating">
                        <input type="text" id="idSub" name="idSub" class="form-control form-control-lg input"
                                placeholder="Code" value="<?php echo $subData['idSub']?>" readonly />
                        <label class="form-label fs-6" for="idSub">Course Code</label>
                    </div>
                </div>
                <div class="col-9">
                    <div class="form-floating">
                        <input type="text" id="name" name="name" class="form-control form-control-lg input"
                            placeholder="Name" value="<?php echo $subData['name']?>" readonly />
                        <label class="form-label fs-6" for="name">Course Name</label>
                    </div>
                </div>
            </div>
        
            <div class="container gap-2 d-flex flex-column align-items-center overflow-auto" style="max-height: 30rem;">
                <h4>Course Schedules</h4>
                <?php 
                $counter = 1;
                if(mysqli_num_rows($schedQuery) > 0): ?>
                    <table class="table table-striped table-bordered w-100">
                            <thead class="fs-6">
                                <tr>
                                    <th>Section</th>
                                    <th>Class Size</th>
                                    <th>Faculty</th>
                                    <th>Room</th>
                                    <th>Days</th>
                                    <th>Time Start</th>
                                    <th>Time End</th>
                                </tr>
                            </thead>
                            <tbody>
                        <?php while($rows = $schedQuery -> fetch_assoc()):?>
                            <tr>
                                <td class="">
                                    <input type="text" class="form-control input" 
                                    name="schedRow[<?php echo $counter; ?>][section]" 
                                    value="<?php echo $rows['section']; ?>" readonly/>
                                </td>
                                <td class="">
                                    <?php echo $rows['studLimit']; ?>
                                </td>
                                <td class="">
                                    <?php echo $rows['professor']; ?>
                                </td>
                                <td class="">
                                    <?php echo $rows['rmAssign']; ?>
                                </td>
                                <td class="">
                                    <?php echo $rows['days']; ?>
                                </td>
                                <td class="text-center">
                                    <input  type="time" class="form-control input" name="schedRow[<?php echo $counter; ?>][timeIni]" maxlength="4" 
                                            min="00:00" max="24:00" value="<?php echo $rows['timeIni']; ?>"  required/>
                                </td>
                                <td class="text-center">
                                <input  type="time" class="form-control input" name="schedRow[<?php echo $counter; ?>][timeEnd]" maxlength="4" 
                                        min="00:00" max="24:00" value="<?php echo $rows['timeEnd']; ?>"  required/>       
                                </td>
                            </tr>
                        <?php $counter++; endwhile; ?>
                            </tbody>
                    </table>
                    <?php else: ?>
                    <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                        <h2 class="fs-3 text-white text-center"> No schedules yet! </h2>
                    </div>
                    <?php endif; ?>
                <div class="row">
                    <div class="form-floating">
                            <input type="text" class="form-control visually-hidden" 
                            value="<?php echo $rows['idSub'];?>" name="idSub" placeholder="idSub">
                    </div>
                    <button class="btn btn-success" type="submit" name="editSchedules">Edit Schedules</button>
                </div>
            </div>
        </div>
    </form>
<?php ?>