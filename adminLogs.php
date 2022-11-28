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

    <body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-maroon px-4">
            <div class="container-fluid">
                    <div class="d-flex flex-row align-items-center">
                        <a class="navbar-brand" href="home.php"><img class="logo" src="assets/img/school-logo.png" alt=""></a>
                        <h1 class="fs-5 text-uppercase">Taguig City University</h1>
                    </div>
                        
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="h-100 navbar-nav d-flex flex-column justify-content-start flex-grow-1 pe-3 text-white d-lg-none">
                            <li class="nav-item">
                                <a class="nav-link d-flex flex-row align-items-center text-white gap-2 active" href="adminDash.php"> 
                                    <i class="bi bi-house-fill fs-4"></i> 
                                    <h6 class="fs-4">Dashboard</h6>
                                </a>
                            </li>

                            <li class="nav-item">

                                <a 
                                class="nav-link text-white fs-4 d-flex flex-row justify-content-end 
                                align-items-center gap-2" 
                                href="#mobile-collapse" role="button" data-bs-toggle="collapse" 
                                aria-expanded="false">
                                    <div class="d-flex flex-row justify-content-start align-items-center me-auto gap-2">
                                        <i class="bi bi-gear-fill"></i>
                                        <h6 class="fs-4 align-items-center">Management</h6>
                                    </div>
                                </a>

                                <ul class="collapse w-100 m-0 gap-2 fs-5" id="mobile-collapse">
                                        <li class="">
                                            <a class="text-white text-decoration-none d-flex flex-row 
                                            align-items-center gap-2" href="adminDepartments.php">
                                            <i class="bi bi-list-columns-reverse"></i>Colleges / Departments</a>
                                        </li>
                                        <li class="text-white">
                                            <a class="text-white text-decoration-none d-flex flex-row 
                                            align-items-center gap-2" href="adminCurriculum.php">
                                            <i class="bi bi-list-ul"></i>Curriculums</a>
                                        </li>
                                        <li class="">
                                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSubjects.php">
                                            <i class="bi bi-list-columns-reverse"></i>Subjects</a>
                                        </li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSections.php">
                                            <i class="bi bi-clipboard-fill"></i>Section Management</a>
                                        </li>
                                        <li>
                                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSchedules.php">
                                            <i class="bi bi-clipboard-fill"></i>Schedule Management</a>
                                        </li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminStudents.php">
                                            <i class="bi bi-file-earmark-person-fill"></i> Student Users</a>
                                        </li>
                                        <li>
                                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminEnrollments.php">
                                            <i class="bi bi-person-circle"></i> Enrollment Forms</a>
                                        </li>
                                        
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2 " href="adminAccounts.php">
                                            <i class="bi bi-person-circle"></i> Admin Users</a>
                                        </li>
                                        <li>
                                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminFaculty.php">
                                            <i class="bi bi-person-video3"></i> Faculty Users</a>
                                        </li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>

                                        <li>
                                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminLogs.php">
                                            <i class="bi bi-file-earmark-person-fill"></i> System Logs</a>
                                        </li>
                                </ul>
                                </li>

                                <li class="nav-item mt-auto">
                                    <a class="nav-link d-flex flex-row align-items-center text-white gap-2 fs-4" aria-current="page" href="functions/php/adminOut.php"> 
                                        <i class="bi bi-box-arrow-right"></i>
                                        <h6 class="fs-4">Log-out</h6>
                                    </a>
                                </li>
                            </ul>
                        <span class="navbar-text d-none">
                        </span>
                    </div>
                </div>       
        </nav>
            
        <div class="content">
            <div class="h-100 d-flex flex-row">
                <div class="ps-3 bg-maroon d-none d-lg-block">
                    <div class="h-100 d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white" style="width: 365px;">
                    <ul class="navbar-nav d-flex flex-column justify-content-start flex-grow-1 pe-3 text-white fs-4">
                        <li class="nav-item">
                            <a class="nav-link d-flex flex-row align-items-center text-white gap-2 active" href="adminDash.php"> 
                                <i class="bi bi-house-fill fs-4"></i> 
                                <h6 class="fs-4">Dashboard</h6>
                            </a>
                        </li>

                        <li class="">
                            <a class="nav-item text-white text-decoration-none d-flex flex-row 
                            align-items-center gap-2" href="adminDepartments.php">
                            <i class="bi bi-list-columns-reverse"></i>Colleges / Departments</a>
                        </li>
                        <li class="">
                            <a class="nav-item text-white text-decoration-none d-flex flex-row 
                            align-items-center gap-2" href="adminCurriculum.php">
                            <i class="bi bi-list-ul"></i>Curriculums</a>
                        </li>
                        <li class="">
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSubjects.php">
                            <i class="bi bi-list-columns-reverse"></i>Subjects</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSections.php">
                            <i class="bi bi-clipboard-fill"></i>Section Management</a>
                        </li>
                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminSchedules.php">
                            <i class="bi bi-clipboard-fill"></i>Schedule Management</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminStudents.php">
                            <i class="bi bi-file-earmark-person-fill"></i> Student Users</a>
                        </li>
                        <li>
                            <a class="text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminEnrollments.php">
                            <i class="bi bi-person-circle"></i> Enrollment Forms</a>
                        </li>
                        
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2 " href="adminAccounts.php">
                            <i class="bi bi-person-circle"></i> Admin Users</a>
                        </li>
                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminFaculty.php">
                            <i class="bi bi-person-video3"></i> Faculty Users</a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="nav-item text-white text-decoration-none d-flex flex-row align-items-center gap-2" href="adminLogs.php">
                            <i class="bi bi-file-earmark-person-fill"></i> System Logs</a>
                        </li>

                            <li class="nav-item mt-auto">
                                <a class="nav-link d-flex flex-row align-items-center text-white gap-2 fs-4" aria-current="page" href="functions/php/adminOut.php"> 
                                    <i class="bi bi-box-arrow-right"></i>
                                    <h6 class="fs-4">Log-out</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-100 d-flex flex-column overflow-scroll p-3 px-lg-5" style="">
                <div class="d-flex flex-column justify-content-center align-items-start">
                    <h1 class="fs-1 text-dark"> System-Generated Logs </h1>
                </div>

                <div class="d-flex flex-column justify-content-between
                            align-items-start gap-2 mt-5 overflow-auto" style="max-height: 35rem;">
                    <?php
                        include('functions/php/config.php');
                        
                        $query = "SELECT * FROM logs";
                        $result = $con->query($query);

                        if(mysqli_num_rows($result) > 0): 
                        ?>
                            <table id="" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Date Performed</th>
                                                <th>Author</th>
                                                <th>Action</th>
                                                <th>Target</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    
                    <?php while ($row = $result -> fetch_assoc()): ?>
                        <tr>
                            <td class=""><?php echo $row['date']; ?></td>
                            <td class=""><?php echo $row['source']; ?></td>
                            <td class=""><?php echo $row['action']; ?></td>
                            <td class=""><?php echo $row['target']; ?></td>
                            <td class="mx-auto text-center">
                                <a href="#" class="mx-1 clear text-muted view" data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="modal" data-bs-target="#view-curr" id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                                        </tbody>
                        </table>
                    
                    <?php else:?>        
                        <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                            <h2 class="fs-3 text-white text-center"> No Logs yet </h2>
                        </div>

                    <?php endif ?>
                </div>
                </div>

            </div>
        </div>

        <div class="footer d-flex justify-content-center align-items-center bg-dark">
            <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
        </div>
    </body>

</html>
