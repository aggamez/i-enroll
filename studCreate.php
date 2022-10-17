<?php 

?>

<html>
    <head>
        <title> i-Enroll System </title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-maroon sticky-top px-4">
            <div class="container-fluid">
                <div class="d-flex flex- align-items-center">
                    <a class="navbar-brand" href="home.php"><img class="logo" src="assets/img/school-logo.png" alt=""></a>
                    <h1 class="fs-5 text-uppercase">Taguig City University</h1>
                </div>
                    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="enroll.php">Enroll Now!</a>
                            </li>
                        </ul>
                        <span class="navbar-text d-none">
                        </span>
                </div>
            </nav>

            <div class="bg text-white" style="background-image: url('assets/img/bg2.png');">
                <div class="bg-overlay d-flex justify-content-center align-items-center">
                    <div class="container p-2 p-lg-5 d-flex flex-column justify-content-center align-items-center bg-white rounded rounded-5 overflow-scroll">
                        <h1 class="text-dark fs-3 fs-lg-1">Student Register</h1>
                        <form
                                    class=""
                                    method="post" 
                                    action="functions/php/addStudent.php">
                            <div class="text-dark fs-4">
                                <div class="row py-2 gap-2 gap-lg-0">
                                    <div class="col-lg-4">
                                        <div class="form-floating">
                                            <input type="text" id="fName" name="fName" class="form-control form-control-lg input"
                                            placeholder="First Name" required />
                                            <label class="form-label fs-6" for="fName">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating">
                                            <input type="text" id="midName" name="mName" class="form-control form-control-lg input"
                                            placeholder="Middle Name" required />
                                            <label class="form-label fs-6" for="lastName">Middle Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating ">
                                            <input type="text" id="lName" name="lName" class="form-control form-control-lg input"
                                            placeholder="Last Name" required />
                                            <label class="form-label fs-6" for="lName">Last Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2 gap-2 gap-lg-0">
                                    <div class="col-lg-12">
                                        <div class="form-floating">
                                            <input type="text" id="address" name="address" class="form-control form-control-lg input"
                                            placeholder="First Name" required />
                                            <label class="form-label fs-6" for="address">Address</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2 gap-2 gap-lg-0">
                                    <div class="col-lg-4">
                                        <div class="form-floating">
                                            <div class="form-floating datepicker">
                                                <input type="date" class="form-control input" id="birthdate" name="birthdate" required/>
                                                <label for="birthdate" class="form-label fs-6">Birthday</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating">
                                            <select class="form-select input fs-6" name="sex" id="sex">
                                            <option selected disabled>Select Option</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="X">Prefer not to say</option>
                                            </select>
                                            <label for="sex" class="form-label fs-6">Sex</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating">
                                            <select class="form-select input fs-6" name="civStat" id="civStat">
                                                <option selected disabled>Select Option</option>
                                                <option value="S">Single</option>
                                                <option value="M">Married</option>
                                                <option value="X">Separated</option>
                                                <option value="W">Widowed</option>
                                            </select>
                                            <label for="civStat" class="form-label fs-6">Civil Status</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2 gap-2 gap-lg-0">
                                    <div class="col-lg-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control input" id="contactNo" name="contactNo" maxlength="11" required/>
                                            <label for="contactNo" class="form-label fs-6">Contact #</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control input" id="nationality" name="nationality" required/>
                                            <label for="nationality" class="form-label fs-6">Nationality</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control input" id="religion" name="religion" required/>
                                            <label for="religion" class="form-label fs-6">Religion</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row py-2 gap-2 gap-lg-0">
                                    <div class="col-lg-8">
                                        <div class="form-floating">
                                        <select class="form-select input" name="program" id="program">
                                            <option selected disabled>Select Program</option>
                                            <?php
                                            include('functions/php/config.php');
                                            
                                            $query = "SELECT * FROM curriculums WHERE id > 2;";
                                            $result = $con->query($query);

                                            while ($row = $result -> fetch_assoc()): ?>
                                            <option value="<?php echo $row['code']?>"><?php echo $row['name']?></option>

                                            <?php endwhile?>
                                        </select>
                                        <label for="program" class="form-label fs-6">Program</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating">
                                        <select class="form-select input" name="yrLvl" id="yrLvl">
                                            <option selected disabled>Year Level</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        <label for="yrLvl" class="form-label fs-6">Year Level</label>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row py-2 gap-2 gap-lg-0">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">My info is correct and would like to register.</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center sticky-bottom bg-dark">
                <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

</html>
