<?php
    session_start();
    include "config.php";
    $id = $_POST['uid'];


    $query = $con -> query("SELECT * from `user-student` WHERE id = '$id'") or die($con -> error);
    while($row = $query -> fetch_assoc()) { 
        ?>
        <form 
            action="functions/php/editStudent.php" 
            method="post">
            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-4">
                    <div class="form-floating">
                        <input type="text" id="fName" name="fName" class="form-control form-control-lg input"
                        placeholder="First Name" value="<?php echo $row['fName']?>"  />
                        <label class="form-label fs-6" for="fName">First Name</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating">
                        <input type="text" id="midName" name="mName" class="form-control form-control-lg input"
                        placeholder="Middle Name" value="<?php echo $row['mName']?>"  />
                        <label class="form-label fs-6" for="lastName">Middle Name</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating ">
                        <input type="text" id="lName" name="lName" class="form-control form-control-lg input"
                        placeholder="Last Name" value="<?php echo $row['lName']?>"  />
                        <label class="form-label fs-6" for="lName">Last Name</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" id="address" name="address" class="form-control form-control-lg input"
                        placeholder="Address" value="<?php echo $row['address']?>"  />
                        <label class="form-label fs-6" for="address">Address</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-4">
                    <div class="form-floating">
                        <div class="form-floating datepicker">
                            <input type="date" class="form-control input" id="birthdate" name="birthdate" value="<?php echo $row['birthdate']?>" />
                            <label for="birthdate" class="form-label fs-6">Birthday</label>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating">
                        <select class="form-select input fs-6" name="sex" id="sex" >
                        <option selected disabled>Select Option</option>
                        <option value="M" <?php if("M" == $row['sex']) echo 'selected="selected"'; ?>>Male</option>
                        <option value="F" <?php if("F" == $row['sex']) echo 'selected="selected"'; ?>>Female</option>
                        <option value="X" <?php if("X" == $row['sex']) echo 'selected="selected"'; ?>>Prefer not to say</option>
                        </select>
                        <label for="sex" class="form-label fs-6">Sex</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating">
                        <select class="form-select input fs-6" name="civStat" id="civStat" >
                            <option selected disabled>Select Option</option>
                            <option value="S" <?php if("S" == $row['civStat']) echo 'selected="selected"'; ?>>Single</option>
                            <option value="M" <?php if("M" == $row['civStat']) echo 'selected="selected"'; ?>>Married</option>
                            <option value="X" <?php if("X" == $row['civStat']) echo 'selected="selected"'; ?>>Separated</option>
                            <option value="W" <?php if("W" == $row['civStat']) echo 'selected="selected"'; ?>>Widowed</option>
                        </select>
                        <label for="civStat" class="form-label fs-6">Civil Status</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-4">
                    <div class="form-floating">
                        <input type="text" class="form-control input" id="contactNo" name="contactNo" maxlength="11" value="<?php echo $row['contactNo']?>" />
                        <label for="contactNo" class="form-label fs-6">Contact #</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating">
                        <input type="text" class="form-control input" id="nationality" name="nationality" value="<?php echo $row['nationality']?>" />
                        <label for="nationality" class="form-label fs-6">Nationality</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating">
                        <input type="text" class="form-control input" id="religion" name="religion" value="<?php echo $row['religion']?>" />
                        <label for="religion" class="form-label fs-6">Religion</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-8">
                    <div class="form-floating">
                    <select class="form-select input" name="program" id="program" >
                        <option selected disabled>Select Program</option>
                        <?php
                        include('functions/php/config.php');
                        
                        $queryb = "SELECT * FROM curriculums WHERE id > 2;";
                        $resultb = $con->query($queryb);

                        while ($rowb = $resultb -> fetch_assoc()): ?>
                        <option value="<?php echo $rowb['code']?>" <?php if($rowb['code'] == $row['program']) echo 'selected="selected"'; ?>><?php echo $rowb['name']?></option>

                        <?php endwhile?>
                    </select>
                    <label for="program" class="form-label fs-6">Program</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-floating">
                    <select class="form-select input" name="yrLvl" id="yrLvl" >
                    <option selected disabled>Year Level</option>
                    <option value="1" <?php if("1" == $row['yrLvl']) echo 'selected="selected"'; ?>>1</option>
                    <option value="2" <?php if("2" == $row['yrLvl']) echo 'selected="selected"'; ?>>2</option>
                    <option value="3" <?php if("3" == $row['yrLvl']) echo 'selected="selected"'; ?>>3</option>
                    <option value="4" <?php if("4" == $row['yrLvl']) echo 'selected="selected"'; ?>>4</option>
                    </select>
                    <label for="yrLvl" class="form-label fs-6">Year Level</label>
                    </div>
                </div>
            </div>

            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-6">
                    <div class="form-floating">
                        <input type="text" id="username" name="username" class="form-control form-control-lg input"
                        placeholder="Username" value="<?php echo $row['username']?>"  />
                        <label class="form-label fs-6" for="username">Username</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input type="password" id="pasword" name="password" class="form-control form-control-lg input"
                        placeholder="password" value="<?php echo $row['password']?>"  />
                        <label class="form-label fs-6" for="password">Password</label>
                    </div>
                </div>
            </div>
            <div class="row py-2 gap-2 gap-lg-0">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" id="email" name="email" class="form-control form-control-lg input"
                        placeholder="Email" value="<?php echo $row['email']?>" />
                        <label class="form-label fs-6" for="email">Email</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-floating">
                        <input type="text" class="form-control visually-hidden" 
                        value="<?php echo $row['id']?>" name="id" placeholder="id">
                </div>
                <button class="btn btn-success" type="submit" name="editStudent">Edit Student Data</button>
            </div>
        </form>
<?php } ?>