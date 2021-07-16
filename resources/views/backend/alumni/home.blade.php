@extends('backend.default')

@push('meta')
    <meta name="author" content="">
    <meta name="keywords" content="si alumni,alumni,sialumni">
    <meta name="description" content="Website Alumni"/>
@endpush

@push('title')
    <title>Admin | sialumni</title>
@endpush

@section('content')
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Data Alumni {{ $kampus->nama_kampus }}
                    </header><br>
                    <a href="{{ Route('kampus.add') }}">
                        <button type="submit" class="btn btn-success btn-sm">Add Alumni</button>
                    </a>
                        @if ($message = Session::get('success'))
                            <div class="col-lg-4">
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            </div>
                        @endif
                    <table class="table table-hover table-responsive">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th></i> Nama Lengkap</th>
                                <th></i> Jenis Kelamin</th>
                                <th></i> Alamat</th>
                                <th></i> Jurusan</th>
                                <th></i> Fakultas</th>
                                <th></i> Angkatan</th>
                                <th></i> Alumni</th>
                                <th></i> Nomor WhatsApp</th>
                                <th></i> Akun Instaram</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
      </section>
@endsection