<!doctype html>
<html>
    <?php 
        session_start();
        if(empty($_SESSION['studUser'])){
            header("Location:studLogin.php");
        }

        include('functions/php/config.php');

        $user = $_SESSION['studUser'];
        $enrollCode = $_SESSION['enrollCode'];

        $studQuery = $con -> query("SELECT * from `user-student` WHERE `username` = '$user'") or die($con -> error);
        $studData = $studQuery -> fetch_assoc();
    ?>

    <head>
        <title>i-Enroll System</title>
        
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <script src="lib/js/bootstrap.bundle.min.js"></script>

    </head>

    <body class="h-auto">
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
                        <a class="nav-link" href="functions/php/studOut.php">Change Credentials</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="functions/php/studOut.php">Log-out</a>
                        </li>
                    </ul>
                    <span class="navbar-text d-none">
                    </span>
                </div>
            </div>
        </nav>
            
        <div class="bg d-flex flex-column mt-auto p-3 gap-5 h-auto min-vh-lg-100 w-100 overflow-auto" style="margin-bottom: 5vh;">
            <h1 class="fs-1 text-dark"> Student Enrollment, Semester <?php echo $currSem ;?> </h1>  
            <div class="d-flex flex-column flex-lg-row justify-content-between w-100">
                <div class="container gap-2 d-flex flex-column w-75">
                    <div class="h-auto border border-dark p-2">
                        <div class="row">
                            <div class="col-12">
                                <h5><b>Name:</b> <?php echo $studData['fName'] . " " . $studData['mName'] . " " . $studData['lName'];?></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h5><b>Program: </b> <?php 
                                    
                                    $code = $studData['program'];
                                    $progQuery= $con -> query("SELECT `name` from `curriculums` WHERE `code` = '$code'") or die($con -> error);
                                    $progData = $progQuery -> fetch_assoc();

                                    echo $progData['name'];
                                ?></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <h5><b>Year Registered:</b> <?php echo $studData['yrReg'];?></h5>
                            </div>
                            <div class="col-4">
                                <h5><b>Year Level:</b> <?php echo $studData['yrLvl'];?></h5>
                            </div>
                            <div class="col-4">
                                <h5><b>Year Standing:</b> <?php echo $studData['yrStd'];?></h5>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="container gap-2 d-flex flex-column w-25">
                    <?php
                    for ($yr = 1; $yr <= 4; $yr++) {
                        for ($sem = 1; $sem <= 2; $sem++) { 
                            $yrW = convertNumberToWord($yr);
                            $semW = convertNumberToWord($sem);


                            $divId = $yrW . $semW;
                            $divId = preg_replace('/\s+/', '', $divId);
                            $divHref = "#" . $yrW . $semW;
                            $divHref = preg_replace('/\s+/', '', $divHref);
                            ?>
                            <div class="bg-gray w-auto">
                                <div class="bg-dark">
                                    <a  class=  "nav-link dropdown-toggle fs-2 d-flex flex-row justify-content-end 
                                                align-items-center gap-2 text-white w-100" 
                                        data-bs-toggle="collapse" 
                                        href="<?php echo $divHref?>" role="button" aria-expanded="true"
                                        aria-controls="<?php echo $divId?>">
                                        <div class="d-flex flex-row justify-content-start align-items-center me-auto w-100 gap-2">
                                            <h6 class="fs-3 align-items-center">Year <?php echo $yr?>, Semester <?php echo $sem?></h6>
                                        </div>
                                    </a>
                                </div>
                            
                                    <div class="collapse" id="<?php echo $divId?>">
                                        <?php
                                            $querys = "SELECT * FROM subject WHERE `year` = '$yr' AND `semester` = '$sem'";
                                            $results = $con->query($querys);
                                            
                                            if(mysqli_num_rows($results) > 0): ?>
                                            <table class="table table-striped table-bordered w-100 fs-6">
                                                <thead>
                                                    <tr>
                                                        <th>Subject ID</th>
                                                        <th class="text-center">Units</th>
                                                        <th>Pre-Requisites</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($rows = $results -> fetch_assoc()): ?>
                                                        <tr>
                                                            <td class=""><?php echo $rows['idSub']; ?></td>
                                                            <td class="fw-bold text-center"><?php echo $rows['unitTot']; ?></td>
                                                            <td class=""><?php echo $rows['prerequisite']; ?></td>
                                                            
                                                            <?php
                                                                $subCode = $rows['idSub'];
                                                                $schedQuery = "SELECT * FROM `schedule` WHERE `idSub` = '$subCode'";
                                                                $schedRes = $con->query($schedQuery);
                                                                if(mysqli_num_rows($schedRes) > 0): //check for schedules ?>
                                                                    <td class="fs-6"> <a class="fs-6 text-primary text-decoration-none"> <i class="bi bi-plus-circle"></i> Add </a> </td> 
                                                                <?php else: ?>
                                                                    <td class="fs-6"> <a class="fs-6 text-danger text-decoration-none"> <i class="bi bi-slash-circle"></i> Unavailable </a> </td> 
                                                                <?php endif; ?>
                                                        </tr>
                                                    <?php endwhile ?>
                                                </tbody>
                                            </table>
                                        <?php endif ?>
                                    </div>
                            </div>
                    <?php } }?>
                </div>

            </div>
        </div>

        <div class="footer d-flex justify-content-center align-items-center fixed-bottom bg-dark mt-auto">
            <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
        </div>
    </body>

</html>
