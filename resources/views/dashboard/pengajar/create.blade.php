@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Pengajar Baru</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/pengajar" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="nama" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="NIP">NIP</label>
                <input type="NIP" class="form-control" id="NIP" name="NIP">
              </div>
          </div>
        <div class="mb-3">
            <label for="mapel_id">Mata Pelajaran</label>
        <select class="form-select" name="mapel_id">
            @foreach($mapels as $mapel)
            <option value="{{ $mapel->id }}">{{ $mapel->name }}</option>
            @endforeach
      </select>
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">Masukan Foto Pengajar</label>
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
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("change", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

        function previewImage() {

            const blob = URL.createObjectURL(image.files[0]);
imgPreview.src = blob;
    </script>
@endsection