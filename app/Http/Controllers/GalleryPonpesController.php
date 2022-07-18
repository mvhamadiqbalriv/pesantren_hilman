<?php

namespace App\Http\Controllers;

use App\Models\GalleryPonpes;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGalleryPonpesRequest;
use App\Http\Requests\UpdateGalleryPonpesRequest;
use Illuminate\Support\Facades\Storage;
class GalleryPonpesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.galleryponpes.index', [
            'gallerys'=> GalleryPonpes::all()
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galleryponpes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGalleryPonpesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image'
        ]);
        if($request->file('image')){
            $validatedData['image']=$request->file('image')->store('public/foto-gallery');
        }
        GalleryPonpes::create($validatedData);
        return redirect('/dashboard/gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GalleryPonpes  $galleryPonpes
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryPonpes $galleryPonpes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GalleryPonpes  $galleryPonpes
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryPonpes $gallery)
    {
        return view('dashboard.galleryponpes.edit', [
            'gallery' => GalleryPonpes::all(),
  
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryPonpesRequest  $request
     * @param  \App\Models\GalleryPonpes  $galleryPonpes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryPonpesRequest $request, GalleryPonpes $galleryPonpes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GalleryPonpes  $galleryPonpes
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryPonpes $gallery)
    {
        if($gallery->image){
            Storage::delete($gallery->image);
        }

GalleryPonpes::destroy($gallery->id);
return redirect('/dashboard/gallery')->with('succes','Gallery telah dihapus');
        }
    
}
