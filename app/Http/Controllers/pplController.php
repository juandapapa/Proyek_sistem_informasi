<?php

namespace App\Http\Controllers;

use App\ppl;
use App\KelompokTani;
use Illuminate\Http\Request;

class pplController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppl = ppl::paginate(10);
        return view('Admin.ppl.index',compact('ppl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $KelompokTani = KelompokTani::all();
        return view ('Admin.ppl.create',compact('KelompokTani'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nip_ppl'=>'required|unique:ppl,nip_ppl|min:5',
            'ppl_name'=>'required|min:3',
            'kelompoktani_id'=> 'required'
        ]);

        $ppl = ppl::create([
            'nip_ppl'=> $request->nip_ppl,
            'ppl_name'=> $request->ppl_name,
            'kelompoktani_id'=>$request->kelompoktani_id
        ]);

        return redirect()->back()->with('success','Data PPL Berhasil Disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
