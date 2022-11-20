<!doctype html>
<html>
    <?php 
        session_start();
        if(empty($_SESSION['idAdmin'])){
            header("Location:adminLogin.php");
        }

        include('functions/php/config.php');
    ?>
    <head>
        <title>i-Enroll System</title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/css/bootstrap-icons-1.9.1/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>
        <script src="lib/js/jquery-3.6.1.min.js"></script>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-maroon sticky-top px-4">
            <div class="container-fluid">
                <div class="d-flex flex-row align-items-center">
                    <a class="navbar-brand" href="adminDash.php"><img class="logo" src="assets/img/school-logo.png" alt=""></a>
                    <h1 class="fs-5 text-uppercase">Taguig City University</h1>
                </div>
                <button class="navbar-toggler d-inline" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon text-white"></span>
                </button>
                <div class="offcanvas offcanvas-start w-lg-25 text-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header bg-maroon" style="min-height: 10vh; max-height: auto;">
                        <h5 class="offcanvas-title text-white fs-3" id="offcanvasNavbarLabel">Admin Dashboard</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    <ul class="h-100 navbar-nav d-flex flex-column justify-content-start flex-grow-1 pe-3 text-dark">

                            <li class="nav-item">
                                <a class="nav-link d-flex flex-row align-items-center text-dark gap-2" href="adminDash.php"> 
                                    <i class="bi bi-house-fill fs-4"></i> 
                                    <h6 class="fs-4">Dashboard</h6>
                                </a>
                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle fs-4 d-flex flex-row justify-content-end align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="d-flex flex-row justify-content-start align-items-center me-auto gap-2">
                                        <i class="bi bi-gear-fill"></i>
                                        <h6 class="fs-4 align-items-center">Management</h6>
                                    </div>
                                </a>

                                <ul class="dropdown-menu w-100 m-0">
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminDepartments.php">
                                        <i class="bi bi-list-columns-reverse"></i>Colleges / Departments</a></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminCurriculum.php">
                                        <i class="bi bi-list-ul"></i>Curriculums</a></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminSubjects.php">
                                        <i class="bi bi-list-columns-reverse"></i>Subjects</a></li>

                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminSections.php">
                                        <i class="bi bi-clipboard-fill"></i>Section Management</a></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminSchedules.php">
                                        <i class="bi bi-clipboard-fill"></i>Schedule Management</a></li>

                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminStudents.php">
                                        <i class="bi bi-file-earmark-person-fill"></i> Student Users</a></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2 active" href="adminEnrollments.php">
                                        <i class="bi bi-person-circle"></i> Enrollment Forms</a></li>
                                    
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2 " href="adminAccounts.php">
                                        <i class="bi bi-person-circle"></i> Admin Users</a></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminFaculty.php">
                                        <i class="bi bi-person-video3"></i> Faculty Users</a></li>

                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminLogs.php">
                                        <i class="bi bi-file-earmark-person-fill"></i> System Logs</a></li>
                                </ul>
                            </li>

                            <li class="nav-item mt-auto">
                                <a class="nav-link d-flex flex-row align-items-center text-dark gap-2 fs-4" aria-current="page" href="functions/php/adminOut.php"> 
                                    <i class="text-danger bi bi-box-arrow-right"></i>
                                    <h6 class="fs-4">Log-out</h6>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>          
        </nav>
            
            <div class="d-flex flex-column overflow-scroll py-2 px-5 gap" style="height: 85vh;">
                <div class="d-flex flex-column justify-content-center align-items-start">
                    <h1 class="fs-1 text-dark"> Enrollment Forms </h1>
                </div>

                <div class="d-flex flex-column justify-content-between
                            align-items-start gap-2 mt-5">
                    <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Forms List </h2>
                    </div>
                    <?php
                        include('functions/php/config.php');
                        
                        $query = "SELECT * FROM `user-student`";
                        $result = $con->query($query);

                        if(mysqli_num_rows($result) > 0): ?>
                            <table id="" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Student Name</th>
                                                <th>Program</th>
                                                <th>Year Enrolled</th>
                                                <th>Semester</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    
                    <?php while ($row = $result -> fetch_assoc()): 
                        $fulName = $row['fName'] . " " . $row['mName'] . " " . $row['lName'];
                        $idStud = $row['idStud'];
                        $squery = "SELECT * FROM `enroll-codes` WHERE `idStud` = '$idStud'";
                        $sresult = $con->query($squery);
                        while ($srow = $sresult -> fetch_assoc()):?>
                        <tr>
                            <td class=""><?php echo $fulName; ?></td>
                            <td class=""><?php echo $row['program']; ?></td>
                            <td class=""><?php echo $srow['year']; ?></td>
                            <td class=""><?php echo $srow['semester']; ?></td>
                            <td class="mx-auto text-center">
                                <form
                                    class=""
                                    target="_blank"
                                    method="post" 
                                    action="viewForm.php">
                                    <input type="text" id="enrollCode" name="enrollCode" class="form-control form-control-lg input visually-hidden"
                                                value="<?php echo $srow['enrollCode']; ?>" readonly />
                                    <a href="javascript:$('form').submit()" class="mx-1 clear text-muted view">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        <?php endwhile ?>
                    <?php endwhile ?>
                                        </tbody>
                        </table>
                    
                    <?php else:?>        
                        <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                            <h2 class="fs-3 text-white text-center"> No Forms yet </h2>
                        </div>

                    <?php endif ?>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center sticky-bottom bg-dark">
                <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

</html>
