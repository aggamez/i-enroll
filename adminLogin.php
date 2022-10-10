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
                <div class="d-flex flex-row align-items-center">
                    <a class="navbar-brand" href="home.php"><img class="logo" src="assets/img/school-logo.png" alt=""></a>
                    <h1 class="fs-5 text-uppercase">Taguig City University</h1>
                </div>
            </nav>

            <div class="bg text-white" style="background-image: url('assets/img/bg2.png');">
                <div class="bg-overlay d-flex justify-content-center align-items-center">
                    <div class="container-fluid w-auto w-lg-50 p-5 p-lg-10 d-flex flex-column justify-content-center align-items-center bg-white rounded rounded-5 opacity-25">
                        <h1 class="text-dark fs-2">Admin Log-in</h1>
                        <hr class="text-dark border border-dark border-1 w-80 fs-1">
                        <div>
                        <form class="d-grid text-dark">
                            <div class="mb-3">
                                <label for="username" class="form-label text-dark fs-2">Username</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-dark fs-2">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="mb-3 form-check d-flex justify-content-center align-items-center gap-3">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label text-dark fs-4" for="exampleCheck1">Verify log-in</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center sticky-bottom bg-dark">
                <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

</html>
