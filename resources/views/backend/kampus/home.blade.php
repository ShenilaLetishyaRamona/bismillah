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
            <div class="col-lg-8">
                <section class="panel">
                    <header class="panel-heading">
                        Advanced Table
                    </header><br>
                    <a href="{{ Route('kampus.add') }}">
                        <button type="submit" class="btn btn-success btn-sm">Add Slider</button>
                    </a>
                        @if ($message = Session::get('success'))
                            <div class="col-lg-4">
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            </div>
                        @endif
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th><i class="icon_profile"></i> Nama Kampus</th>
                                <th><i class="icon_calendar"></i> Gambar</th>
                                <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                            @foreach($post as $k)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $k->nama_kampus }}</td>
                                <td><img src="{{ asset('images/kampus/'.$k->logo) }}" alt="{{ $k->nama_kampus }}" width="100px"></td>
                                <td>
                                    <form action="{{ route('kampus.destroy',$k->id) }}" method="post">

                                        <a class="btn btn-primary btn-sm" href="{{ route('slider.edit',$k->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
        <!-- page end-->
      </section>
@endsection