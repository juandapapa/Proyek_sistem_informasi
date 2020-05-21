@extends('template_backend.home')
@section('sub-judul','Edit Kelompok Tani')
@section('content')

<form action="{{route('KelompokTani.update', $KelompokTani->id)}}" method="POST">
@method('patch')
@csrf 

<div class="form-group">
    <label>ID Kelompok</label>
    <input type="text" class="form-control @error('id_kelompok') is-invalid @enderror" 
    name="id_kelompok" value="{{$KelompokTani->id_kelompok}}">
    @error('id_kelompok')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label>Nama Kelompok</label>
    <input type="text" class="form-control @error('Nama_Kelompok') is-invalid @enderror" 
    name="Nama_Kelompok" value="{{$KelompokTani->Nama_Kelompok}}">
    @error('Nama_Kelompok')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label>Nama Ketua</label>
    <input type="text" class="form-control @error('Nama_Ketua') is-invalid @enderror" 
    name="Nama_Ketua" value="{{$KelompokTani->Nama_Ketua}}">
    @error('Nama_Ketua')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label>Jumlah Anggota</label>
    <input type="text" class="form-control @error('Jumlah_Anggota') is-invalid @enderror" 
    name="Jumlah_Anggota" value="{{$KelompokTani->Jumlah_Anggota}}">
    @error('Jumlah_Anggota')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="text-right">
   <button class="btn btn-info">Ubah Data</button>
</div>
</form>


@endsection