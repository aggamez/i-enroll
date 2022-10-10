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
                    <div class="offcanvas-header bg-mar" style="min-height: 10vh; max-height: auto;">
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
            
            <div class="d-flex flex-column overflow-scroll py-2 px-5 gap" style="height: 85vh;">
                <div class="d-flex flex-column justify-content-center align-items-start">
                    <h1 class="fs-1 text-dark"> University Curriculums </h1>
                     
                </div>
                <div class="d-flex flex-column justify-content-between
                            align-items-start gap-2">
                    <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Curriculum </h2>
                        <a class="btn btn-success py-1 px-2 ms-auto" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-plus-circle"></i>
                        </a>
                    </div>
                    <div class="collapse w-100" id="collapseExample">
                        <div class="card card-body d-flex flex-column border border-dark">
                            <form   class=""
                                    method="post" 
                                    action="functions/php/addCurriculum.php">
                                <div class="container gap-2 d-flex flex-column">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="text" id="code" name="code" class="form-control form-control-lg input"
                                                placeholder="Code" required />
                                                <label class="form-label fs-6" for="code">Curriculum Code</label>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-floating">
                                                <input type="text" id="name" name="name" class="form-control form-control-lg input"
                                                placeholder="Name" required />
                                                <label class="form-label fs-6" for="name">Curriculum Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-2 ms-auto">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>

                <div class="d-flex flex-column justify-content-between
                            align-items-start gap-2 mt-5">
                    <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Curriculum List </h2>
                    </div>
                    <?php
                        include('functions/php/config.php');
                        
                        $query = "SELECT * FROM curriculums";
                        $result = $con->query($query);

                        if(mysqli_num_rows($result) > 0): ?>
                            <table id="" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Curriculum Code</th>
                                                <th>Curriculum Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    
                    <?php while ($row = $result -> fetch_assoc()): ?>
                        <tr>
                            <td class=""><?php echo $row['code']; ?></td>
                            <td class=""><?php echo $row['name']; ?></td>
                            <td class="mx-auto text-center">
                                <form   method="post" 
                                        action="functions/php/delCurriculum.php">
                                    <button type="submit" name="submit" class="mx-1 text-decoration-none text-danger border border-none delete" value="<?php echo $row['id']; ?>"
                                                        data-bs-toggle="modal" data-bs-target="#delCurr" id="<?php echo $row['id']; ?>">
                                        <i class="bi bi-trash-fill text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile ?>
                                        </tbody>
                        </table>
                    
                    <?php else:?>        
                        <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                            <h2 class="fs-3 text-white text-center"> No curriculums yet </h2>
                        </div>

                    <?php endif ?>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center sticky-bottom bg-dark">
                <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

</html>
