@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengajar Di Ponpes</h1>
  </div>
  @if(session()->has('succes'))
  <div class="alert alert-primary col-lg-8" role="alert">
    {{ session('succes') }}
  </div>
  @endif
      <div class="table-responsive col-lg-8 justify-content-center align-items-center">
        <a class="btn btn-info mb-3" href="/dashboard/pengajar/create">Tambahkan Pengajar Baru</a>
          <table class="table table-striped table-sm">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIP</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">MATA PELAJARAN</th>
                    <th scope="col">Action</th>
                </tr>
                <tbody>
                    <div class="d-flex align-items-center">

                        @foreach ($pengajars as $pengajar)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pengajar->NIP }}</td>
                            <td><strong>{{ $pengajar->nama }}</strong></td>
                            <td><img style="max-height: 100px; width:50%" src="{{Storage::url($pengajar->image) }}" class="img-fluid"></td>
                            <td>{{ $pengajar->mapel->name}}</td>
                            <td><a class="badge btn-info" href="/dashboard/pengajar/{{ $pengajar->id }}/edit"><span data-feather="edit"></span></a>  
                                <form action="/dashboard/pengajar/{{ $pengajar->id }}" method="post" class="d-inline">
                                    @method('delete')
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