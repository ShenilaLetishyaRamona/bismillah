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
          <h2>Data Alumni Kampus {{ $kampus->nama_kampus }}</h2>
          <p>Data Alumni Kampus {{ $kampus->nama_kampus }}</p>
        </div>

        <div class="row">
          @foreach($post as $a)
            <div class="col-lg-5 col-sm-5 col-md-5 col-xs-5 d-flex align-items-stretch" data-aos="fade-up">
                <div class="box-image">
                    <div class="icon-box" style="height:200px;">
                        <div class="thumbnail" style="width:100%;">
                            <a href="{{ route('alumni',$a->id) }}" >
                            <img src="{{ asset('images/alumni/'. $a->foto) }}" class="img-circle" style="width:100%; height:180px; margin-top:-40px" alt="Lights" ><br>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div style="width:200%;position: relative; top:5%; left:10px;">
                    <p><b>Nama      : {{ $a->nama_lengkap }}</b></p>
                    <p><b>Alamat    : {{ $a->alamat }}</b></p>
                    <p><b>WhatsApp  : {{ $a->no_wa }}</b></p>
                    <p><b>Instagram : {{ $a->akun_ig }}</b></p>
                </div>
            </div>
          @endforeach
        </div>

      </div>
    </section>
@endsection