<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Http\Requests\StorePengajarRequest;
use App\Http\Requests\UpdatePengajarRequest;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Storage;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('dashboard.pengajar.index', [
        'pengajars'=> Pengajar::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengajar.create', [
            'mapels' => Mapel::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengajarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengajarRequest $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required',
            'NIP' => 'required',
            'mapel_id' => 'required',
            'image' => 'image'
        ]);
        if($request->file('image')){
            $validatedData['image']=$request->file('image')->store('foto-pengajar');
        }
        Pengajar::create($validatedData);
        return redirect('/dashboard/pengajar');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajar $pengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajar $pengajar)
    {
        return view('dashboard.pengajar.edit', [
            'mapels' => Mapel::all(),
            'pengajar'=> $pengajar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengajarRequest  $request
     * @param  \App\Models\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengajar $pengajar)
    {
        $rules =[
            'nama' => 'required',
            'NIP' => 'required',
            'mapel_id' => 'required',
            'image' => 'image'
        ];
        $validatedData = $request->validate($rules);
        if($request->file('image')){
        if($request->oldImage){
            Storage::delete($request->oldImage);
            }
            $validatedData['image']=$request->file('image')->store('foto-pengajar');
        }
            
        
        
            Pengajar::where('id', $pengajar->id)->update($validatedData);
        return redirect('/dashboard/pengajar')->with('succes', 'Data Pengajar Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajar $pengajar)
    {
        if($pengajar->image){
            Storage::delete($pengajar->image);
            }

Pengajar::destroy($pengajar->id);
return redirect('/dashboard/pengajar')->with('succes','Pengajar telah dihapus');
    }
}
