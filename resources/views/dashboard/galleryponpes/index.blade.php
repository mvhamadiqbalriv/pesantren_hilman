@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Gallery PONPES</h1>
  </div>
  @if(session()->has('succes'))
  <div class="alert alert-primary col-lg-8" role="alert">
    {{ session('succes') }}
  </div>
  @endif
      <div class="table-responsive col-lg-8 justify-content-center align-items-center">
        <a class="btn btn-info mb-3" href="/dashboard/gallery/create">Tambahkan Gallery PONPES</a>
          <table class="table table-striped table-sm">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">Action</th>
                </tr>
                <tbody>
                    <div class="d-flex align-items-center">

                        @foreach ($gallerys as $gallery)
                        <tr>
                            <td>{{ $gallery->id }}</td>
                            <td><strong>{{ $gallery->name }}</strong></td>
                            <td><img style="max-height: 250px; width:200px" src="{{ Storage::url($gallery->image) }}" class="img-fluid"></td>
                            <td>
                                <form action="/dashboard/gallery/{{ $gallery->id }}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></button>
                                  </form></td>
                            
                        </tr>
                        @endforeach
                    </div>
                </tbody>
                </thead>
            </table>
        </div>


@endsection