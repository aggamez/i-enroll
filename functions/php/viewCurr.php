<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from curriculums WHERE id = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { ?>
        <div class="container gap-2 d-flex flex-column">
            <div class="row">
                <div class="col-3">
                    <div class="form-floating">
                        <input type="text" id="code" name="code" class="form-control form-control-lg input"
                                placeholder="Code" value="<?php echo $row['code']?>" readonly />
                        <label class="form-label fs-6" for="code">Curriculum Code</label>
                    </div>
                </div>
                <div class="col-9">
                    <div class="form-floating">
                        <input type="text" id="name" name="name" class="form-control form-control-lg input"
                            placeholder="Name" value="<?php echo $row['name']?>" readonly />
                        <label class="form-label fs-6" for="name">Curriculum Name</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="container gap-2 d-flex flex-column align-items-center overflow-auto" style="max-height: 30rem;">
            <h4>Curriculum Template</h4>
            <?php
                for ($yr = 1; $yr <= 4; $yr++) {
                    for ($sem = 1; $sem <= 2; $sem++) { ?>
                        <h4>Year <?php echo $yr?>, Semester <?php echo $sem?></h4>
                        <?php
                            $querys = "SELECT * FROM subject WHERE `year` = '$yr' AND `semester` = '$sem'";
                            $results = $con->query($querys);

                            if(mysqli_num_rows($results) > 0): ?>
                            <table class="table table-striped table-bordered w-100">
                                <thead class="fs-6">
                                    <tr>
                                        <th>Subject ID</th>
                                        <th>Subject Name</th>
                                        <th>Curriculum</th>
                                        <th>Units (Lec)</th>
                                        <th>Units (Lab)</th>
                                        <th>Total Units</th>
                                        <th>Pre-Requisites</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                    <?php while ($rows = $results -> fetch_assoc()): ?>
                        <tr>
                            <td class=""><?php echo $rows['idSub']; ?></td>
                            <td class=""><?php echo $rows['name']; ?></td>
                            <td class=""><?php echo $rows['program']; ?></td>
                            <td class="text-center"><?php echo $rows['unitLec']; ?></td>
                            <td class="text-center"><?php echo $rows['unitLab']; ?></td>
                            <td class="fw-bold text-center"><?php echo $rows['unitTot']; ?></td>
                            <td class=""><?php echo $rows['prerequisite']; ?></td>
                        </tr>
                    <?php endwhile ?>
                        </tbody>
                    </table>
                <?php endif ?>
            
            <?php } }?>
            
        </div>
<?php } ?>