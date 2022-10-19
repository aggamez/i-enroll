<?php
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from subject WHERE id = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <form   action="functions/php/editSubject.php" 
                method="post">
            <div class="container gap-2 d-flex flex-column">
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating">
                            <input type="text" id="code" name="code" class="form-control form-control-lg input"
                            placeholder="Code" value="<?php echo $row['code']?>"  />
                            <label class="form-label fs-6" for="scode">Subject Code</label>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="form-floating">
                            <input type="text" id="name" name="name" class="form-control form-control-lg input"
                            placeholder="Name" value="<?php echo $row['name']?>"  />
                            <label class="form-label fs-6" for="name">Subject Name</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-select input" name="program" id="program" >
                                <option selected disabled>Curriculum</option>
                                    <?php

                                    $queryb = "SELECT * FROM curriculums";
                                    $resultb = $con->query($queryb);

                                    while ($rowb = $resultb -> fetch_assoc()): ?>
                                    <option value="<?php echo $rowb['subCode']?>" <?php if($rowb['subCode'] == $row['program']) echo 'selected="selected"'; ?>><?php echo $rowb['name']?></option>

                                    <?php endwhile?>
                                </select>
                            <label for="program" class="form-label fs-6">Curriculum</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-floating">
                            <select class="form-select input" name="type" id="type" >
                                <option selected disabled>Type of Subject</option>
                                <option value="LEC" <?php if("LEC" == $row['type']) echo 'selected="selected"'; ?>>Lecture</option>
                                <option value="LAB" <?php if("LAB" == $row['type']) echo 'selected="selected"'; ?>>Laboratory</option>
                            </select>
                            <label class="form-label fs-6" for="code">Subject Type</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating">
                            <select class="form-select input" name="year" id="year" >
                                <option selected disabled>Year Level</option>
                                <option value="1" <?php if("1" == $row['year']) echo 'selected="selected"'; ?>>1</option>
                                <option value="2" <?php if("2" == $row['year']) echo 'selected="selected"'; ?>>2</option>
                                <option value="3" <?php if("3" == $row['year']) echo 'selected="selected"'; ?>>3</option>
                                <option value="4" <?php if("4" == $row['year']) echo 'selected="selected"'; ?>>4</option>
                            </select>
                            <label class="form-label fs-6" for="code">Year Level</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating">
                            <select class="form-select input" name="semester" id="semester" >
                                <option selected disabled>Semester</option>
                                <option value="1" <?php if("1" == $row['semester']) echo 'selected="selected"'; ?>>1</option>
                                <option value="2" <?php if("2" == $row['semester']) echo 'selected="selected"'; ?>>2</option>
                            </select>
                            <label class="form-label fs-6" for="code">Semester</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-floating">
                        <input type="text" class="form-control input" id="units" name="units" 
                        value="<?php echo $row['units']?>" />
                            <label for="program" class="form-label fs-6">Number of Units</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="col-12">
                    <div class="form-floating">
                    <input type="text" class="form-control input" id="prerequisite" name="prerequisite" 
                    value="<?php echo $row['prerequisite']?>" />
                        <label for="program" class="form-label fs-6">Pre-Requisite</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                    <input type="text" class="form-control input" id="corequisite" name="corequisite"
                    value="<?php echo $row['corequisite']?>" />
                        <label for="program" class="form-label fs-6">Co-Requisite</label>
                    </div>
                </div>
                <div class="row">
                    <div class="form-floating">
                        <input type="text" class="form-control visually-hidden" 
                        value="<?php echo $row['id']?>" name="id" placeholder="id">
                    </div>
                    <button class="btn btn-success" type="submit" name="editCurriculum">Edit Curriculum Data</button>
                </div>
            </div>

            
        </form>
<?php } ?>