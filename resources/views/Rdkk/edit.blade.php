@extends('template_backend.home')
@section('sub-judul','Edit Rencanan Definitif Kebutuhan Kelompok')
@section('content')

<form action="{{route('pengajuan_rdkk.update', $rdkk->id)}}" method="post">
    @method('patch')
    @csrf
    <div class="form-group">
        <label>Nama Kelompok Tani</label>
        <input type="text" class="form-control @error('nama_kelompok') is-invalid @enderror" name="nama_kelompok" value="{{$rdkk->nama_kelompok}}">
        @error('nama_kelompok')
        <div class="invalid-feedback">
            {{$message}}.
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Alamat Kelompok</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{$rdkk->alamat}}">
        @error('alamat')
        <div class="invalid-feedback">
            {{$message}}.
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Nama Pengecer</label>
        <input type="text" class="form-control @error('nama_pengecer') is-invalid @enderror" name="nama_pengecer" value="{{$rdkk->nama_pengecer}}">
        @error('nama_pengecer')
        <div class="invalid-feedback">
            {{$message}}.
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Luas Tanah</label>
        <input type="text" class="form-control @error('luas_tanah') is-invalid @enderror" name="luas_tanah" value="{{$rdkk->luas_tanah}}">
        @error('luas_tanah')
        <div class="invalid-feedback">
            {{$message}}.
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Jumlah Pupuk</label>
        <input type="text" class="form-control @error('jumlah_pupuk') is-invalid @enderror" name="jumlah_pupuk" value="{{$rdkk->jumlah_pupuk}}">
        @error('jumlah_pupuk')
        <div class="invalid-feedback">
            {{$message}}.
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label>Waktu Penggunaan</label>
        <input type="text" class="form-control @error('waktu_penggunaan') is-invalid @enderror" name="waktu_penggunaan" value="{{$rdkk->waktu_penggunaan}}">
        @error('jumlah_pupuk')
        <div class="invalid-feedback">
            {{$message}}.
        </div>
        @enderror
    </div>


    <div class="form-group">
        <label>Status</label>
        <input type="text" class="form-control" name="status" value="{{$rdkk->status}}">
    </div>
    <div class="form-group">
        <button class="btn btn-info btn-sm">Simpan</button>
    </div>
</form>


@endsection