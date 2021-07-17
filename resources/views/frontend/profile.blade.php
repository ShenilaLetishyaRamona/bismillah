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
          <span>Profile Saya</span>
          <h2>Profile Saya</h2>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif

        <div class="row">
          @foreach($post as $a)
            <div class="col-lg-5 col-sm-5 col-md-5 col-xs-5 d-flex align-items-stretch" data-aos="fade-up">
                
                <div style="width:200%;position: relative; top:5%; left:10px;">
                    <label><b>Nama</b>    : {{ $a->name }}</label><br>
                    <label><b>Email </b>: {{ $a->email }}</label><br>
                    <label><b>Username </b>: {{ $a->username }}</label><br>
                    <a href="{{ route('edit.profile', $a->id) }}">
                      <button class="btn btn-danger btn-sm">Edit Profile</button>
                    </a>
                </div>
            </div>
          @endforeach
        </div>

      </div>
    </section>
@endsection