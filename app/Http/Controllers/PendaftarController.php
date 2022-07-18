<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Http\Requests\StorePendaftarRequest;
use App\Http\Requests\UpdatePendaftarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pendaftaran.index', [
            'pendaftars'=> Pendaftar::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pendaftaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePendaftarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePendaftarRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nisn' => 'required',
            'email'=> 'required',
            'jenis_kelamin'=> 'required',
            'no_hp'=> 'required',
            'asal_sekolah'=> 'required',
            'alamat' => 'required',
            'foto_diri' => 'image',
            'ijazah' => 'image',
            'akta' => 'image',
            'sertifikat_pres' => 'image',
            'kartu_kk' => 'image'
        ]);
        if($request->file('foto_diri')){
            $validatedData['foto_diri']=$request->file('foto_diri')->store('foto-pendaftar');
        }
        if($request->file('ijazah')){
            $validatedData['ijazah']=$request->file('ijazah')->store('foto-ijazah');
        }
        if($request->file('akta')){
            $validatedData['akta']=$request->file('akta')->store('foto-akta');
        }
        if($request->file('kartu_kk')){
            $validatedData['kartu_kk']=$request->file('kartu_kk')->store('foto-kartu_kk');
        }
        if($request->file('sertifikat_pres')){
            $validatedData['sertifikat_pres']=$request->file('sertifikat_pres')->store('foto-sertifikat_pres');
        }

        Pendaftar::create($validatedData);
        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftar $pendaftar)
    {
        return view('dashboard.pendaftaran.show', [
            'pendaftar' => $pendaftar
        
        ]); }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePendaftarRequest  $request
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePendaftarRequest $request, Pendaftar $pendaftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftar $pendaftar)
    {
        if($pendaftar->foto_diri){
            Storage::delete($pendaftar->foto_diri);
            }
            if($pendaftar->sertifikat_pres){
                Storage::delete($pendaftar->sertifikat_pres);
                }
                if($pendaftar->akta){
                    Storage::delete($pendaftar->akta);
                    }
                    if($pendaftar->kartu_kk){
                        Storage::delete($pendaftar->kartu_kk);
                        }
                        if($pendaftar->ijazah){
                            Storage::delete($pendaftar->ijazah);
                            }

Pendaftar::destroy($pendaftar->id);
return redirect('/dashboard/pendaftar')->with('succes','pendaftar telah dihapus');
    }
    }

