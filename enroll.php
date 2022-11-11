
<!doctype html>
<html>

    <?php 

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
        <nav class="navbar navbar-expand-lg navbar-dark bg-maroon sticky-top px-4">
            <div class="container-fluid">
                <div class="d-flex flex-row align-items-center">
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
                            <a class="nav-link active" href="enroll.php">Enroll Now!</a>
                            </li>
                        </ul>
                        <span class="navbar-text d-none">
                        </span>
                    </div>
                </div>
            </nav>
            
            <div class="bg d-flex flex-column justify-content-center align-items-center gap-5" >
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 class="fs-1 text-dark"> Student Registration Portals </h1>
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3 gap-lg-5">
                        <a href="studNewCreate.php" class="btn btn-dark text-decoration-none ">
                            <div class="card bg-dark" style="height: 8rem; width: 10rem;">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                    <i class="bi bi-person-plus-fill fs-4"></i>
                                    <h5 class="text-success fs-5">New Student</h6>
                                </div>
                            </div>
                        </a>
                        
                        <a href="studOldCreate.php" class="btn btn-dark text-decoration-none ">
                            <div class="card bg-dark" style="height: 8rem; width: 10rem;">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                    <i class="bi bi-person-fill fs-4"></i>
                                    <h5 class="text-primary fs-5">Old Student</h6>
                                </div>
                            </div>
                        </a>

                        <a href="studLogin.php" class="btn btn-dark text-decoration-none ">
                            <div class="card bg-dark" style="height: 8rem; width: 10rem;">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                    <i class="bi bi-person-fill fs-4"></i>
                                    <h5 class="text-info fs-5">Enrollment Portal</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 class="fs-1 text-dark"> Portals </h1>
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3 gap-lg-5">
                        <a href="adminLogin.php" class="btn btn-dark text-decoration-none ">
                            <div class="card bg-dark" style="height: 8rem; width: 10rem;">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                    <i class="bi bi-person-plus-fill fs-4"></i>
                                    <h5 class="text-white fs-5">Administrator Portal</h6>
                                </div>
                            </div>
                        </a>
                        
                        <a href="facultyLogin.php" class="btn btn-dark text-decoration-none ">
                            <div class="card bg-dark" style="height: 8rem; width: 10rem;">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center text-white">
                                    <i class="bi bi-person-fill fs-4"></i>
                                    <h5 class="text-white fs-5">Faculty Portal</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center sticky-bottom bg-dark">
                <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

</html>
