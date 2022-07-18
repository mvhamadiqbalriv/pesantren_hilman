@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah GALLERY Baru</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/gallery" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <div class="form-group">
              <label for="name">Nama</label>
              <input type="name" class="form-control" id="name" name="name">
            </div>
        </div>
<div class="mb-3">
    <label for="formFile" class="form-label">Masukan Foto</label>
    <img class="img-preview img-fluid mb-3 mt-3 col-sm-5" >
    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        function previewImage() {

            const blob = URL.createObjectURL(image.files[0]);
imgPreview.src = blob;
    </script>
@endsection