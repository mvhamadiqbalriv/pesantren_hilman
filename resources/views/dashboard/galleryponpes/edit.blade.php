@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Mata Pelajaran</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/gallery/{{ $gallery->id }}" enctype="form-data">
        @csrf
        @method('put')
        <div class="mb-3">
          <div class="form-group">
              <label for="name">Nama Gallery</label>
              <input type="name" class="form-control" id="name" name="name" value="{{ old('name', $mapel->name) }}">
            </div>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Ganti Foto gallery</label>
          <input type="hidden" name="oldImage" value="{{ $gallery->image }}">
          @if ($gallery->image) 
                          <img src="{{ Storage::url($gallery->image) }}"
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