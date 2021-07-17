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
          <span>Edit Profile Saya</span>
          <h2>Edit Profile Saya</h2>
        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
          </div>

          <div class="col-lg-6">
            @foreach($post as $u)
                <form action="{{ route('profile.store', $u->id) }}" method="post">
                    @csrf
                    @method('PUT');
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $u->name }}" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $u->email }}" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" value="{{ $u->username }}" required>
                    </div><br>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
                @endforeach
          </div>

        </div>

      </div>
    </section>
@endsection