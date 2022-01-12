<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.instansi.index',[
            'instansis' => Instansi::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.instansi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'email' => 'required|max:255|email',
            'kode_pos' => 'required|max:255',
            'domisili' => 'required|max:255',
            'image' => 'image|file'
        ]);

        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('instansi-images');
        }

        Instansi::create($validate);

        return redirect('/instansi')->with('success','Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function show(Instansi $instansi)
    {
        return view('dashboard.instansi.show',[
            'instansis' => Instansi::find($instansi)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function edit(Instansi $instansi)
    {
        return view('dashboard.instansi.edit',[
            'instansis' => Instansi::find($instansi)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instansi $instansi)
    {
        $rules = [
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'email' => 'required|max:255|email',
            'kode_pos' => 'required|max:255',
            'domisili' => 'required|max:255',
            'image' => 'image|file'
        ];

        $validate = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::deleted($request->oldImage);
            }
            $validate['image'] = $request->file('image')->store('instansi-images');
        }

        Instansi::where('id', $instansi->id)->update($validate);

        return redirect('/instansi')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instansi  $instansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instansi $instansi)
    {
        if($instansi->image){
            Storage::deleted($instansi->image);
        }

        Instansi::destroy($instansi->id);

        return redirect('/instansi')->with('success','Deleted Successfully!');
    }
}
