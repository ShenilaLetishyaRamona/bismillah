@extends('frontend.default')

@push('meta')
<meta name="author" content="">
<meta name="keywords" content="si alumni,alumni,sialumni">
<meta name="description" content="Website Alumni"/>
@endpush

@push('title')
    <title>Si Alumni</title>
@endpush


@section('content')

@include('frontend.partials.slider')
<!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section>

    <section id="data-alumni" class="services">
      <div class="container">

        <div class="section-title">
          <span>Data Kampus</span>
          <h2>Data Kampus</h2>
          <p>Data Alumni Kampus</p>
        </div>

        <div class="row">
          @foreach($post as $k)
          <div class="col-lg-3 col-sm-5 col-md-4 col-xs-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box" style="height:250px;">
              <div class="thumbnail" style="width:100%;">
                <a href="{{ route('alumni',$k->id) }}" >
                  <img src="{{ asset('images/kampus/'. $k->logo) }}" class="img-circle" style="width:100%; height:180px; margin-top:-40px" alt="Lights" ><br>
                  <div class="caption"><br>
                      <button class="btn btn-danger btn-block btn-sm">Data Alumni {{ $k->nama_kampus }}</button>
                  </div>
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>

@endsection