<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PONPES | ADMIN DASHBOARD</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  {{-- Trix Editor --}}
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>
  <style>
    trix-toolbar [data-trix-button-group='file-tools']{
      display:none;
    }
  </style>
<link rel="stylesheet" href="css/dashboard.css">
  </head>
  <body>
    
    
    <div class="container d-flex justify-content-center align-content-center">
        <div class="row d-flex justify-content-center">
        @foreach ($pengajars as $pengajar)
<div class="col-lg-3 col-md-2 mt-2 p-2">
        <div class="card d-flex text-center mx-2" style="height:400px; width:300px">
          <div class="d-flex justify-content-center">
          <img src="{{ asset('storage/'. $pengajar->image) }}" class="card-img-top" alt="foto {{ $pengajar->nama }}" style="height:250px; width:190px">
        </div>
          <div class="card-body">
            <h5 class="card-title m-1">{{ $pengajar->nama }}</h5>
            <p class="card-text m-1">{{ $pengajar->NIP }}</p>
            <p class="card-text m-1">Guru {{ $pengajar->mapel->name }}</p>
          </div>
        </div>
      </div>
   
        

            @endforeach
          </div>

    </div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    </main>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>
<script src="/js/dashboard.js"></script>

  </body>
</html>
