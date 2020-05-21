@extends('template_backend.home')
@section('sub-judul','Tambah Kelompok Tani')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{Session('success') }}
    </div>
@endif

<form action="{{route('KelompokTani.store')}}" method="POST">
@csrf 

<div class="form-group">
    <label>ID Kelompok</label>
    <input type="text" class="form-control @error('id_kelompok') is-invalid @enderror" 
    name="id_kelompok" placeholder="Masukkan ID Kelompok" value="{{old('id_kelompok')}}">
    @error('id_kelompok')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label>Nama Kelompok</label>
    <input type="text" class="form-control @error('Nama_Kelompok') is-invalid @enderror" 
    name="Nama_Kelompok" placeholder="Masukkan Nama Kelompok" value="{{old('Nama_Kelompok')}}">
    @error('Nama_Kelompok')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label>Nama Ketua</label>
    <input type="text" class="form-control @error('Nama_Ketua') is-invalid @enderror" 
    name="Nama_Ketua" placeholder="Masukkan Nama Ketua" value="{{old('Nama_Ketua')}}">
    @error('Nama_Ketua')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label>Jumlah Anggota</label>
    <input type="text" class="form-control @error('Jumlah_Anggota') is-invalid @enderror" 
    name="Jumlah_Anggota" placeholder="Masukkan Jumlah Anggota" value="{{old('Jumlah_Anggota')}}">
    @error('Jumlah_Anggota')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="text-right">
   <button class="btn btn-info">Simpan Data</button>
</div>
</form>

@endsection