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
        <script src="functions/js/formValidate.js"></script>

    </head>

    <body class="vw-100">
        <div class="patt d-flex flex-column align-items-center justify-content-center mt-5 w-100 gap-3">
            <div class="d-flex flex-column align-items-center justify-content-center border border-dark border w-75 py-3 rounded rounded-2">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h1 class="maroon fs-1 text-center text-capitalize">EVALUATION FORM</h1>
                    <h2 class="fs-4 text-center">   TCU Reg: DEVELOPMENT OF WEB BASED ONLINE ENROLLMENT 
                    <br class="d-none d-lg-inline"> MANAGEMENT SYSTEM FOR TAGUIG CITY UNIVERSITY 
                                                    USING REGRESSION ALGORITHM.</h2>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center bg-maroon p-3 rounded rounded-2 w-75 w-lg-50 text-white">
                    <h4 class="fs-4 text-center">Data Privacy Consent</h4>
                    <p class="fs-5 text-center">
                        By entering your information in this survey, you are agreeing your data entered 
                        is used only for academic purposes. Any personal data will not be used outside 
                        of the scope stated above. Any misuse of data shall be reported immediately.
                    </p>
                </div>
            </div>
            
            <div class="d-flex flex-column align-items-center justify-content-center border border-dark border w-75 py-3 rounded rounded-2">
                <form 
                    class="w-100 "
                    name="evaluateForm"
                    onsubmit="return validateForm()"
                    method="post" 
                    enctype="multipart/form-data"
                    action="functions/php/addEvaluation.php">

                    <div class="text-dark fs-4 px-2">
                        <div class="row py-2 gap-2 gap-lg-0">
                            <div class="col-lg-12">
                                <div class="form-floating">
                                    <input type="text" id="formText" name="name" class="form-control form-control-lg input"
                                    placeholder="Full Name" required />
                                    <label class="form-label fs-6" for="name">Full Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row py-2 gap-2 gap-lg-0">
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control input" id="yrLvl" name="yrLvl" maxlength="1" 
                                            min="1" max="4" step="1" value="1"/>
                                    <label for="yrLevel" class="form-label fs-6">Year Level</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating">
                                    <input type="text" id="formText" name="section" class="form-control form-control-lg input"
                                    placeholder="Section" required />
                                    <label class="form-label fs-6" for="section">Section</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column align-items-center justify-content-center">
                        <p>
                            Using the scale provided, evaluate the online enrollment system by checking the 
                            corresponding column.
                        </p>
                        <ul class="d-flex flex-column flex-lg-row fw-bold fs-6 gap-2 gap-lg-5">
                            <li class="list-group-item border border-0">1 - Excellent</li>
                            <li class="list-group-item border border-0">2 - Very Good</li>
                            <li class="list-group-item border border-0">3 - Satisfactory</li>
                            <li class="list-group-item border border-0">4 - Fair</li>
                            <li class="list-group-item border border-0">5 - Poor</li>
                        </ul>
                        </div>
                    </div>

                    <div class="px-3 d-flex flex-column gap-2">
                        <h6 class="fs-4">1.1: FUNCTIONAL SUITABILITY</h6>
                        <div class="d-flex flex-column align-items-center justify-content-center">

                            <p>The system performs as expected as an enrollment system.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[1][1]" id="evalRow[1][1][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][1][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[1][1]" id="evalRow[1][1][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][1][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[1][1]" id="evalRow[1][1][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][1][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[1][1]" id="evalRow[1][1][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][1][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[1][1]" id="evalRow[1][1][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][1][btnradio5]">5</label>
                            </div>

                            <p>The system prohibits unauthorized access.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[1][2]" id="evalRow[1][2][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][2][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[1][2]" id="evalRow[1][2][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][2][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[1][2]" id="evalRow[1][2][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][2][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[1][2]" id="evalRow[1][2][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][2][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[1][2]" id="evalRow[1][2][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][2][btnradio5]">5</label>
                            </div>

                            <p>The system is able to register students and enroll them in the right courses.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[1][3]" id="evalRow[1][3][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][3][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[1][3]" id="evalRow[1][3][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][3][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[1][3]" id="evalRow[1][3][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][3][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[1][3]" id="evalRow[1][3][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][3][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[1][3]" id="evalRow[1][3][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][3][btnradio5]">5</label>
                            </div>

                            <p>The login page is already operating properly.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[1][4]" id="evalRow[1][4][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][4][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[1][4]" id="evalRow[1][4][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][4][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[1][4]" id="evalRow[1][4][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][4][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[1][4]" id="evalRow[1][4][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][4][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[1][4]" id="evalRow[1][4][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][4][btnradio5]">5</label>
                            </div>

                            <p>The user/new student candidate data input function has been running well.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[1][5]" id="evalRow[1][5][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][5][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[1][5]" id="evalRow[1][5][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][5][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[1][5]" id="evalRow[1][5][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][5][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[1][5]" id="evalRow[1][5][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][5][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[1][5]" id="evalRow[1][5][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[1][5][btnradio5]">5</label>
                            </div>

                        </div>

                        <h6 class="fs-4">1.2: RELIABILITY</h6>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <p>The system can provide or display copies of grade reports.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[2][1]" id="evalRow[2][1][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][1][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[2][1]" id="evalRow[2][1][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][1][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[2][1]" id="evalRow[2][1][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][1][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[2][1]" id="evalRow[2][1][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][1][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[2][1]" id="evalRow[2][1][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][1][btnradio5]">5</label>
                            </div>
                            <p>If an error occurs while using the system, it is possible for the system to return to normal functioning.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[2][2]" id="evalRow[2][2][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][2][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[2][2]" id="evalRow[2][2][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][2][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[2][2]" id="evalRow[2][2][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][2][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[2][2]" id="evalRow[2][2][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][2][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[2][2]" id="evalRow[2][2][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][2][btnradio5]">5</label>
                            </div>
                            <p>The e-office system can be accessed at any time.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[2][3]" id="evalRow[2][3][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][3][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[2][3]" id="evalRow[2][3][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][3][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[2][3]" id="evalRow[2][3][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][3][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[2][3]" id="evalRow[2][3][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][3][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[2][3]" id="evalRow[2][3][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][3][btnradio5]">5</label>
                            </div>
                            <p>The system is accessible when needed.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[2][4]" id="evalRow[2][4][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][4][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[2][4]" id="evalRow[2][4][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][4][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[2][4]" id="evalRow[2][4][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][4][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[2][4]" id="evalRow[2][4][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][4][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[2][4]" id="evalRow[2][4][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[2][4][btnradio5]">5</label>
                            </div>
                        </div>

                        <h6 class="fs-4">1.3: USABILITY</h6>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <p>The system is simple to understand.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[3][1]" id="evalRow[3][1][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][1][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[3][1]" id="evalRow[3][1][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][1][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[3][1]" id="evalRow[3][1][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][1][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[3][1]" id="evalRow[3][1][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][1][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[3][1]" id="evalRow[3][1][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][1][btnradio5]">5</label>
                            </div>
                            <p>Different users (e.g., beginner, professional) can quickly master the system.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[3][2]" id="evalRow[3][2][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][2][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[3][2]" id="evalRow[3][2][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][2][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[3][2]" id="evalRow[3][2][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][2][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[3][2]" id="evalRow[3][2][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][2][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[3][2]" id="evalRow[3][2][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][2][btnradio5]">5</label>
                            </div>
                            <p>The system is accessible through a variety of web browsers, including Microsoft Edge, Google Chrome, and Mozilla Firefox.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[3][3]" id="evalRow[3][3][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][3][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[3][3]" id="evalRow[3][3][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][3][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[3][3]" id="evalRow[3][3][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][3][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[3][3]" id="evalRow[3][3][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][3][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[3][3]" id="evalRow[3][3][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[3][3][btnradio5]">5</label>
                            </div>
                        
                        </div>

                        <h6 class="fs-4">1.4: EFFICIENCY</h6>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <p>When accessing different system functionalities, the device does not "hang" or "lag."</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[4][1]" id="evalRow[4][1][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][1][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[4][1]" id="evalRow[4][1][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][1][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[4][1]" id="evalRow[4][1][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][1][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[4][1]" id="evalRow[4][1][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][1][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[4][1]" id="evalRow[4][1][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][1][btnradio5]">5</label>
                            </div>
                            <p>The system can generate easily.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[4][2]" id="evalRow[4][2][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][2][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[4][2]" id="evalRow[4][2][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][2][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[4][2]" id="evalRow[4][2][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][2][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[4][2]" id="evalRow[4][2][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][2][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[4][2]" id="evalRow[4][2][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][2][btnradio5]">5</label>
                            </div>
                            <p>The system is responsive to all device</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[4][3]" id="evalRow[4][3][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][3][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[4][3]" id="evalRow[4][3][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][3][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[4][3]" id="evalRow[4][3][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][3][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[4][3]" id="evalRow[4][3][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][3][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[4][3]" id="evalRow[4][3][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[4][3][btnradio5]">5</label>
                            </div>
                        </div>

                        <h6 class="fs-4">1.5: PORTABILITY</h6>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <p>Different devices (e.g., laptop, desktop, tablet, smartphone) can access the system.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[5][1]" id="evalRow[5][1][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][1][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[5][1]" id="evalRow[5][1][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][1][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[5][1]" id="evalRow[5][1][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][1][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[5][1]" id="evalRow[5][1][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][1][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[5][1]" id="evalRow[5][1][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][1][btnradio5]">5</label>
                            </div>
                            <p>The system is compatible with a variety of existing devices. (Smartphone, laptop, PC)</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[5][2]" id="evalRow[5][2][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][2][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[5][2]" id="evalRow[5][2][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][2][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[5][2]" id="evalRow[5][2][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][2][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[5][2]" id="evalRow[5][2][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][2][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[5][2]" id="evalRow[5][2][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][2][btnradio5]">5</label>
                            </div>
                            <p>When different devices are used to access the system, all functions are present.</p>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="evalRow[5][3]" id="evalRow[5][3][btnradio1]" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][3][btnradio1]">1</label>

                                <input type="radio" class="btn-check" name="evalRow[5][3]" id="evalRow[5][3][btnradio2]" value="2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][3][btnradio2]">2</label>

                                <input type="radio" class="btn-check" name="evalRow[5][3]" id="evalRow[5][3][btnradio3]" value="3" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][3][btnradio3]">3</label>

                                <input type="radio" class="btn-check" name="evalRow[5][3]" id="evalRow[5][3][btnradio4]" value="4" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][3][btnradio4]">4</label>

                                <input type="radio" class="btn-check" name="evalRow[5][3]" id="evalRow[5][3][btnradio5]" value="5" autocomplete="off">
                                <label class="btn btn-outline-primary" for="evalRow[5][3][btnradio5]">5</label>
                            </div>
                        </div>

                        <h6 class="fs-4">CONCLUSION</h6>
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <p>The proposed system is better than the current enrollment system.</p>
                            <div class="btn-group " role="group">
                                <input type="radio" class="btn-check" name="label" id="btnradio1" value="0" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio1">No</label>

                                <input type="radio" class="btn-check" name="label" id="btnradio2" value="1" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">Yes</label>
                            </div>
                        </div>
                        

                        <div class="d-flex flex-column align-items-center justify-content-center mt-5">
                            <button type="submit" class="btn text-white bg-maroon">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer d-flex justify-content-center align-items-center fixed-bottom bg-dark mt-auto">
            <h1 class="text-white fs-5"> ©2022 Taguig City University. All Rights Reserved.</h1>
        </div>
    </body>
</html>