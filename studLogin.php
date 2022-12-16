<!doctype html>
<html>
    <?php 
        session_start();
        include('functions/php/config.php');
    ?>
    <head>
        <title> i-Enroll System </title>
        
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
                        </ul>
                        <span class="navbar-text d-none">
                        </span>
                    </div>
                </div>
            </nav>

            <div class="bg min-vh-100 vw-100 text-white d-flex flex-column justify-content-center align-items-center" style="background-image: url('assets/img/bg2.png');">
                <div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center">
                    <div class="container w-100 w-lg-25 p-5 p-lg-10 d-flex flex-column justify-content-center align-items-center bg-white rounded rounded-5 opacity-25">
                        <h1 class="text-dark fs-3 fs-lg-1">Student Log-in</h1>
                        <hr class="text-dark border border-dark border-1 w-80 fs-1">
                        <div>
                        <form       class="text-dark gap-3"
                                    method="post" 
                                    action="functions/php/studLog.php">

                            <div class="mb-3">
                                <label for="username" class="form-label text-dark fs-2">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label text-dark fs-2">Password</label>
                                <div class="input-group" id="apassword">
                                    <input type="password" class="form-control" name="password" id="password">
                                    <div class="input-group-text text-black">
                                        <a href="" class="text-dark"><i class="bi bi-eye-fill" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label fs-5" for="exampleCheck1">Verify Log-in</label>
                            </div>
                            <div class="alert alert-danger border border-danger border-end-0 border-top-0 border-bottom-0 border-4" role="danger">
                                <p class="fs-6 text-dark p-0 m-0"><i class="bi bi-exclamation-octagon">
                                </i> Never share your password irresponsibly!</p>
                            </div>
                            <div class="d-flex flex-column text-center gap-2">
                                <a href="forgotPass.php" class="text-decoration-none text-danger fs-5">Forgot Password?</a>
                                <button type="submit" class="btn btn-primary w-auto">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer d-flex justify-content-center align-items-center fixed-bottom bg-dark mt-auto">
                <h1 class="text-white fs-6"> ©2022 Taguig City University. All Rights Reserved.</h1>
            </div>
    </body>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#apassword a").on('click', function(event) {
                event.preventDefault();
                if($('#apassword input').attr("type") == "text"){
                    $('#apassword input').attr('type', 'password');
                    $('#apassword i').addClass( "bi bi-eye-slash-fill" );
                    $('#apassword i').removeClass( "fa-eye" );
                }else if($('#apassword input').attr("type") == "password"){
                    $('#apassword input').attr('type', 'text');
                    $('#apassword i').removeClass( "bi bi-eye-slash-fill" );
                    $('#apassword i').addClass( "bi bi-eye-fill" );
                }
            });
        });
    </script>

</html>
