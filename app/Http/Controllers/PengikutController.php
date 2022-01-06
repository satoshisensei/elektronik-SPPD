<?php

namespace App\Http\Controllers;

use App\Models\Pengikut;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class PengikutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pengikut.index',[
            'pengikuts' => Pengikut::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengikut.create');
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
            'nama' => 'required',
            'umur' => 'required',
            'hubungan' => 'required'
        ]);

        Pengikut::create($validate);
        return redirect('/pengikut')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengikut  $pengikut
     * @return \Illuminate\Http\Response
     */
    public function show(Pengikut $pengikut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengikut  $pengikut
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengikut $pengikut)
    {
        return view('dashboard.pengikut.edit',[
            'pengikuts' => Pengikut::find($pengikut)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengikut  $pengikut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengikut $pengikut)
    {
        $rules = [
            'nama' => 'required',
            'umur' => 'required',
            'hubungan' => 'required'
        ];

        $validate = $request->validate($rules);
        Pengikut::where('id',$pengikut->id)->update($validate);
        return redirect('/pengikut')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengikut  $pengikut
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengikut $pengikut)
    {
        Pengikut::destroy($pengikut->id);
        
        return redirect('/pengikut')->with('success','Deleted Successfully!');
    }

    public function data()
    {
        return Datatables::of(Pengikut::query())->make(true);
    }
}
