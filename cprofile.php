<?php


include 'connect_feedback_rev.php';

$sql_join = "SELECT * FROM appointment_info a, signup s 
WHERE a.uid = s.sid ORDER BY sid";


$result = mysqli_query($conn, $sql_join);

$row_count = mysqli_num_rows($result);

// include 'connect_feedback_rev.php';

// $sql_join = "SELECT * FROM appointment_info a, signup s 
// WHERE a.cid = s.sid ORDER BY sid";


// $result = mysqli_query($conn, $sql_join);

// $row_count = mysqli_num_rows($result);

// $row = mysqli_fetch_assoc($result);

// $sql = "SELECT * FROM signup";

// $result = mysqli_query($conn, $sql);

// $row_count = mysqli_num_rows($result);

// $row = mysqli_fetch_assoc($result);

// $sql_appointment = "SELECT * FROM appointment_info";

// $result_appointment = mysqli_query($conn, $sql);

// $row_count = mysqli_num_rows($result);

// $row_appointment = mysqli_fetch_assoc($result);
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
                        <a href="viewworkers.php" style="font-size :12px" class="nav-item nav-link">View workers</a>
                        <!-- <a href="cprofile.php" style="font-size :12px" class="nav-item nav-link">Client Profiles</a> -->
                        <a href="cprofile.php" style="font-size :12px" class="nav-item nav-link active">Clients
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

   <!-- profile table start  -->
   
   <div class="container-fluid pt-4 px-4" style="margin-top:20px">
        <div class="row g-4 table-warning">
            <div class="col-12">
                <div class=" rounded h-100 p-4">
                    <h6 class="mb-4">Clients Profiles</h6>

                    <div class="table-responsive">
                        <?php
                        if ($row_count > 0) {
                            ?>
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th scope="col" class="tcolhai">❤︎</th>
                                        <th scope="col" class="tcolhai">Uname</th>
                                        <th scope="col" class="tcolhai">Fname</th>
                                        <th scope="col" class="tcolhai">Lname</th>
                                        <th scope="col" class="tcolhai">Pw</th>
                                        <th scope="col" class="tcolhai">Email</th>
                                        <th scope="col" class="tcolhai">Date</th>
                                        <th scope="col" class="tcolhai">Time</th>
                                        <th scope="col" class="tcolhai">Service</th>
                                        <th scope="col" class="tcolhai"><i style="font-size: 30px" class="fa fa-trash" aria-hidden="true"></i></th>
                                    </tr>
                                    
                                </thead>
                                <tbody>

                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tr>


                                        
                                        <td scope="row" class="trowhai">
                                            <?php echo $row['sid'] ?>
                                        </td>
                                        <td scope="row" class="trowhai">
                                            <?php echo $row['uname'] ?>
                                        </td>
                                        <td scope="col" class="trowhai">
                                            <?php echo $row['fname'] ?>
                                        </td>
                                        <td scope="col" class="trowhai">
                                            <?php echo $row['lname'] ?>
                                        </td>
                                        <td scope="col" class="trowhai">
                                            <?php echo $row['pw'] ?>
                                        </td>
                                        <td scope="col" class="trowhai">
                                            <?php echo $row['cemail'] ?>
                                        </td>
                                        <td scope="col" class="trowhai">
                                            <?php echo $row['cdate'] ?>
                                        </td>
                                        <td scope="col" class="trowhai">
                                            <?php echo $row['ctime'] ?>
                                        </td>
                                        <td scope="col" class="trowhai">
                                            <?php echo $row['service_type'] ?>
                                        </td>


                                        <td>
                                            <a href="del_cprofile.php?cid=<?php echo $row["cid"] ?>">
                                                <button class="appbtn">Remove</button>
                                            </a>
                                        </td>
                                        </tr>

                                        <?php
                                    }
                                    ?>
                                </tbody>



                            </table>
                            <?php
                        } else {
                            echo "<h3>NO RECORD FOUND!</h3>";
                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

   <!-- profile table end  -->

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