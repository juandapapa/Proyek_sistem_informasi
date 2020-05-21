<?php

namespace App\Http\Controllers;

use App\KelompokTani;
use Illuminate\Http\Request;

class KelompokTaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KelompokTani = KelompokTani::paginate(10);
        return view('Admin.KelompokTani.index', compact('KelompokTani'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.KelompokTani.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kelompok'=>'required|unique:kelompok_tani|min:5',
            'Nama_Kelompok'=>'required|min:3',
            'Nama_Ketua'=>'required|min:3',
            'Jumlah_Anggota'=>'required'
        ]);

        KelompokTani::create($request->all());
        return redirect()->back()->with('success','Data Kelompok Tani Berhasil Disimpan');
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
        $KelompokTani = KelompokTani::findorfail($id);
        return view ('Admin.KelompokTani.edit',compact('KelompokTani')); 
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
        $request->validate([
            'id_kelompok'=>'required|min:5',
            'Nama_Kelompok'=>'required|min:3',
            'Nama_Ketua'=>'required|min:3',
            'Jumlah_Anggota'=>'required'
        ]);

        $KelompokTani_data=[
            'id_kelompok'=>$request->id_kelompok,
            'Nama_Kelompok'=>$request->Nama_Kelompok,
            'Nama_Ketua'=>$request->Nama_Ketua,
            'Jumlah_Anggota'=>$request->Jumlah_Anggota
        ];

        KelompokTani::whereId($id)->update($KelompokTani_data);

        return redirect()->route('KelompokTani.index')->with('success','Data KelompokTani Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $KelompokTani = KelompokTani::findorfail($id);
        $KelompokTani->delete();

        return redirect()->back()->with('success','KelompokTani Berhasil di Non Aktif-kan (Silahkan Cek Pada Trash Kelompok Tani)');
    }
    public function tampil_hapus(){
        $KelompokTani = KelompokTani::onlyTrashed()->paginate(10);
        return view('Admin.KelompokTani.delete',compact('KelompokTani'));
    }
    public function restore($id){
        $KelompokTani = KelompokTani::withTrashed()->where('id', $id)->first();
        $KelompokTani->restore();
        return redirect()->back()->with('success','Kelompok Tani Berhasil Di Aktif-kan (Silahka Cek Pada List Kelompok Tani)');
    }
    public function kill($id){
        $KelompokTani = KelompokTani::withTrashed()->where('id', $id)->first();
        $KelompokTani->forceDelete();

        return redirect()->back()->with('success','Data Kelompok Tani Berhasil Dihapus');
    }
}
 