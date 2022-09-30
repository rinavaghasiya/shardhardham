<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Swaminarayan Mandir</title>
    <meta content="swaminarayanndaily darshan" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{URL::asset('assets/client/img/mandir-image/mandirlogo.png')}}" rel="icon">
    <link href="{{URL::asset('assets/client/img/mandir-image/mandirlogo.png')}}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{URL::asset('assets/client/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/client/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/client/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/client/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/client/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/client/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{URL::asset('assets/client/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction - v1.1.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{URL::asset('assets/client/img/mandir-image/mandirlogo.png')}}" alt="">
                <!-- <h1>UpConstruction<span>.</span></h1> -->
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{url('/')}}" class="active">Home</a></li>
                    <li><a href="#temple">Temple</a></li>
                    <li><a href="#swami">Swami</a></li> 
                    <li><a href="#profile">Profile</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="{{url('video')}}">Video</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/client/img/mandir-image/slider3.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Contact</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>

            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>contact@example.com</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-lg-6 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14874.788261304477!2d72.887916!3d21.243858!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x34d85a84bd823ff6!2sShree%20Swaminarayan%20Temple%20-motavarachha!5e0!3m2!1sen!2sin!4v1660373788451!5m2!1sen!2sin"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                           
                    </div>
                    <!-- End Google Maps -->

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content position-relative ">
            <div class="container ">
                <div class="row ">

                    <div class="col-lg-3 col-md-6 ">
                        <div class="footer-info ">
                            <a href="index.html" class="logo d-flex align-items-center">
                                <img src="{{URL::asset('assets/client/img/mandir-image/mandirlogo.png')}}" alt="" style="width: 160px; height:160px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 ">
                        <div class="footer-info ">
                            <h4>Our Information</h4>
                            <p>
                                A108 Adam Street <br> NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>

                        </div>
                    </div>
                    <!-- End footer info column-->

                    <div class="col-lg-2 col-md-3 footer-links ">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#temple">Temple</a></li>
                            <li><a href="#swami">Swami</a></li>

                        </ul>
                    </div>
                    <!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#profile">Profile</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <div class="footer-info ">
                            <a href="index.html" class="logo d-flex align-items-center">
                                <img src="{{URL::asset('assets/client/img/mandir-image/mandirlogo.png')}}" alt="" style="width: 160px; height:160px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative ">
            <!-- <div class="container ">
                <div class="copyright ">
                    &copy; Copyright <strong><span>UpConstruction</span></strong>. All Rights Reserved
                </div>
                <div class="credits ">
                    Designed by <a href="https://bootstrapmade.com/ ">BootstrapMade</a>
                </div>
            </div> -->
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

    <div id="preloader "></div>

    <!-- Vendor JS Files -->
    <script src="{{URL::asset('assets/client/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/client/vendor/aos/aos.js')}}"></script>
    <script src="{{URL::asset('assets/client/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{URL::asset('assets/client/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('assets/client/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/client/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{URL::asset('assets/client/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{URL::asset('assets/client/js/main.js')}}"></script>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $(function() {
                $('li a').click(function(e) {
                    e.preventDefault();
                    $('a').removeClass('active');
                    $(this).addClass('active');
                });
            });
        });
    </script> -->

</body>

</html>
