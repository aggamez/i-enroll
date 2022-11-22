<?php
    session_start();
    include "config.php";
    $id = $_POST['uid']; ?>
        <form 
            action="functions/php/changePassword.php" 
            method="post">
            <div class="container gap-2 d-flex flex-column">
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating">
                            <input type="text" name="id" class="form-control form-control-lg input"
                            placeholder="ID Number" value="<?php echo $id?>" readonly/>
                            <label class="form-label fs-6" for="id">ID</label>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-floating">
                            <input type="pass" id="oldPass" name="oldPass" class="form-control form-control-lg input"
                            placeholder="Old Password"/>
                            <label class="form-label fs-6" for="oldPass">Old Password</label>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-floating">
                            <input type="pass" id="newPass" name="newPass" class="form-control form-control-lg input"
                            placeholder="New Password"/>
                            <label class="form-label fs-6" for="lastName">newPass</label>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Change Password</button>
                </div>
            </div>
        </form>
