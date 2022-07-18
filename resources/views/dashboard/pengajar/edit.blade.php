@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Pengajar</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/pengajar/{{ $pengajar->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="nama" class="form-control" id="nama" name="nama" value="{{ old('nama', $pengajar->nama) }}">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="NIP">NIP</label>
                <input type="NIP" class="form-control" id="NIP" name="NIP" value="{{ old('NIP', $pengajar->NIP) }}">
              </div>
          </div>
        <div class="mb-3">
            <label for="mapel_id">Mata Pelajaran</label>
        <select class="form-select" name="mapel_id">
            @foreach($mapels as $mapel)
            @if (old('mapel_id', $pengajar->mapel_id) == $mapel->id)
            <option value="{{ $mapel->id }}" selected>{{ $mapel->name }}</option>
        @else
            <option value="{{ $mapel->id }}">{{ $mapel->name }}</option>
        @endif
            @endforeach
      </select>
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">Ganti Foto Pengajar</label>
    <input type="hidden" name="oldImage" value="{{ $pengajar->image }}">
    @if ($pengajar->image)
                    <img src="{{ asset('storage/' . $pengajar->image) }}"
                        class="img-preview img-fluid mb-3 mt-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 mt-3 col-sm-5">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                    onchange="previewImage()">
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

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection