<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryPonpesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PendaftarController;
use App\Models\GalleryPonpes;
use App\Models\Pengajar;
use App\Models\Mapel;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('pages.home',[
//         "pengajars" => Pengajar::all(),
//         "mapels" => Mapel::all()
//     ]);
// });
// manggil database

Route::get('/', function () {
    return view('pages.home',[
        "pengajars" => Pengajar::all(), 
        "gallerys" => GalleryPonpes::all(),
    ]);
});

Route::get('/pengajar   ', function () {
    return view('pages.pengajar',[
        "pengajars" => Pengajar::all(), 
        
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest')
;
Route::post('/login', [LoginController::class, 'authenticate']
);
Route::post('/logout', [LoginController::class, 'logout']
);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/pengajar', PengajarController::class)->middleware('auth');
Route::resource('/dashboard/mapel', MapelController::class)->middleware('auth');
Route::resource('/dashboard/gallery', GalleryPonpesController::class)->middleware('auth');
Route::post('/pendaftaran', [PendaftarController::class, 'store']);

Route::get('/pendaftaran', [PendaftarController::class, 'create']);
Route::resource('/dashboard/pendaftar', PendaftarController::class)->middleware('auth');
Route::get('/dashboard/pendaftar/{id}', [PendaftarController::class, 'show']);