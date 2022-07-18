@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pendaftar</h1>
  </div>
  @if(session()->has('succes'))
  <div class="alert alert-primary col-lg-8" role="alert">
    {{ session('succes') }}
  </div>
  @endif
      <div class="table-responsive col-lg-8 justify-content-center align-items-center">
          <table class="table table-striped table-sm">
              <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NISN</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">NO HP</th>
                    <th scope="col">ASAL SEKOLAH</th>
                    <th scope="col">Action</th>
                </tr>
                <tbody>
                    <div class="d-flex align-items-center">

                        @foreach ($pendaftars as $pendaftar)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pendaftar->nisn }}</td>
                            <td><strong>{{ $pendaftar->name }}</strong></td>
                            <td>{{ $pendaftar->no_hp }}</td>
                            <td>{{ $pendaftar->asal_sekolah }}</td>
                            <td><a class="badge btn-info" href="/dashboard/pendaftar/{{ $pendaftar->id }}"><span data-feather="edit"></span></a>  
                                <form action="/dashboard/pendaftar/{{ $pendaftar->id }}" method="post" class="d-inline">
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