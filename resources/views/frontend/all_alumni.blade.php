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