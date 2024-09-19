<?php

// CREATE TABLE packages(
// 	pid int AUTO_INCREMENT PRIMARY KEY,
//     package varchar(255)
// );

    include 'app_connection.php';

    if (isset($_POST['subBtn'])) {
        $packages = $_POST['packages'];

        $sql_insert = "INSERT INTO `packages`(`package`) VALUES ('$packages')";

        $result = mysqli_query($conn, $sql_insert);

        // if ($result) {
            //     echo  "<script>
            //     alert('Category added successfully')
            // </script>";
        // }
    }
    // view category

    $sql_select = "SELECT * FROM packages";

    $result_select = mysqli_query($conn, $sql_select);

    $row_count = mysqli_num_rows($result_select);
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
     .container-package {
            margin-left:25%
        }
      @media (max-width : 400px) {
        .container-package {
            margin-left:-0.3%
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
                        <a href="add_service_type_price.php" style="font-size :12px" class="nav-item nav-link active">Add
                            packages</a>
                        <a href="Addworkers.php" style="font-size :12px" class="nav-item nav-link">Add Workers</a>
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
    <!-- Navbar End -->








             <!-- Category form start -->
             <div class="container-fluid pt-4 px-4 container-package" >
                 <div class="row g-4">
                     <div class="col-sm-12 col-xl-6">
                         <div class=" bg-dark rounded h-100 p-4">
                             <h6 class="mb-4" style="color:white">Add Packages For Appointment</h6>
                             <form method="post">
                                 <div class="mb-3">
                                     <label for="exampleInputEmail1" class="form-label">Insert Package here</label>
                                     <input type="text" name="packages" class="form-control" id="exampleInputEmail1">
                                 </div>
                                 <button type="submit" name="subBtn" class="btn btn-primary">Add Package</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Category form end -->
             <!-- Category table start -->
             <div class="container-fluid pt-4 px-4">
                 <div class="row g-4">
                     <div class="col-12">
                         <div class="bg-dark rounded h-100 p-4">
                             <h6 class="mb-4">category Table</h6>
                             <div class="table-responsive">
                                 <?php
                                    if ($row_count > 0) {
                                    ?>
                                     <table class="table">
                                         <thead>
                                             <tr>
                                                 <th scope="col">#</th>
                                                 <th scope="col">Package Name</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                                while ($row = mysqli_fetch_assoc($result_select)) {
                                                ?>
                                                 <tr>
                                                     <th scope="row"><?php echo $row['pid'] ?></th>
                                                     <td><?php echo $row['package'] ?></td>
                                                 </tr>
                                             <?php
                                                } ?>
                                         </tbody>
                                     </table>
                                 <?php
                                    } else {
                                       echo '<h6 class="mb-4">No Record</h6>';
                                    }
                                    ?>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Category table end -->
             
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