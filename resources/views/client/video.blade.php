<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Swaminarayan Mandir</title>
    <meta content="swaminarayanndaily darshan" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ URL::asset('assets/client/img/mandir-image/mandirlogo.png') }}" rel="icon">
    <link href="{{ URL::asset('assets/client/img/mandir-image/mandirlogo.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ URL::asset('assets/client/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/client/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/client/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/client/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/client/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/client/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ URL::asset('assets/client/css/main.css') }}" rel="stylesheet">

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

            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ URL::asset('assets/client/img/mandir-image/mandirlogo.png') }}" alt="">
                <!-- <h1>UpConstruction<span>.</span></h1> -->
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <!-- <h2 data-aos="fade-down">Welcome to <span>UpConstruction</span></h2> -->
                        <!-- <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                        <!-- <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <?php $data = App\Models\Slider::get(); ?>
            @foreach ($data as $ans)
                <div class="carousel-item active"><img src="{{ url('slider_img') }}/{{ $ans->image }}"
                        style="width: 100%; height:970px;"></div>
            @endforeach

            {{-- <div class="carousel-item active" style="background-image: url(assets/client/img/mandir-image/slider1.png)"></div>
            <div class="carousel-item" style="background-image: url(assets/client/img/mandir-image/slider2.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/client/img/mandir-image/slider3.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/client/img/mandir-image/slider5.jpg)"></div> --}}

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <section id="video" class="services services-bgvideo">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Live Video</h2>
                    <!-- <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p> -->
                </div>

                <div class="row gy-4">

                    <?php $video = App\Models\Video::where('status','live')->whereDate('created_at', \Carbon\Carbon::today())->get(); ?>
                    @foreach ($video as $videodata)
                        <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item1">
                                <iframe width="100%" height="500" src="{{ $videodata->videolink }}"
                                    title="{{ $videodata->videotitle }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen style="padding: 1rem;"></iframe>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Service Item -->
                </div>
            </div>
        </section>

        <section id="video" class="services services-bgvideo">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Video</h2>
                    <!-- <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p> -->
                </div>

                <div class="row gy-4">

                    <?php $video = App\Models\Video::where('status','normal')->get(); ?>
                    @foreach ($video as $videodata)
                        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item1">
                                <iframe width="100%" height="500" src="{{ $videodata->videolink }}"
                                    title="{{ $videodata->videotitle }}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen style="padding: 1rem;"></iframe>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Service Item -->
                </div>
            </div>
        </section>

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
                                <img src="{{ URL::asset('assets/client/img/mandir-image/mandirlogo.png') }}"
                                    alt="" style="width: 160px; height:160px;">
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
                                <img src="{{ URL::asset('assets/client/img/mandir-image/mandirlogo.png') }}"
                                    alt="" style="width: 160px; height:160px;">
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

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center "><i
            class="bi bi-arrow-up-short "></i></a>

    <div id="preloader "></div>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('assets/client/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/client/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('assets/client/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('assets/client/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/client/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/client/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ URL::asset('assets/client/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('assets/client/js/main.js') }}"></script>
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
