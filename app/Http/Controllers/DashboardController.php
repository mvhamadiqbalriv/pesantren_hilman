<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\Pendaftar;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pendaftar = Pendaftar::count();
        $pengajar = Pengajar::count();

        return view('dashboard.index')->with([
            'pendaftar' => $pendaftar,
            'pengajar' => $pengajar,
            'pengajars' => Pengajar::all(),
            'pendaftars' => Pendaftar::all()

        ]);
    }
}
