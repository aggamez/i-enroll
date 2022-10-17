<?php
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from curriculums WHERE id = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <div class="container gap-2 d-flex flex-column">
            <div class="row">
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" id="code" name="code" class="form-control form-control-lg input"
                                placeholder="Code" value="<?php echo $row['code']?>" readonly />
                        <label class="form-label fs-6" for="code">Curriculum Code</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" id="code" name="code" class="form-control form-control-lg input"
                            placeholder="Code" value="<?php echo $row['subCode']?>" readonly/>
                            <label class="form-label fs-6" for="code">Subject Code</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" id="name" name="name" class="form-control form-control-lg input"
                            placeholder="Name" value="<?php echo $row['name']?>" readonly />
                        <label class="form-label fs-6" for="name">Curriculum Name</label>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>