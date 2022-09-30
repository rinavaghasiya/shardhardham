
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

            <a href="{{url('index')}}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{URL::asset('assets/client/img/mandir-image/mandirlogo.png')}}" alt="">
                <!-- <h1>UpConstruction<span>.</span></h1> -->
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{url('index')}}" class="active">Home</a></li>
                    <li><a href="#temple">Temple</a></li>
                    <li><a href="#swami">Swami</a></li>
                    <li><a href="#profile">Profile</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <!-- .navbar -->

        </div>
    </header>

<section id="testimonials1" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <!-- <div class="section-header">
            <h2>Testimonials</h2>
        </div> -->

        <div class="slides-2 swiper">
            <div class="swiper-wrapper">
                <?php $video=App\Models\Video::get();?>
                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        @foreach($video as $videodata)
                        <div class="testimonial-item">
                            <iframe width="560" height="315" src="{{ $videodata->videolink }}" frameborder="0" allowfullscreen>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End testimonial item -->

               

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>


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

