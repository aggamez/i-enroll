<?php
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from subject WHERE id = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <div class="container gap-2 d-flex flex-column">
            <div class="row">
                <div class="col-3">
                    <div class="form-floating">
                        <input type="text" id="code" name="code" class="form-control form-control-lg input"
                        placeholder="Code" value="<?php echo $row['code']?>" readonly />
                        <label class="form-label fs-6" for="scode">Subject Code</label>
                    </div>
                </div>
                <div class="col-9">
                    <div class="form-floating">
                        <input type="text" id="name" name="name" class="form-control form-control-lg input"
                        placeholder="Name" value="<?php echo $row['name']?>" readonly />
                        <label class="form-label fs-6" for="name">Subject Name</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <select class="form-select input" name="program" id="program" value="<?php echo $row['program']?>" disabled>
                            <option value="<?php echo $row['program']?>" selected disabled><?php echo $row['program']?></option>
                        </select>
                        <label for="program" class="form-label fs-6">Curriculum</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="form-floating">
                        <select class="form-select input" name="type" id="type" disabled>
                            <option value="<?php echo $row['type']?>" selected disabled><?php echo $row['type']?></option>
                        </select>
                        <label class="form-label fs-6" for="code">Subject Type</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating">
                        <select class="form-select input" name="year" id="year" disabled>
                            <option value="<?php echo $row['year']?>" selected disabled><?php echo $row['year']?></option>
                        </select>
                        <label class="form-label fs-6" for="code">Year Level</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating">
                        <select class="form-select input" name="semester" id="semester" disabled>
                            <option value="<?php echo $row['semester']?>" selected disabled><?php echo $row['semester']?></option>
                        </select>
                        <label class="form-label fs-6" for="code">Semester</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-floating">
                    <input type="text" class="form-control input" id="units" name="units" 
                    value="<?php echo $row['units']?>" readonly/>
                        <label for="program" class="form-label fs-6">Number of Units</label>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
            <div class="col-12">
                <div class="form-floating">
                <input type="text" class="form-control input" id="prerequisite" name="prerequisite" 
                value="<?php echo $row['prerequisite']?>" readonly/>
                    <label for="program" class="form-label fs-6">Pre-Requisite</label>
                </div>
            </div>
            <div class="col-12">
                <div class="form-floating">
                <input type="text" class="form-control input" id="corequisite" name="corequisite"
                value="<?php echo $row['corequisite']?>" readonly/>
                    <label for="program" class="form-label fs-6">Co-Requisite</label>
                </div>
            </div>
        </div>
<?php } ?>