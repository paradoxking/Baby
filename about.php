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
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Personal</title>

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
                    <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="price.php">Pricing</a></li>
                        <li class="menu-has-children"><a href="">Blog</a>
                            <ul>
                                <li><a href="blog-home.php">Blog Home</a></li>
                                <li><a href="blog-single.php">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                                <li><a href="elements.php">Elements</a></li>
                                <li class="menu-has-children"><a href="">Level 2 </a>
                                    <ul>
                                        <li><a href="#">Item One</a></li>
                                        <li><a href="#">Item Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- #header -->

    <!-- start banner Area -->
    <section class="about-banner">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        About Me
                    </h1>
                    <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="about.php"> About Me</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap">
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
                    <a href="about.php" class="primary-btn text-uppercase">View Full Details</a>
                </div>
                <div class="col-lg-12 pt-60">
                    <p>
                        I'm a Full Stack Designer |  Developer. Just recently started learning React to compliment my web development to fit in for job placements, I've worked on e-commerce websites, real time chatting apps, blog apps, worked with allauth authentication,
                        payment gateways like Paystack, Stripe, etc; business campaign technologies like Sendgrid, Mailgun and Mailchimp. Currently learning from a lot of tutors including Clever Programmer, JustDjango and The NetNinja while also developing
                        for clients.
                    </p>
                    <h4 class="pt-30">Tools Expertness</h4>
                </div>
            </div>
            <div class="row skillbar-wraps">
                <div class="col-lg-6 skill-left">
                    <div class="single-skill">
                        <p>
                            Web design 85%
                        </p>
                        <div class="skill" data-width="85"></div>
                    </div>
                    <div class="single-skill">
                        <p>
                            web development 90%
                        </p>
                        <div class="skill" data-width="90"></div>
                    </div>
                    <div class="single-skill">
                        <p>
                            App interfacing 70%
                        </p>
                        <div class="skill" data-width="70"></div>
                    </div>
                </div>
                <div class="col-lg-6 skill-right">
                    <div class="single-skill">
                        <p>
                            UI (user interface) 95%
                        </p>
                        <div class="skill" data-width="95"></div>
                    </div>
                    <div class="single-skill">
                        <p>
                            UX ( user experience) 85%
                        </p>
                        <div class="skill" data-width="85"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->

    <!-- Start timeline Area -->
    <section class="timeline pb-120">
        <div class="text-center">
            <div class="menu-content pb-70">
                <div class="title text-center">
                    <h1 class="mb-10">My Qualifications</h1>
                    <p>A graduate of Biochemistry from Nnamdi Azikiwe university With a Full Course Training in Web Design and Development by Galitech Integrated System </p>
                </div>
            </div>
        </div>
        <ul>
            <li>
                <div class="content">
                    <h4>
                        <time>Web Design and Web Development</time>
                    </h4>
                    <p><b>Session:</b> 2018-Present</p>
                    <p><b>Result:</b> 4.01(In the Scale of 5.0)</p>
                </div>
            </li>
            <li>
                <div class="content">
                    <img class="img-fluid mx-auto d-block mb-30" src="img/about/c-logo.png" alt="">
                    <h4>
                        <time>Creative Content Developer</time>
                    </h4>
                    <p>June 2018 to Present</p>
                </div>
            </li>
            <li>
                <div class="content">
                    <h4>
                        <time>Database and Server Management</time>
                    </h4>
                    <p><b>Session:</b> 2018-Present</p>
                    <p><b>Result:</b> 4.98 (In the Scale of 5.00)</p>
                </div>
            </li>
            <li>
                <div class="content">
                    <img class="img-fluid mx-auto d-block mb-30" src="img/about/c-logo.png" alt="">
                    <h4>
                        <time>Senior UI/UX Designer</time>
                    </h4>
                    <p>Sept 2018 to Present</p>
                </div>
            </li>
            <li>
                <div class="content">
                    <h4>
                        <time>Web Application Software Developer </time>
                    </h4>
                    <p><b>Session:</b> 2018-Present</p>
                    <p><b>Result:</b> 4.23 (In the Scale of 5.00)</p>
                </div>
            </li>
        </ul>
    </section>

    <!-- End timeline Area -->


    <!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Client’s Feedback About Me</h1>
                        <p>Well developed responsive site and good runing background </p>
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
                                Delivered in time and Quick to response to server problems...
                            </p>
                            <h4>Harriet Maxwell</h4>
                            <p>CEO at Mavin media</p>
                        </div>
                    </div>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid" src="img/elements/user2.png" alt="">
                        </div>
                        <div class="desc">
                            <p>
                                Delivered on time and Well designed
                            </p>
                            <h4>Carolyn Craig</h4>
                            <p>CEO at Amilda.LTD</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->

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