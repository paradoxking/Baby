<?php
               function newsign(){

              
                    //includes the database
                     include('db.php');
                    
                    //store information of the user here
                    if (isset($_POST['regmail'])) {
                      # code...
                      $email = $_POST['email'];
                      

                       $insert = "INSERT INTO email(email) VALUES ('$email')";
                    $result = $con->query($insert);
                    if ($result === TRUE) {
                       echo ("Subcribed successfully");
                         
                         # code...
                    }else {
                         echo ("Error something went wrong" .$con->error);
                      
                    } 
    
              
                     }
                }
                    
               ?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="success.net">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>HITECHDOX-HOME</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <h1>HITECHDOX</h1>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 banner-left">
                    <h6>This is me</h6>
                    <h1>SUCCESS AGBERHIERE</h1>
                    <p>
                        A well trained design and web developer, certified UI, UX, UI UX designer with reasonable number of certified projects around the Global.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">discover now</a>
                </div>
                <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area pt-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 home-about-left">
                    <img class="img-fluid" src="img/about-img.png" alt="">
                </div>
                <div class="col-lg-5 col-md-6 home-about-right">
                    <h6>About Me</h6>
                    <h1 class="text-uppercase">Personal Details</h1>
                    <p>
                        Designer,Developer,Tutor and a Life long leaner and ready for new opportunities. I believe in User centered design and delivering the best possible experience to people.I have High Experience and Skills with HTML,CSS,BOOTSTRAP,MySQL and a bit of JAVESCRIPT.
                        Coding is LIFE -by PARADOX

                    </p>
                    <a href="#" class="primary-btn text-uppercase">View Full Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->

    <!-- Start services Area -->
    <section class="services-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content  col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10">My Offered Services</h1>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-pie-chart"></span>
                        <a href="#">
                            <h4>Web Design</h4>
                        </a>
                        <p>
                            “providing a world class innovative website well responsive design and UIUX responsive interface.”
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-laptop-phone"></span>
                        <a href="#">
                            <h4>Web Development</h4>
                        </a>
                        <p>
                            We provide well design functions for bakends of the website and fast and quick response Site.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-camera"></span>
                        <a href="#">
                            <h4>Technology packages</h4>
                        </a>
                        <p>
                            Program in python, Jango, C++ and other server site programming... Also write codes on Adrino for mechines
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-picture"></span>
                        <a href="#">
                            <h4>API packages</h4>
                        </a>
                        <p>
                            Well developed and designed API's to use for the running of Appliction software and interfacing of your softwares.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-tablet"></span>
                        <a href="#">
                            <h4>Apps Interface</h4>
                        </a>
                        <p>
                            Also we provide mobile application design for both Anriod and IOS devices with windows and mac OS softwares...
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-rocket"></span>
                        <a href="#">
                            <h4>Tutorials</h4>
                        </a>
                        <p>
                            Tutorials causes cut across all level for development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End services Area -->

    <!-- Start fact Area -->
    <section class="facts-area section-gap" id="facts-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">2536</h1>
                    <p>Projects Completed</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">6784</h1>
                    <p>Happy Clients</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">2239</h1>
                    <p>Cups of Coffee</p>
                </div>
                <div class="col-lg-3 col-md-6 single-fact">
                    <h1 class="counter">435</h1>
                    <p>Real Professionals</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end fact Area -->

    <!-- Start portfolio-area Area -->
  <!-- Start portfolio-area Area -->
            <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Our Latest Featured Projects</h1>
                                <p>Who are in extremely love with eco friendly system.</p>
                            </div>
                        </div>
                    </div>

                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".vector">Vector</li>
                            <li data-filter=".raster">Raster</li>
                            <li data-filter=".ui">UI/UX</li>
                            <li data-filter=".printing">Printing</li>
                        </ul>
                    </div>

                    <div class="filters-content">
                        <div class="row grid">
                            <div class="single-portfolio col-sm-4 all vector">
                                <div class="relative">
                                    <div class="thumb">
                                        <div class="overlay overlay-bg"></div>
                                         <img class="image img-fluid" src="img/p1.jpg" alt="">
                                    </div>
                                    <a href="img/p1.jpg" class="img-pop-up">
                                      <div class="middle">
                                        <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                      </div>
                                </a>
                                </div>
                                <div class="p-inner">
                                    <h4>2D Vinyl Design</h4>
                                    <div class="cat">vector</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                                <div class="relative">
                                    <div class="thumb">
                                        <div class="overlay overlay-bg"></div>
                                         <img class="image img-fluid" src="img/p2.jpg" alt="">
                                    </div>
                                    <a href="img/p2.jpg" class="img-pop-up">
                                      <div class="middle">
                                        <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                      </div>
                                </a>
                                </div>
                                <div class="p-inner">
                                    <h4>2D Vinyl Design</h4>
                                    <div class="cat">vector</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all ui">
                                <div class="relative">
                                    <div class="thumb">
                                        <div class="overlay overlay-bg"></div>
                                         <img class="image img-fluid" src="img/p3.jpg" alt="">
                                    </div>
                                    <a href="img/p3.jpg" class="img-pop-up">
                                      <div class="middle">
                                        <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                      </div>
                                    </a>

                                </div>
                                <div class="p-inner">
                                    <h4>Creative Poster Design</h4>
                                    <div class="cat">Agency</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all printing">
                                <div class="relative">
                                    <div class="thumb">
                                        <div class="overlay overlay-bg"></div>
                                         <img class="image img-fluid" src="img/p4.jpg" alt="">
                                    </div>
                                    <a href="img/p4.jpg" class="img-pop-up">
                                      <div class="middle">
                                        <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                      </div>
                                    </a>
                                </div>
                                <div class="p-inner">
                                    <h4>Embosed Logo Design</h4>
                                    <div class="cat">Portal</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all vector">
                                <div class="relative">
                                <div class="thumb">
                                        <div class="overlay overlay-bg"></div>
                                         <img class="image img-fluid" src="img/p5.jpg" alt="">
                                    </div>
                                    <a href="img/p5.jpg" class="img-pop-up">
                                      <div class="middle">
                                        <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                      </div>
                                    </a>
                                </div>
                                <div class="p-inner">
                                    <h4>3D Helmet Design</h4>
                                    <div class="cat">vector</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                                <div class="relative">
                                    <div class="thumb">
                                        <div class="overlay overlay-bg"></div>
                                         <img class="image img-fluid" src="img/p6.jpg" alt="">
                                    </div>
                                    <a href="img/p6.jpg" class="img-pop-up">
                                      <div class="middle">
                                        <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                                      </div>
                                    </a>
                                </div>
                                <div class="p-inner">
                                    <h4>2D Vinyl Design</h4>
                                    <div class="cat">raster</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
    <!-- End portfolio-area Area -->

    <!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Client’s Feedback About Me</h1>
                        <p>Works with all deligent and provides the best service and a well responsive website and a fantastic design.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial">
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user1.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Provides the most exotic designs and a fantastic code functions for running the site and fast response .
                            </p>
                            <h4>Harriet Maxwell</h4>
                            <p>CEO at Google</p>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user2.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Provides well equicked website and user friendly and user experience work with great and nice annimations.
                            </p>
                            <h4>Carolyn Craig</h4>
                            <p>CEO at Facebook</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->

    <!-- Start price Area -->
    <section class="price-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Choose Your Plan</h1>
                        <p>When someone does something that they know that they shouldn’t do, did they.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <h1 class="package-no">01</h1>
                        <h4>Economy</h4>
                        <p class="mt-10">For the individuals</p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li>Secure Online Transfer</li>
                            <li>Unlimited Styles for interface</li>
                            <li>Reliable Customer Service</li>
                        </ul>
                    </div>
                    <div class="bottom-part">
                        <h1>N/A-SEND EMAIL</h1>
                        <a class="price-btn text-uppercase" href="#">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <h1 class="package-no">02</h1>
                        <h4>Business</h4>
                        <p class="mt-10">For the individuals</p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li>Secure Online Transfer</li>
                            <li>Unlimited Styles for interface</li>
                            <li>Reliable Customer Service</li>
                        </ul>
                    </div>
                    <div class="bottom-part">
                        <h1>N/A-SEND EMAIL</h1>
                        <a class="price-btn text-uppercase" href="#">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <h1 class="package-no">03</h1>
                        <h4>Premium</h4>
                        <p class="mt-10">For the individuals</p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li>Secure Online Transfer</li>
                            <li>Unlimited Styles for interface</li>
                            <li>Reliable Customer Service</li>
                        </ul>
                    </div>
                    <div class="bottom-part">
                        <h1>N/A-SEND EMAIL</h1>
                        <a class="price-btn text-uppercase" href="#">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-price">
                    <div class="top-part">
                        <h1 class="package-no">04</h1>
                        <h4>Exclusive</h4>
                        <p class="mt-10">For the individuals</p>
                    </div>
                    <div class="package-list">
                        <ul>
                            <li>Secure Online Transfer</li>
                            <li>Unlimited Styles for interface</li>
                            <li>Reliable Customer Service</li>
                        </ul>
                    </div>
                    <div class="bottom-part">
                        <h1>N/A-SEND EMAIL</h1>
                        <a class="price-btn text-uppercase" href="#">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End price Area -->


    <!-- Start brands Area -->
    <section class="brands-area">
        <div class="container">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End brands Area -->

      <div class="gfq-wrap">
    <div class="gfq-panel">
        <!--Change to the form ID of your form below-->
        <!--[gravityform id="66" title="false" description="false" ajax="true"]-->
    </div>
   <div class="gfq-badge">
        <a href="https://api.whatsapp.com/send?phone=19493121057&text=welcome%20to%20CRYPTIC-INVEST%20FX%20Customer%20Care" target=”_blank”>
        <img src="img/whatsapp.png" alt="Icon"/>
        </a>
    </div>
    
</div>

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>About Me</h4>
                        <p>
                          HI-TECHDOX is a design and solution providing brand that focuses on improving the performance, online and offline presence of individuals, start-up and established companies & businessess with web, app, media and graphic tools to ensure the most enjoyable experience for their respective clients/customers
                        </p>
                        <p class="footer-text">
                            <!-- Link back to success.net can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | HITECHDOX <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://success.net" target="_blank">Paradox</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Subcribe to our Newsletter and be the first to get daily update and Tech solution/hack and Stay updated with our latest trends</p>
                        <div class="">

                             <?php
                  newsign();
                             ?>

                            <form target="_blank" action="index.php" method="post">
                                <div class="input-group">
                                    <input  class="form- control" type="email" name="email" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" name="regmail" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>
                                    </div>
                                    <div class="info"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h4>Follow Me</h4>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="https://www.facebook.com/chanli.agberhiere"   target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="https://instagram.com/suxcess_paradox?r=nametag" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="https://wa.link/ct8ul9"  target="_blank"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/simple-skillbar.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
