@extends('template_backend.home')
@section('sub-judul',' Detail Rencanan Definitif Kebutuhan Kelompok')
@section('content')

<h5 class="card-title">Detail Kelompok Tani</h5>
<div class="card" style="width: 40rem;">
    <div class="card-body">

        <table class="table table-borderless">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Nama Kelompok</th>
                    <td>{{$rdkk->nama_kelompok}}</td>
                </tr>
                <tr>
                    <th scope="row">Alamat</th>
                    <td>{{$rdkk->alamat}}</td>
                </tr>
                <tr>
                    <th scope="row">Nama Pengecer</th>
                    <td>{{$rdkk->nama_pengecer}}</td>
                </tr>
                <tr>
                    <th scope="row">Luas Tanah</th>
                    <td>{{$rdkk->luas_tanah}}</td>
                </tr>
                <tr>
                    <th scope="row">Jumlah Pupuk</th>
                    <td>{{$rdkk->jumlah_pupuk}}</td>
                </tr>
                <tr>
                    <th scope="row">Waktu Penggunaan</th>
                    <td>{{$rdkk->waktu_penggunaan}}</td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td>{{$rdkk->status}}</td>
                </tr>
            </tbody>
        </table>
    

    </div>
</div>
     <a href="{{route('pengajuan_rdkk.edit',$rdkk->id)}}" class="btn btn-primary"> Edit</a>

        <form action="{{route('pengajuan_rdkk.destroy',$rdkk->id)}}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger"> Hapus</button>
        </form>
        <a href="{{route('pengajuan_rdkk.index')}}" class="card-link">Kembali</a>

@endsection()
