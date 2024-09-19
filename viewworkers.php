<?php
// CREATE DATABASE appointment

// CREATE TABLE appointment_info(
// 	cid int AUTO_INCREMENT NOT null PRIMARY KEY,
//     cname varchar(255) not null,
//     cemail varchar(255) NOT null,
//     cdate int NOT null,
//     ctime int NOT null
// );

//  ALTER TABLE appointment_info
// ADD COLUMN (
// cworker VARCHAR(255)
// ); 

include 'app_connection.php';

$sql = "SELECT * FROM `salon_worker`";

$result_select = mysqli_query($conn, $sql);

$row_count = mysqli_num_rows($result_select);

// $row = mysqli_fetch_assoc($result_select);

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
    .BG-APP {
        background: linear-gradient(rgba(33, 30, 28, 0.7), rgba(33, 40, 28, 0.7)), url(https://laney.edu/cosmetology/wp-content/uploads/sites/88/2021/04/Students_Work_on_Row_of_Clients-50-1170x360-e1618051570562.jpg) no-repeat;
        background-size: cover;
    }

    .BG-APP-FORM {
        background: linear-gradient(rgba(33, 30, 28, 0.7), rgba(38, 40, 28, 0.5)), url(https://images.smiletemplates.com/uploads/screenshots/104/0000104219/powerpoint-template-450w.jpg) no-repeat;
        background-size: cover;
    }

    .prof_container {
        width: 702px;
        height: 392px;
        flex-shrink: 0;
        border-radius: 8px;
        background: #FFF;
        margin: auto;
        box-shadow: 17px 14px 19.6px 0px rgba(0, 0, 0, 0.25), -12px -8px 38.4px 0px rgba(0, 0, 0, 0.25), 11px 11px 25.7px 0px rgba(0, 0, 0, 0.25) inset;
    }

    .info {
        margin-top: -100px;
    }

    .prof_container:hover {
        width: 702px;
        height: 392px;
        flex-shrink: 0;
        border-radius: 8px;
        background: #FFF;
        margin: auto;
        box-shadow: 17px 14px 19.6px 0px rgba(0, 0, 0, 0.25), 15px 10px 45.2px 0px rgba(0, 0, 0, 0.53), -22px -22px 25.7px 0px rgba(0, 0, 0, 0.25) inset;

    }

    .edit_profile{
        width: 100px;
        height: 40px;
        background-color: black;
        color: white;
        border-radius: 20px;
        margin-left : 80%;
        transition: .2s;
        margin-bottom: 5px;

    }
    .edit_profile:hover{
        width: 100px;
        height: 40px;
        background-color: wheat;
        color: black;
        border-radius: 20px;
        margin-left : 80%;
        margin-bottom: 5px;
    }

    .viewprofile:hover {
        text-decoration: none;
    }

    .img {
        width: 200px;
        height: 200px;
        margin-top: 14px;
        flex-shrink: 0;
        margin-left: 20px;
        border-radius: 110px;
        background: url(<path-to-image>), lightgray 50% / cover no-repeat;
    }

    .content .profile_info {
        /* width: 70px;. */
        height: 10px;
        flex-shrink: 0;
        color: #000;
        /* margin-top: -60px; */
        font-family: Inter;
        margin-left: 40%;
        font-size: 15px;
        /* margin-top: -20px; */
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    @media (max-width : 400px) {
        .prof_container {
            width: 300px;
            height: 600px;
            margin-top: 10px;
        }
        .info{
            margin-top:20px;
            margin-left:-100px;
        }
        .img{
            margin-left: 50px;
        }
        .edit_profile_btns{
            margin-top: 30px;
            margin-left: -600px;
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
                        <a href="Addworkers.php" style="font-size :12px" class="nav-item nav-link">Add Workers</a>
                        <a href="viewworkers.php" style="font-size :12px" class="nav-item nav-link active">View workers</a>
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

    <!-- workers profile start   -->
    <?php if ($row_count > 0) { ?>
        <?php while ($row = mysqli_fetch_assoc($result_select)) { ?>
            <br>
            <a class="viewprofile">
                <div class="prof_container">
                    <div class="content">
                        <img src="<?php echo 'images_worker/' . $row['pimg'] ?>" alt="" class="img">
                        <div class="info">
                            <h3 class="profile_info">
                                <?php echo $row['wname'] ?>
                            </h3>
                            <h3 class="profile_info">
                                <?php echo $row['wemail'] ?>
                            </h3>
                            <h3 class="profile_info">
                                <?php echo $row['wcontact'] ?>
                            </h3>
                            <h3 class="profile_info">
                                <?php echo $row['waddress'] ?>
                            </h3>
                            <h3 class="profile_info">
                                <?php echo $row['weducation'] ?>
                            </h3>
                            <h3 class="profile_info">
                                <?php echo $row['wcity'] ?>
                            </h3>
                            <h3 class="profile_info">
                                <?php echo $row['wsalary'] ?>
                            </h3>
                            <h3 class="profile_info">
                                <?php echo $row['wage'] ?>
                            </h3>
                            <h3 class="profile_info">
                                <?php echo $row['wposition'] ?>
                            </h3>
                            <div class="edit_profile_btns">
                            <a href="edit_prof_workers.php?workerid=<?php echo $row["wid"] ?>">
                                <button class="edit_profile">Edit</button>
                            </a>
                            <a href="del_prof_workers.php?workerid=<?php echo $row["wid"] ?>">
                                <button class="edit_profile">Delete</button>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </a><br>
        <?php } ?>
    <?php } ?>



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