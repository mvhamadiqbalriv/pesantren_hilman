<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <title>Form Pendaftaran</title>
</head>
<body> 
    <a href="/" 
    class="btn btn-primary"
            style=
            "font-size: 16px;
            margin: 35px ;
            padding: 11px 16px;
            float: right;
            ">
            Kembali</a>
    <div >
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Form Pendaftaran Santri Baru</h3>
                        <p>Pondok Kaligrafi Hanjuang Hejo</p>
                        <form class="requires-validation"  method="post" action="/pendaftaran" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-12">
                               <input class="form-control" type="name" name="name" placeholder="Nama Lengkap" required id="name">
                             
                                <div class="invalid-feedback">Nama tidak boleh kosong!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail" required id="email">
                                 <div class="invalid-feedback">Email tidak boleh kosong!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="nisn" placeholder="NISN" required id="nisn">
                                <div class="invalid-feedback">NISN tidak boleh kosong!</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="no_hp" placeholder="NOMOR HP" required id="no_hp">
                                <div class="invalid-feedback">Nomor Hp tidak boleh kosong!</div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <label class="mb-3 mr-1" for="jenis_kelamin">Jenis Kelamin: </label>
    
                                <input type="radio" class="btn-check" name="jenis_kelamin" id="laki-laki" autocomplete="off" required  value="Laki-Laki">
                                <label class="btn btn-sm btn-outline-secondary" for="laki-laki">Laki-Laki</label>
    
                                <input type="radio" class="btn-check" name="jenis_kelamin" id="perempuan" autocomplete="off" required value="Perempuan">
                                <label class="btn btn-sm btn-outline-secondary" for="perempuan">Perempuan</label>
                                <div class="invalid-feedback mv-up">Jenis Kelamin tidak boleh kosong! Pilih salah satu</div>
                            </div> 
 
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="asal_sekolah" placeholder="Asal Sekolah" required id="asal_sekolah">
                                <div class="invalid-feedback">Asal Sekolah!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="alamat" placeholder="Alamat" required id="alamat">
                                <div class="invalid-feedback">Alamat !</div>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Upload Sertifikat Prestasi</label>
                                <input class="form-control" type="file" id="sertifikat_pres" name="sertifikat_pres">
                              </div>
                              <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Upload Foto</label>
                                <input class="form-control" type="file" id="foto_diri" name="foto_diri" multiple>
                              </div>
                              <div class="mb-3">
                                <label for="formFileDisabled" class="form-label">Upload Ijazah Terakhir</label>
                                <input class="form-control" type="file" id="ijazah" name="ijazah">
                              </div>
                              <div class="mb-3">
                                <label for="formFileSm" class="form-label">Upload KK</label>
                                <input class="form-control form-control-sm" id="kartu_kk" type="file" name="kartu_kk">
                              </div>

                              <div class="mb-3">
                                <label for="formFileSm" class="form-label">Upload Akte Kelahiran</label>
                                <input class="form-control form-control-sm" id="akta" type="file" name="akta">
                              </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">Saya mengkonfirmasi bahwa semua data benar</label>
                         <div class="invalid-feedback">
                            Harap konfirmasi bahwa semua data yang dimasukkan sudah benar!</div>
                        </div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Daftar
                                    
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;

}

html, body {
    height: 100%;
    background-color: #152733;
}


.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #fff;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


.btn-primary{
    background-color: #6C757D;
    outline: none;
    border: 0px;
     box-shadow: none;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback{
    color: #ff606e;
}

.valid-feedback{
   color: #2acc80;
}
</style>
<script src="site.js"></script>

</html>