<?php

// connection to db
include 'app_connection.php';

$cpid = $_GET['cpid'];

$sql = "SELECT * FROM `appointment_info` WHERE cid = $cpid";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

//update students
if (isset($_POST['subBtn'])) {
    $appname = $_POST['app_name'];
    $appemail = $_POST['app_email'];
    $appdate = $_POST['app_date'];
    $apptime = $_POST['app_time'];
    // $service_worker = $_POST['serviceworker'];
    $service_type = $_POST['servicetype'];
    $List = $_POST['List'];

    // $sql = "UPDATE `todolist` SET `List`='$List' WHERE sid=$sid";
    // $sql_update = "UPDATE `appointment_info` SET `cname`='$appname',`cemail`='$appemail',`cdate`='[$appdate]',`ctime`='$apptime' WHERE cid=$cpid";
    $sql_update = "UPDATE `appointment_info` SET `cname`='$appname',`cemail`='$appemail',`cdate`='$appdate',`ctime`='$apptime',`service_type`='$service_type' WHERE cid=$cpid ";
    $result = mysqli_query($conn , $sql_update) or die('Failed to Update!');

    if($result){
        Header('location: appointmentview.php');
    }


}
// CREATE DATABASE appointment

// CREATE TABLE appointment_info(
// 	cid int AUTO_INCREMENT NOT null PRIMARY KEY,
//     cname varchar(255) not null,
//     cemail varchar(255) NOT null,
//     cdate int NOT null,
//     ctime int NOT null
// );

// include 'app_connection.php';
// fetch review

// $sql = "SELECT * FROM appointment_info";

// $result = mysqli_query($conn, $sql);

// $row_count = mysqli_num_rows($result);
// echo "hello";

// add add review

// if (isset($_POST['subBtn'])) {
//     $appname = $_POST['app_name'];
//     $appemail = $_POST['app_email'];
//     $appdate = $_POST['app_date'];
//     $apptime = $_POST['app_time'];

    // echo "<script>alert('$pname  $pprice  $pcat');</script>";

    // $sql_insert = "INSERT INTO `appointment_info`(`cname`, `cemail`, `cdate`, `ctime`) VALUES ('$appname','$appemail','$appdate','$apptime')";

    // $result_insert = mysqli_query($conn, $sql_insert);
    // $row_count = mysqli_num_rows($result);

    // if($result_insert){
    //     header('location: index.php');


    // }

// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SPA Center - Beauty & Spa HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
    .BG-APP{
        background:linear-gradient(rgba(33, 30, 28, 0.7), rgba(33, 40, 28, 0.7)), url(https://laney.edu/cosmetology/wp-content/uploads/sites/88/2021/04/Students_Work_on_Row_of_Clients-50-1170x360-e1618051570562.jpg) no-repeat;
        background-size: cover;
    }
    .BG-APP-FORM{
        background:linear-gradient(rgba(34, 30, 28, 0.7), rgba(30, 40, 28, 0.2)), url(https://img.grouponcdn.com/deal/oWmCx3VNo16U1hkbUCjQfYEKwLA/oW-1500x900/v1/t600x362.jpg) no-repeat;
        background-size: cover;
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
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
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
                <h1 class="m-0 text-primary"><span class="text-dark"> Elegance </span>Salon</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="team.php" class="nav-item nav-link">Our Team</a>
                    <!-- <a href="UserLocation.php" class="nav-item nav-link">Location</a> -->
                    <!-- <a href="price.php" class="nav-item nav-link">Pricing</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Appointments</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="appointment.php" class="dropdown-item">Make Appointment</a>
                            <a href="appointmentview.php" class="dropdown-item">View Appointment</a>
                            <a href="opening.php" class="dropdown-item">Open Hours</a>
                            <!-- <a href="testimonial.php" class="dropdown-item">Testimonial</a> -->
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="review.php" class="nav-item nav-link">FeedBack</a>
                </div>
                <a href="logout.php" class="btn btn-primary d-none d-lg-block">LogOut</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <!-- <div class="jumbotron jumbotron-fluid BG-APP" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Update Appointment</h3>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="far fa-circle px-3"></i>
                <p class="m-0">Appointment</p>
            </div>
        </div>
    </div> -->
    <!-- Header End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5 ">
        <div class="container py-5 ">
            <div class="row mx-0 justify-content-center text-center ">
                <div class="col-lg-6">
                    <!-- <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Edit Your Appointment</h6> -->
                    <h1 class="mb-5">Edit Your Appointment</h1>
                </div>
            </div>
            <div class="row justify-content-center BG-APP-FORM mx-0">
                <div class="col-lg-6 py-5">
                    <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.59);">
                        <h1 class="text-white text-center mb-4">Edit Appointment</h1>
                        <form method="post">
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="app_name" value="<?php echo $row['cname'] ?>" class="form-control bg-transparent p-4" required="required" style="color: white" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="app_email" class="form-control bg-transparent p-4"  value="<?php echo $row['cemail'] ?>" required="required" style="color: white" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text" name="app_date" class="form-control bg-transparent p-4 datetimepicker-input" value="<?php echo $row['cdate'] ?>" style="color: white" data-target="#date" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text" name="app_time"  value="<?php echo $row['ctime'] ?>" class="form-control bg-transparent p-4 datetimepicker-input" style="color: white" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                            <!-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" style="color:white;" name="serviceworker" value="<?php echo $row['service_worker'] ?>" class="form-control bg-transparent p-4"
                                            placeholder="service worker " required="required" />
                                    </div>
                                </div> -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" style="color:white;" name="servicetype" value="<?php echo $row['service_type'] ?>" class="form-control bg-transparent p-4"
                                            placeholder="Servine type" required="required" />
                                    </div>
                                    
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-primary btn-block" type="submit" name="subBtn" style="height: 47px;">Make Appointment</button>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                            <option selected>Select A Service</option>
                                            <option value="1">Service 1</option>
                                            <option value="2">Service 1</option>
                                            <option value="3">Service 1</option>
                                        </select>
                                    </div>
                                </div> -->
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="https://www.styllibcoiffure.com/wp-content/uploads/carousel-styl-lib-coiffure-1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                        <h1 class="mb-4">Best Relax And Spa Zone</h1>
                        <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon – Fri : 9:00 AM - 7:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 9:00 AM - 6:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sunday : Closed</li>
                        </ul>
                        <a href="" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->


  <!-- Footer Start -->
  <div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mb-3 text-white"><span class="text-primary">SPA</span> Center</h1>
                    </a>
                    <p>Elegance Salon is renowned for its exceptional range of top-notch services, ensuring that every
                        client receives nothing but the best. With a commitment to excellence, our salon offers an
                        unparalleled experience, where skilled professionals cater to your every beauty need.</p>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope mr-2"></i>E-Salone@gmail.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Services & prices</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <i>Party Makeup 10,000</i>
                                <i>Party Mehandi 3000 per hand</i>
                                <i>Bridal Makeup 20,000</i>
                                <i>Nail Care 3500</i>
                                <i>Hair Colour 5000</i>
                                <i>Hair Cut 1500</i>
                                <i>Pedicure 10,000</i>
                                <i>Medicure 10,000</i>
                                <i>Hair Transformnation 15,000</i>
                                <i>Facial 5,000</i>
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
                                <i>Pedicure</i>
                                <i>Medicure</i>
                                <i>Hair Transformnation</i>
                                <i>Facial</i>
                            </div>
                        </div>
                        <!-- <div class="col-sm-12 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Newsletter</h5>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-light" style="padding: 30px;"
                                        placeholder="Your Email Address">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary px-4">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top py-4"
        style="border-color: rgba(256, 256, 256, .15) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <!-- <p class="m-0 text-white">&copy; <a href="#">Your Site Name</a>. All Rights Reserved.</p> -->
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <!-- <p class="m-0 text-white">Designed by <a href="https://htmlcodex.com">HTML Codex</a></p> -->
                </div>
            </div>
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