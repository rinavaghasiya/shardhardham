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

            <a href="{{ url('index') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ URL::asset('assets/client/img/mandir-image/mandirlogo.png') }}" alt="">
                <!-- <h1>UpConstruction<span>.</span></h1> -->
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('index') }}" class="active">Home</a></li>
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

        <!-- ======= Get Started Section ======= -->
        <section id="temple" class="get-started section-bg">
            <div class="container-fluid">
                <div class="section-header">
                    <h2>Temple</h2>
                    <!-- <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p> -->
                </div>
                <div class="row justify-content-between gy-4">

                    <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up">
                        <img src="{{ URL::asset('assets/client/img/mandir-image/1_4 - Photo.jpg') }}"
                            class="getstartedimage" alt="">
                    </div>
                    <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up">
                        <img src="{{ URL::asset('assets/client/img/mandir-image/1_6 - Photo.jpg') }}" alt=""
                            class="getstartedimage">
                    </div>
                    <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up">
                        <img src="{{ URL::asset('assets/client/img/mandir-image/1_8 - Photo.jpg') }}" alt=""
                            class="getstartedimage">
                    </div>
                    <div class="col-lg-3 d-flex align-items-center" data-aos="fade-up">
                        <img src="{{ URL::asset('assets/client/img/mandir-image/1_9 - Photo.jpg') }}" alt=""
                            class="getstartedimage">
                    </div>

                </div>

            </div>
        </section>
        <!-- End Get Started Section -->

        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Constructions</h2>
                    <!-- <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p> -->
                </div>

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card-bg"
                                        style="background-image: url(assets/client/img/mandir-image/c1.jpg);"></div>
                                </div>
                                <div class="col-xl-6 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                                        <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem
                                            placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia
                                            temporibus illo magnam. Dolor eos et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card-bg"
                                        style="background-image: url(assets/client/img/mandir-image/c2.jpg);"></div>
                                </div>
                                <div class="col-xl-6 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                                        <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum
                                            blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem
                                            architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card-bg"
                                        style="background-image: url(assets/client/img/mandir-image/c3.jpg);"></div>
                                </div>
                                <div class="col-xl-6 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Error beatae dolor inventore aut</h4>
                                        <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis
                                            numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia
                                            laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card-bg"
                                        style="background-image: url(assets/client/img/mandir-image/c4.jpg);"></div>
                                </div>
                                <div class="col-xl-6 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                                        <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos
                                            doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione
                                            dolores. Aut aliquid ea dolores libero nobis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                </div>

            </div>
        </section>
        <!-- End Constructions Section -->

        <!-- ======= Services Section ======= -->
        <section id="swami" class="services services-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Swami</h2>
                    <!-- <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p> -->
                </div>

                <div class="row gy-4">


                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item">
                            <img src="{{ URL::asset('assets/client/img/mandir-image/g1.png') }}" alt=""
                                class="getstartedimage1">
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item">
                            <img src="{{ URL::asset('assets/client/img/mandir-image/g2.png') }}" alt=""
                                class="getstartedimage1">
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item">
                            <img src="{{ URL::asset('assets/client/img/mandir-image/g3.png') }}" alt=""
                                class="getstartedimage1">
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item">
                            <img src="{{ URL::asset('assets/client/img/mandir-image/g4.png') }}" alt=""
                                class="getstartedimage1">
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item">
                            <img src="{{ URL::asset('assets/client/img/mandir-image/g5.png') }}" alt=""
                                class="getstartedimage1">
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item">
                            <img src="{{ URL::asset('assets/client/img/mandir-image/g6.png') }}" alt=""
                                class="getstartedimage1">
                        </div>
                    </div>
                    <!-- End Service Item -->

                </div>

            </div>
        </section>
        <!-- End Services Section -->


        <!-- ======= Features Section ======= -->
        <!-- <section id="features" class="features features-bg">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Ghanshyam Maharaj</h4>
                        </a>
                    </li>


                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Narayan muni dev</h4>
                        </a>


                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                <h4>harikrushna maharaj</h4>
                            </a>
                        </li>


                        <li class="nav-item col-3">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                <h4>Nar Narayan Dev</h4>
                            </a>
                        </li>

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-4 order-1 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/ghanshyam1.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>
                            <div class="col-lg-4 order-2 order-lg-2 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/ghanshyam2.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>
                            <div class="col-lg-4 order-3 order-lg-3 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/ghanshyam3.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-4 order-1 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/t4.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>
                            <div class="col-lg-4 order-2 order-lg-2 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/t5.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>
                            <div class="col-lg-4 order-3 order-lg-3 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/t8.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-4 order-1 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/t1.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>
                            <div class="col-lg-4 order-2 order-lg-2 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/t2.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>
                            <div class="col-lg-4 order-3 order-lg-3 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/harikrushna1.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-4 order-1 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/t8.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>
                            <div class="col-lg-4 order-2 order-lg-2 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <imassets/g src=/img/mandir-image/narnarayandev1.png" alt="" class="img-fluid" style="height: 500px; width: 70%;">
                            </div>

                        </div>
                    </div>
                    >

                </div>

            </div>
        </section> -->
        <!-- End Features Section -->

        <!-- Start Daily Darshan -->
        <section id="dailydarshan" class="darshan">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Daily Darshan</h2>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <?php $daily = App\Models\DailyDarshan::orderBy('id', 'desc')
                            ->LIMIT(9)
                            ->get(); ?>
                        @foreach ($daily as $data)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                    <img src="{{ url('dailydarshan_img') }}/{{ $data->dailyimg }}"
                                        class="img-fluid darshanimage" alt="">
                                    <div class="portfolio-info">
                                        <a href="{{ url('dailydarshan_img') }}/{{ $data->dailyimg }}"
                                            data-gallery="portfolio-gallery-remodeling"
                                            class="glightbox preview-link">
                                            <i class="bi bi-zoom-in"> </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{URL::asset('assets/client/img/mandir-image/15-08-Gm-Shangar.jpg')}}" class="img-fluid darshanimage" alt="">
                                <div class="portfolio-info">
                                    <a href="{{URL::asset('assets/client/img/mandir-image/15-08-Gm-Shangar.jpg')}}" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link">
                                        <i class="bi bi-zoom-in"> </i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{URL::asset('assets/client/img/mandir-image/15-08-Gh-Shangar.jpg')}}" class="img-fluid darshanimage" alt="">
                                <div class="portfolio-info">
                                    <a href="{{URL::asset('assets/client/img/mandir-image/15-08-Gh-Shangar.jpg')}}" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link">
                                        <i class="bi bi-zoom-in"> </i></a>

                                </div>
                            </div>
                        </div> --}}

                    </div>
                    <!-- End Daily Darshan Container -->

                </div>

            </div>
        </section>

        <!-- ======= Our Projects Section ======= -->
        <section id="gallery" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Gallery</h2>
                    <!-- <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p> -->
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">


                    <!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <?php $gallary = App\Models\Gallary::get(); ?>

                        @foreach ($gallary as $gallaryimg)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                    <img src="{{ url('gallary_img') }}/{{ $gallaryimg->gallaryimg }}"
                                        class="img-fluid galleryimage" alt="">
                                    <div class="portfolio-info">
                                        <a href="{{ url('gallary_img') }}/{{ $gallaryimg->gallaryimg }}"
                                            data-gallery="portfolio-gallery-remodeling"
                                            class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                        <!-- End Projects Item -->
                    </div>
                    <!-- End Projects Container -->

                </div>

            </div>
        </section>
        <!-- End Our Projects Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <!-- <div class="section-header">
                    <h2>Testimonials</h2>
                </div> -->

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ URL::asset('assets/client/img/mandir-image/s1.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <div class="service-item">
                                        <img src="{{ URL::asset('assets/client/img/mandir-image/s1.jpg') }}"
                                            alt="" class="getstartedimage2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ URL::asset('assets/client/img/mandir-image/g2.png') }}"
                                        class="testimonial-img" alt="">
                                    <div class="service-item">
                                        <img src="{{ URL::asset('assets/client/img/mandir-image/g2.png') }}"
                                            alt="" class="getstartedimage2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ URL::asset('assets/client/img/mandir-image/g3.png') }}"
                                        class="testimonial-img" alt="">
                                    <div class="service-item">
                                        <img src="{{ URL::asset('assets/client/img/mandir-image/g3.png') }}"
                                            alt="" class="getstartedimage2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ URL::asset('assets/client/img/mandir-image/g4.png') }}"
                                        class="testimonial-img" alt="">
                                    <div class="service-item">
                                        <img src="{{ URL::asset('assets/client/img/mandir-image/g4.png') }}"
                                            alt="" class="getstartedimage2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ URL::asset('assets/client/img/mandir-image/g5.png') }}"
                                        class="testimonial-img" alt="">
                                    <div class="service-item">
                                        <img src="{{ URL::asset('assets/client/img/mandir-image/g5.png') }}"
                                            alt="" class="getstartedimage2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ URL::asset('assets/client/img/mandir-image/g6.png') }}"
                                        class="testimonial-img" alt="">
                                    <div class="service-item">
                                        <img src="{{ URL::asset('assets/client/img/mandir-image/g6.png') }}"
                                            alt="" class="getstartedimage2">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->
        
        <!-- ======= Get Started Section ======= -->
        <section id="profile" class="get-started bg-image">
            <div class="container">
                <div class="section-header">
                    <h2>Profile</h2>
                </div>
                <div class="row justify-content-between gy-4">

                    <div class="col-lg-8 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h3>Our Mission</h3>
                            <p>Discribe the sportive acts of Lord Swaminarayan and his saints for Society and culture
                                with the hinduism.</p>
                            <p>Aware to people about morality of Lord Swaminarayan and his saver norms which are very
                                imortant to develop socio-cultureal generation.</p>
                            <p>Promulgate a consciousness of "SHIKSHAPATRI", "SATSANGI JIVAN" and "VACHNAMRUT" as it are
                                revealed by Lord Swaminarayan.</p>
                            <p>Well ordinary or systematicallypropagate spiritual knowledge to society and cultivate all
                                people or Human being in the technique of cultural and spiritual life for the social
                                betterment and spiritual enrichment of the human
                                society and peace in the world.</p>
                            <p>To conduct various philanthrophic and Humanitarian activites for needy people.</p>
                            <p>To provide Educational facility to poor and needy or unaffordable students.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center" data-aos="fade-up">
                        <img src="{{ URL::asset('assets/client/img/mandir-image/1_8 - Photo.jpg') }}" alt=""
                            srcset="" style="width: 100%; height:310px;">
                    </div>

                </div>

            </div>
        </section>
        <!-- End Get Started Section -->

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
