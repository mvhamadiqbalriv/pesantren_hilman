@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Mata Pelajaran Baru</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/mapel" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <div class="form-group">
              <label for="name">Nama Mata Pelajaran</label>
              <input type="name" class="form-control" id="name" name="name">
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection