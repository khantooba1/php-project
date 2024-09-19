<?php

include 'connect_feedback_rev.php';

$sql = "SELECT * FROM rev_feedback";

$result = mysqli_query($conn, $sql);

$row_count = mysqli_num_rows($result);

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
                <h1 class="m-0 text-primary"><span class="text-dark"> Elegance </span>Salon</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100"
                        src="https://img.freepik.com/premium-photo/woman-receiving-facial-mask-beauty-salon_199352-56.jpg"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                                style="letter-spacing: 3px;">Elegance Salon </h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Facial treatments</h3>
                            <p class="mx-md-5 px-5">Experience the ultimate in facial rejuvenation at our salon, where
                                we offer unparalleled face treatments, luxurious masks, and expert facials.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                                href="appointment.php">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100"
                        src="https://media.istockphoto.com/id/687244776/photo/makeup-artist-applying-eyeshadow-on-a-girl.jpg?s=612x612&w=0&k=20&c=QkFL3oe-poYi4p1ZaboIOVie_ycRz0fTJG9Ex5LpNoQ="
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                                style="letter-spacing: 3px;">Elegance Salon </h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">MakeUp</h3>
                            <p class="mx-md-5 px-5">Discover the ultimate beauty experience with our exceptional MakeUp
                                services. Unleash your inner beauty with our exceptional MakeUp services.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                                href="appointment.php">Make Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100"
                        src="https://w7.pngwing.com/pngs/560/69/png-transparent-manicure-nail-salon-pedicure-beauty-parlour-day-spa-nail-hand-cosmetics-lip.png"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown"
                                style="letter-spacing: 3px;">Elegance Salon</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Acrylic Nails</h3>
                            <p class="mx-md-5 px-5">Discover the ultimate experience in Acrylic Nails with our
                                exceptional service.Experience the epitome of excellence with our Acrylic Nails service,
                                tailored to perfection.</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp"
                                href="appointment.php">Make Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100"
                        src="https://img.freepik.com/free-photo/make-up-artist-getting-model-ready-photoshootin_23-2149305147.jpg?size=626&ext=jpg&ga=GA1.1.1546980028.1704067200&semt=ais"
                        alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">About Us</h6>
                    <h1 class="mb-4">Elegance Salon</h1>
                    <p class="pl-4 border-left border-primary">Elegance Salon is a renowned beauty salon that is highly
                        sought after for its wide range of services, which encompass hair styling, manicures, pedicures,
                        and facials. With a focus on providing exceptional face treatments, masks, and facials, Elegance
                        Salon is dedicated to delivering the utmost quality and satisfaction to its clients.</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                <h6 class="text-uppercase">Spa Specialist</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">999</h3>
                                <h6 class="text-uppercase">Happy Clients</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- services  -->
    <div class="container-fluid px-0 py-5 my-5 ">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Services</h6>
                <h1>We’ll know what you like!</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/makeupparty.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Party Make up</h4>
                    <p class="text-white px-3 mb-3"> Experience the ultimate in party makeup at Elegance Salon, where we
                        offer the finest and most exquisite services.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_party_makeup.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/hairstyle.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Hair Styles</h4>
                    <p class="text-white px-3 mb-3">Discover the epitome of hair styling excellence at Elegance Salon,
                        where we guarantee the finest services.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_hair_style.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/haircut.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Hair Cutting</h4>
                    <p class="text-white px-3 mb-3">Discover the epitome of hair cutting excellence at Elegance Salon,
                        where we guarantee the finest services.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_hair_cut.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/haircoltransform.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Hair Colour Transformation</h4>
                    <p class="text-white px-3 mb-3">Discover the epitome of hair colour styling excellence at Elegance
                        Salon, where we guarantee the finest services.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_hair_color.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/mani.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Manicures</h4>
                    <p class="text-white px-3 mb-3">Indulge in the ultimate pampering experience at Elegance Salon,
                        where our manicures are second to none</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_Mani.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/pedi.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Pedicures</h4>
                    <p class="text-white px-3 mb-3">At Elegance Salon, we take pride in offering the most exceptional
                        pedicure experiences. </p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_pedi.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/facial.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Facials</h4>
                    <p class="text-white px-3 mb-3">Elegance Salon is the ultimate destination for the best facials that
                        will leave you feeling refreshed, revitalized, and beautiful.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_facial.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/nails.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Nail Care</h4>
                    <p class="text-white px-3 mb-3">Trust us to enhance your natural beauty and give you the hair
                        transformation of your dreams.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_nail_care.php">Make Order</a>
                    </div>
                </div>
            </div>
        </div>

