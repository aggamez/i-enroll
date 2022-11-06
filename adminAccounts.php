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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
                                <a class="nav-link active d-flex flex-row align-items-center text-dark gap-2" aria-current="page" href="adminDash.php"> 
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
                                    <li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminCurriculum.php">
                                        <i class="bi bi-list-ul"></i>Curriculum</a></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminSubjects.php">
                                        <i class="bi bi-list-columns-reverse"></i>Subjects</a></li>

                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminSchedules.php">
                                        <i class="bi bi-clipboard-fill"></i>Schedule Management</a></li>

                                    <li><hr class="dropdown-divider"></li>

                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminAccounts.php">
                                        <i class="bi bi-person-circle"></i> Admin Users</a></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminStudents.php">
                                        <i class="bi bi-file-earmark-person-fill"></i> Student Users</a></li>
                                    <li><a class="dropdown-item d-flex flex-row align-items-center gap-2" href="adminFaculty.php">
                                        <i class="bi bi-person-video3"></i> Faculty Users</a></li>
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
                    <h1 class="fs-1 text-dark"> University Admins </h1>
                     
                </div>
                <div class="d-flex flex-column justify-content-between
                            align-items-start gap-2">
                    <div class="w-100 d-flex flex-row justify-content-start align-items-start pb-0 border-bottom border-3 border-dark">
                        <h2 class="fs-3 text-dark"> Add Admin </h2>
                        <a class="btn btn-success py-1 px-2 ms-auto" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bi bi-plus-circle"></i>
                        </a>
                    </div>
                    <div class="collapse w-100" id="collapseExample">
                        <div class="card card-body d-flex flex-column border border-dark">
                            <form   class=""
                                    method="post" 
                                    action="functions/php/addAdmin.php">
                                <div class="container gap-2 d-flex flex-column">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="text" id="fName" name="fName" class="form-control form-control-lg input"
                                                placeholder="First Name" required />
                                                <label class="form-label fs-6" for="fName">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating">
                                                <input type="text" id="mName" name="mName" class="form-control form-control-lg input"
                                                placeholder="Middle Name" required />
                                                <label class="form-label fs-6" for="lastName">Middle Name</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-floating ">
                                                <input type="text" id="lName" name="lName" class="form-control form-control-lg input"
                                                placeholder="Last Name" required />
                                                <label class="form-label fs-6" for="lName">Last Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row py-2 gap-2 gap-lg-0">
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" id="username" name="username" class="form-control form-control-lg input"
                                                placeholder="username" required />
                                                <label class="form-label fs-6" for="username">Username</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="password" id="password" name="password" class="form-control form-control-lg input"
                                                placeholder="password" required />
                                                <label class="form-label fs-6" for="Password">Password</label>
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
                        <h2 class="fs-3 text-dark"> Admins List </h2>
                    </div>
                    <?php
                        include('functions/php/config.php');
                        
                        $query = "SELECT * FROM `user-admin`";
                        $result = $con->query($query);


                        if(mysqli_num_rows($result) > 0): ?>
                            <table id="" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                    
                    <?php while ($row = $result -> fetch_assoc()): 
                        
                        $fullName = $row['fName'] . ' ' . substr($row['mName'],0,1) . ' ' . $row['lName'];
                        
                        ?>
                        <tr>
                            <td class=""><?php echo $fullName; ?></td>
                            <td class="mx-auto text-center">
                                <a href="#" class="mx-1 clear text-muted view" data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="modal" data-bs-target="#view-ad" id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="#" class="mx-1 clear text-primary edit" data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="modal" data-bs-target="#edit-ad" id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="mx-1 clear text-danger delete" data-id="<?php echo $row['id']; ?>"
                                    data-bs-toggle="modal" data-bs-target="#del-ad" id="<?php echo $row['id']; ?>">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                        </tbody>
                    </table>
                    
                    <?php else:?>        
                        <div class="w-100 card card-body d-flex flex-column border border-dark bg-danger">
                            <h2 class="fs-3 text-white text-center"> No admins yet! </h2>
                        </div>

                    <?php endif ?>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center sticky-bottom bg-dark">
                <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>

            <div class="modal fade" id="view-ad" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">View Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="edit-ad" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="del-ad" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('.view').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/viewAd.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#view-ad').modal('show');
                            }
                        });
                    });

                    $('.edit').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/editAd.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#edit-ad').modal('show');
                            }
                        });
                    });

                    $('.delete').click(function() {
                        var uid = $(this).data('id');
                        $.ajax({
                            url: 'functions/php/delAd.php',
                            type: 'post',
                            data: {uid: uid},
                            success: function(response){
                                $('.modal-body').html(response);
                                $('#del-ad').modal('show');
                            }
                        });
                    });
                });
            </script>
    </body>

</html>
