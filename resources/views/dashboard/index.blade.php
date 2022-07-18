@extends('dashboard.layouts.main')
@section('container')
<!-- Animated -->
<br>
<br>
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                 <span class="count">{{ $pendaftar }}</span>
                                <div class="stat-heading">Jumlah Pendaftaran Baru</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-cart"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{ $pengajar }}</span></div>
                                <div class="stat-heading">Jumlah Pengajar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->
    <!--  /Traffic -->
    <br>
    <br>
    <div class="orders">
        <div class="row">
            <div class="col-xl-12 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Siswa yang baru daftar </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NISN</th>
                                <th>NAMA</th>
                                <th>Nomor HP</th>
                                <th>Email</th>
                                <th>Asal Sekolah</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($pendaftars as $pendaftar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                <td>{{ $pendaftar->nisn }}</td>
                                <td>{{ $pendaftar->name }}</td>
                                <td>{{ $pendaftar->no_hp }}</td>
                                <td>{{ $pendaftar->email }}</td>
                                <td>{{ $pendaftar->asal_sekolah }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center p-5">
                                    Data tidak tersedia
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div> <!-- /.card -->
            </div>  <!-- /.col-lg-8 -->


        </div>
    </div>
  <!-- .animated -->
@endsection

@push('after-script')
    <!--Local Stuff-->

@endpush
