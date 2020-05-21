<?php

namespace App\Http\Controllers;

use App\Rdkk;
use App\ppl;
use App\KelompokTani;
use Illuminate\Http\Request;
class RdkkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan_rdkk = Rdkk::paginate(10);
        return view('Rdkk.index', compact('pengajuan_rdkk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('rdkk.create');
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
            'nama_kelompok'=>'required',
            'alamat'=>'required',
            'nama_pengecer'=>'required',
            'luas_tanah'=>'required',
            'jumlah_pupuk' => 'required',
            'waktu_penggunaan' => 'required'
        ]);
       Rdkk::create($request->all());
       
       return redirect('/pengajuan_rdkk')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rdkk = Rdkk::find($id);
        return view('rdkk.show',compact('rdkk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rdkk = Rdkk::find($id);
        return view('rdkk.edit', compact('rdkk'));
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
            'nama_kelompok'=>'required',
            'alamat'=>'required',
            'nama_pengecer'=>'required',
            'luas_tanah'=>'required',
            'jumlah_pupuk' => 'required',
            'waktu_penggunaan' => 'required'
        ]);
        Rdkk::where('id', $id)
            ->update([
                'nama_kelompok' => $request->nama_kelompok,
                'alamat' => $request->alamat,
                'nama_pengecer' => $request->nama_pengecer,
                'luas_tanah' => $request->luas_tanah,
                'jumlah_pupuk' => $request->jumlah_pupuk,
                'waktu_penggunaan' => $request->waktu_penggunaan,
                'status' => $request->status    
            ]);
        return  redirect('/pengajuan_rdkk')->with('success','data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rdkk::destroy($id);
        return redirect('/pengajuan_rdkk')->with('success','data berhasil dihapus');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        if($search !=''){
            $pengajuan_rdkk= Rdkk::where('nama_kelompok', 'LIKE', '%' . $search . '%')
            ->orWhere('alamat','LIKE', '%' .$search. '%')
            ->paginate(10)
            ->setpath('');

            if(count($pengajuan_rdkk) > 0){
                return view('rdkk.index', ['pengajuan_rdkk' => $pengajuan_rdkk]);
            }else{
                return view('rdkk.index')->with("No Results Fountd!");
            }
            

        }else {
            return view('rdkk.index')->with('data tidak ditemukan');
        }
        
      

    }
}