<!-- 
        <br>
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Packages</h6>
                <h1>We’ll know the Packages you like!</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/makeupparty.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Bridal MakeUp</h4>
                    <p class="text-white px-3 mb-3"> At our salon, we pride ourselves on delivering the finest bridal makeup services available.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_party_makeup.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/hairstyle.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Mehandi</h4>
                    <p class="text-white px-3 mb-3">Experience the ultimate Mehandi service at our salon, where excellence is our standard.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_hair_style.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/haircut.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Pre-Bridal Grooming</h4>
                    <p class="text-white px-3 mb-3">Indulge in the finest Pre-Bridal Grooming service available at our salon, setting the standard for excellence.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_hair_cut.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/haircoltransform.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">threading</h4>
                    <p class="text-white px-3 mb-3">Our salon offers exceptional threading services that are second to none.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_hair_color.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/mani.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Manicures</h4>
                    <p class="text-white px-3 mb-3">Treat yourself to the ultimate manicure experience with our top-notch package service at the salon.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_Mani.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/pedi.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Pedicures</h4>
                    <p class="text-white px-3 mb-3">Treat yourself to the finest pedicure service available at our salon, where we offer the best package to indulge your feet.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_pedi.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/facial.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Facials</h4>
                    <p class="text-white px-3 mb-3">Discover the epitome of luxury and relaxation with our salon's top-notch facial services.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_facial.php">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="images/nails.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Nail Care</h4>
                    <p class="text-white px-3 mb-3">Pamper yourself with our salon's top-notch Nail Care package service, guaranteed to leave your nails looking flawless.</p>
                    <div class="w-100 bg-white text-center p-4">
                        <a class="btn btn-primary" href="app_nail_care.php">Make Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    <!-- services  -->

    <!-- Service Start -->
    <!-- <div class="container-fluid px-0 py-5 my-5 ">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Service</h6>
                <h1>Spa & Beauty Services</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="https://www.itakeyou.co.uk/wp-content/uploads/2021/07/wedding-hairstyles-for-long-hair-2021-3.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Party Make up</h4>
                    <p class="text-white px-3 mb-3"> Experience the ultimate in party makeup at Elegance Salon, where we offer the finest and most exquisite services.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="https://www.itakeyou.co.uk/wp-content/uploads/2021/07/wedding-hairstyles-for-long-hair-2021-3.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Hair Styles</h4>
                    <p class="text-white px-3 mb-3">Discover the epitome of hair styling excellence at Elegance Salon, where we guarantee the finest services.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-3.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Manicures</h4>
                    <p class="text-white px-3 mb-3">Indulge in the ultimate pampering experience at Elegance Salon, where our manicures are second to none</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-4.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Pedicures</h4>
                    <p class="text-white px-3 mb-3">At Elegance Salon, we take pride in offering the most exceptional pedicure experiences. </p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-5.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Facials</h4>
                    <p class="text-white px-3 mb-3">Elegance Salon is the ultimate destination for the best facials that will leave you feeling refreshed, revitalized, and beautiful.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="img/service-6.jpg" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Hair Transformation</h4>
                    <p class="text-white px-3 mb-3">Trust us to enhance your natural beauty and give you the hair transformation of your dreams.</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="">Make Order</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">Make Appointment</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent p-4" placeholder="Your Name" required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent p-4" placeholder="Your Email" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 1</option>
                                        <option value="3">Service 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Make Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service End -->


    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100" >
                        <img class="position-absolute w-100 h-100" src="https://www.kapilssalon.com/wp-content/uploads/2021/03/Makeup-Course-720x480-1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">Open Hours</h6>
                        <h1 class="mb-4">Best Relax And Spa Zone</h1>
                        <p>Elegance Salon offers the most efficient and well-organized schedule to cater to all your
                            beauty needs.</p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Mon – Fri : 9:00 AM -
                                7:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Saturday : 9:00 AM - 6:00
                                PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Sunday : Closed</li>
                        </ul>
                        <a href="appointment.php" class="btn btn-primary mt-2">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Spa Specialist</h6>
                    <h1 class="mb-5">Spa & Beauty Specialist</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img style="width:300px;height:300px"  class="img-fluid" src="https://img.freepik.com/free-photo/graceful-long-haired-ginger-girl-looking-shoulder-laughing-pretty-woman-beret-enjoying-walk_197531-11739.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img style="width:300px;height:300px"  class="img-fluid" src="https://i.pinimg.com/736x/76/af/5a/76af5aada99e620f883de13d790f8cf0.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Cory Brown</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img style="width:300px;height:300px" class="img-fluid" src="https://i.pinimg.com/736x/20/14/fe/2014fe980212621e55839d55601c80cd.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img style="width:300px;height:300px"  class="img-fluid" src="https://images.unsplash.com/photo-1609241728358-53d49c22c01a?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGdpcmwlMjBwaWN0dXJlfGVufDB8fDB8fHww" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Kelly Walke</h5>
                                <p class="m-0">Spa & Beauty Expert</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- feedback Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100"
                        src="https://www.thelooksalonandspa.com/wp-content/uploads/2022/11/Choosing-the-Best-Hair-Stylist-and-Hair-Salon-1024x798.jpg"
                        alt="">
                </div>
                <div class="col-lg-6">
                    <button><a href="./review.php">Give Review or Feedback</a></button> 
                    <!-- <input type="text" name="feedback_rev"> Give us your feedback/review</input><br><br> -->
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Reviews</h6>
                    <h1 class="mb-4">What Our Clients Say!</h1>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="position-relative">
                            <i class="fa fa-3x fa-quote-right text-primary position-absolute"
                                style="top: -6px; right: 0;"></i>
                                <?php if ($row_count > 0) { ?>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                    <div class="d-flex align-items-center mb-3">
                                        <!-- <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" -->
                                        <!-- style="width: 60px; height: 60px;" alt=""> -->
                              
                                            <div class="ml-3">
                                       
                                                    <h5 class="text-uppercase">
                                                        <?php echo $row['pname'] ?>
                                                    </h5>
                                                    <h6 class="text-uppercase">
                                                        <?php echo $row['plname'] ?>
                                                    </h6>
                                                    <span>
                                                        <?php echo $row['pemail'] ?>
                                                    </span>
                                                    <h6>
                                                        <?php echo $row['prevf'] ?>
                                                    </h6><br>
                                        
                                            </div>
                                   
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    <!-- <p class="m-0">This salon is truly admirable, with its services being absolutely incredible.
                                </p> -->
                                </div>
                                <?php
                                } else {
                                    echo '<h6 class="mb-4">No Records</h6>';
                                } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- feedback End -->
    
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