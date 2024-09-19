<?php
// CREATE TABLE salon_worker(
// 	wid int AUTO_INCREMENT PRIMARY KEY,
//     wteam varchar(255) not null,
//     wname varchar(255) not null,
//     wemail varchar(255) not null,
//     wcontact varchar(255) not null,
//     waddress varchar(255) not null,
//     weducation varchar(255) not null,
//     wcity varchar(255) not null,
//     wsalary varchar(255) not null,
//     wage varchar(255) not null,
//     wposition varchar(255) not null
// );

include 'app_connection.php';

// ALTER TABLE `appointment_info` ADD COLUMN
// (
//     `service_worker` varchar(100) NOT NULL,
// ) 
// fetch category

$sql_select = "SELECT * FROM `salon_worker`";

$result_select = mysqli_query($conn, $sql_select);

$row_count = mysqli_num_rows($result_select);

// add product

if (isset($_POST['subBtn'])) {
    // $wteam = $_POST['wteam'];
    $wname = $_POST['wname'];
    $wemail = $_POST['wemail'];
    $wContact = $_POST['wContact'];
    $waddress = $_POST['waddress'];
    $weducation = $_POST['weducation'];
    $wcity = $_POST['wcity'];
    $wsalary = $_POST['wsalary'];
    $wage = $_POST['wage'];
    $wposition = $_POST['wposition'];
    $filename = $_FILES['pimg']['name'];
    $tmpname = $_FILES['pimg']['tmp_name'];
    // $wimg = $_FILE['$wimg'];

    // echo "<pre>";
    // var_dump($_FILES['pimg']);
    // echo "<pre>";

    $sql_insert = "INSERT INTO `salon_worker`(`wname`, `wemail`, `wcontact`, `waddress`, `weducation`, `wcity`, `wsalary`, `wage`, `wposition`,`pimg`) VALUES ('$wname','$wemail','$wContact','$waddress','$weducation','$wcity','$wsalary','$wage','$wposition','$filename')";

    $result_insert = mysqli_query($conn, $sql_insert);

    if ($result_insert) {
        move_uploaded_file($tmpname, 'images_worker/' . $filename);
        // header('location: viewworkers.php');

    }
    // }

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Elegance Salon </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Elegance Salon " name="keywords">
    <meta content="Elegance Salon " name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


<style>
    .btnSubmit {
        border-radius: 5px;
        background: #F8CDC0;
        box-shadow: 6px 4px 15px 0px rgba(0, 0, 0, 0.51), 7px 8px 21.1px 0px rgba(0, 0, 0, 0.25) inset;
        width: 142px;
        height: 43px;
        flex-shrink: 0;
        margin-top: 20px;
        margin-left: 45%;
    }

    @media (max-width : 400px) {
        .btnSubmit {
            border-radius: 5px;
            background: #F8CDC0;
            box-shadow: 6px 4px 15px 0px rgba(0, 0, 0, 0.51), 7px 8px 21.1px 0px rgba(0, 0, 0, 0.25) inset;
            width: 142px;
            height: 43px;
            flex-shrink: 0;
            margin-left: 30%;
            margin-top: 20px
        }
    }
</style>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>E-Salon@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
                <div class="d-inline-flex align-items-center">
                <a class="text-primary px-2" href="https://www.facebook.com/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-2" href="https://twitter.com/i/flow/login">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-2" href="https://www.linkedin.com/login">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-2" href="https://www.instagram.com/accounts/login/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-2" href="https://www.youtube.com/account">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
 
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 style="font-size:35px" class="m-0 text-primary"><span class="text-dark"> Elegance </span>Salon</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                    <div class="navbar-nav m-auto py-0">
                        <a href="admin.php" style="font-size :12px" class="nav-item nav-link">Admin home</a>
                        <a href="add_service_type_price.php" style="font-size :12px" class="nav-item nav-link">Add
                            packages</a>
                        <a href="Addworkers.php" style="font-size :12px" class="nav-item nav-link active">Add Workers</a>
                        <a href="viewworkers.php" style="font-size :12px" class="nav-item nav-link">View workers</a>
                        <!-- <a href="cprofile.php" style="font-size :12px" class="nav-item nav-link">Client Profiles</a> -->
                        <a href="cprofile.php" style="font-size :12px" class="nav-item nav-link">Clients
                            Info</a>
                        <a href="client_feedback.php" style="font-size :12px" class="nav-item nav-link">Clients Feedbacks</a>
                        <a href="ccontact.php" style="font-size :13px" class="nav-item nav-link">Client Contact</a>
                        <!-- <a href="cprofits.php" style="font-size :12px" class="nav-item nav-link">Work Profits</a> -->
                        <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="appointment.php" class="dropdown-item">Appointment</a>
                            <a href="opening.php" class="dropdown-item">Open Hours</a>
                            <a href="team.php" class="dropdown-item">Our Team</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                        </div>
                    </div> -->
                        <!-- <a href="review.php" class="nav-item nav-link">FeedBack</a> -->
                    </div>
                    <a href="logout.php" class="btn btn-primary d-none d-lg-block">LogOut</a>
                </div>
        </nav>
    </div>
    <!-- Navbar End -->



    <form method="post" enctype="multipart/form-data">
        <input type="file" name="pimg"
            style="width:60%;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;">
        <!-- <input style="width:60%;border-radius: 50px;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;
" type="text" name="wteam" placeholder="        Team Name"> -->
        <input style="width:60%;border-radius: 50px;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;
" type="text" name="wname" placeholder="        Worker Name">
        <input style="width:60%;border-radius: 50px;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;
" type="text" name="wemail" placeholder="       Worker email">
        <input style="width:60%;border-radius: 50px;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;
" type="text" name="wContact" placeholder="     Worker contact">
        <input style="width:60%;border-radius: 50px;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;
" type="text" name="waddress" placeholder="     Worker address">
        <input style="width:60%;border-radius: 50px;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;
" type="text" name="weducation" placeholder="       Worker education">
        <input style="width:60%;border-radius: 50px;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;
" type="text" name="wcity" placeholder="        Worker city">
        <input style="width:60%;border-radius: 50px;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;
" type="text" name="wsalary" placeholder="      Worker salary">
        <input style="width:60%;border-radius: 50px;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;
" type="text" name="wage" placeholder="     Worker age">
        <input style="width:60%;border-radius: 50px;margin: 10px auto;border: none;margin-left:20%;box-shadow: 5px 4px 10.7px 0px rgba(0, 0, 0, 0.25), 17px 9px 12.8px 0px #C8C4C4, -9px -4px 18.3px 0px rgba(0, 0, 0, 0.25) inset;
" type="text" name="wposition" placeholder="        Worker position"><br>
        <button type="submit" class="btnSubmit" name="subBtn">Submit</button>
    </form>

<!-- Footer Start -->
<div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mb-3 text-white"><span class="text-primary">SPA</span> Center</h1>
                    </a>
                    <p>Elegance Salon is renowned for its exceptional range of top-notch services, ensuring that every client receives nothing but the best. With a commitment to excellence, our salon offers an unparalleled experience, where skilled professionals cater to your every beauty need.</p>
                  
                    
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Our Packages</h5>
                            <div class="d-flex flex-column justify-content-start">
                            <i>Party Makeup 10,000</i>
                            <i>Party Mehandi 3000 per hand</i>
                            <i>Bridal Makeup 20,000</i>
                            <i>Nail Care 3500</i>
                            <i>Hair Colour 5000</i>
                            <i>Hair Cut 1500</i>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Our Services</h5>
                            <div class="d-flex flex-column justify-content-start">
                            <i>Party Makeup</i>
                            <i>Party Mehandi</i>
                            <i>Bridal Makeup</i>
                            <i>Nail Care</i>
                            <i>Hair Colour</i>
                            <i>Hair Cut</i>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top py-4"
        style="border-color: rgba(256, 256, 256, .15) !important;">
        <div class="container">
            
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>