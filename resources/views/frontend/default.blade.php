<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    @stack('meta')

    <link href="{{ URL::asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ URL::asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ URL::asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    @stack('css')
    <link href="{{ URL::asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    @stack('title')
</head>

<body>

    @include('frontend.partials.mainheader')
    @include('frontend.partials.header')
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>Welcome to Day</h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>

    <main id="main">
        @yield('content')
    </main>
    @include('frontend.partials.footer')
  

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <script src="{{ URL::asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ URL::asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    @stack('script') 
    <script src="{{ URL::asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>