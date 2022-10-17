<!doctype html>
<html>
    <?php 
        include('functions/php/config.php');
    ?>

    <head>
        <title>i-Enroll System</title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>

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
                        <ul class="navbar-nav flex-column justify-content-end flex-grow-1 pe-3 text-dark">
                            <li class="nav-item">
                                <a class="nav-link active d-flex flex-row align-items-center text-dark gap-2" aria-current="page" href="adminDash.php"> 
                                    <i class="bi bi-house-fill fs-4"></i> 
                                    <h6 class="fs-4">Dashboard</h6>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Management
                                </a>
                                <ul class="dropdown-menu w-100 m-0">
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminCurriculum.php"><i class="bi bi-list-ul"></i>Curriculum</a></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminSubjects.php"><i class="bi bi-list-columns-reverse"></i>Subjects</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminUsers.php"><i class="bi bi-person-circle"></i> Admin Users</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>          
        </nav>
            
            <div class="bg d-flex flex-row justify-content-center align-items-center" style="">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 class="fs-1 text-dark"> Admin Dashboard </h1>  
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center sticky-bottom bg-dark">
                <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

</html>
