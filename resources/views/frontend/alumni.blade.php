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

        <?php $count = count($post) ?>
        @if(empty($count))
          <div class="col-lg-12">
            <div class="alert alert-danger">
                <p>Data Alumni Kampus {{ $kampus->nama_kampus }} Kosong</p>
            </div>
          </div>
        @endif
        <form class="form" method="get" action="{{ route('search', $kampus->id ) }}">
            <div class="form-group w-100 mb-3">
                <label for="search" class="d-block mr-2">Pencarian</label>
                <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan Nama Alumni">
                <button type="submit" class="btn btn-primary mb-1">Cari</button>
            </div>
          </form>
        <div class="row">
          @foreach($post as $a)
            <div class="col-lg-5 col-sm-5 col-md-5 col-xs-5 d-flex align-items-stretch" data-aos="fade-up">
                <div class="box-image">
                    <div class="icon-box" style="height:170px;">
                        <div class="thumbnail" style="width:100%;">
                            <a href="{{ route('alumni',$a->id) }}" >
                            <img src="{{ asset('images/alumni/'. $a->foto) }}" class="card-img" style="width:130px; height:150px; margin-top:-40px" alt="Lights" ><br>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div style="width:200%;position: relative; top:5%; left:10px;">
                    <label><b>Nama</b>    : {{ $a->nama_lengkap }}</label><br>
                    <label><b>Alamat    </b>: {{ $a->alamat }}</label><br>
                    <label><b>WhatsApp  </b>: {{ $a->no_wa }}</label>
                    <label><b>Instagram </b>: {{ $a->akun_ig }}</label><br>
                    <a href="{{ route('detail.alumni', $a->id) }}">
                      <button class="btn btn-danger btn-sm">Lihat Detail</button>
                    </a>
                </div>
            </div>
          @endforeach
        </div>

        <br><br>
        <div class="d-flex justify-content-center">
            {{ $post->links() }}
        </div>

      </div>
    </section>
@endsection