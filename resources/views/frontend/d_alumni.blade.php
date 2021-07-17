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
            @foreach($post as $d)
                <span>Data Alumni</span>
                <h2>Detail Data {{ $d->nama_lengkap }}</h2>
                <p>Detail Data {{ $d->nama_lengkap }}</p>
            @endforeach
        </div>

        <div class="row">
          @foreach($post as $a)
            <div class="col-lg-5 col-sm-5 col-md-5 col-xs-5 d-flex align-items-stretch" data-aos="fade-up">
                <div class="box-image">
                    <div class="icon-box" id="box-image">
                        <div class="thumbnail">
                            <a href="{{ route('alumni',$a->id) }}" >
                            <img src="{{ asset('images/alumni/'. $a->foto) }}" class="card-img" alt="Lights" ><br>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div id="box-text">
                    <label><b>Nama</b>    : {{ $a->nama_lengkap }}</label><br>
                    <label><b>Jenis Kelamin    </b>: {{ $a->jenis_kelamin }}</label><br>
                    <label><b>Alamat    </b>: {{ $a->alamat }}</label><br>
                    <label><b>Jurusan  </b>: {{ $a->jurusan }}</label>
                    <label><b>Fakultas </b>: {{ $a->fakultas }}</label><br>
                    <label><b>Angkatan  </b>: {{ $a->angkatan }}</label><br>
                    <label><b>Alumni </b>: {{ $a->alumni }}</label><br>
                    <label><b>WhatsApp  </b>: {{ $a->no_wa }}</label>
                    <label><b>Instagram </b>: {{ $a->akun_ig }}</label><br>
                </div>
            </div>
          @endforeach
        </div>

      </div>
    </section>
@endsection