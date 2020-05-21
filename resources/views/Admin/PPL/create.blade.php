@extends('template_backend.home')
@section('sub-judul','Tambah PPL')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{Session('success') }}
    </div>
@endif

<form action="{{route('ppl.store')}}" method="POST">
@csrf 

<div class="form-group">
    <label>NIP PPL</label>
    <input type="text" class="form-control @error('nip_ppl') is-invalid @enderror" 
    name="nip_ppl" placeholder="Masukkan NIP PPL" value="{{old('nip_ppl')}}">
    @error('nip_ppl')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label>Nama PPL</label>
    <input type="text" class="form-control @error('ppl_name') is-invalid @enderror" 
    name="ppl_name" placeholder="Masukkan Nama PPL" value="{{old('ppl_name')}}">
    @error('ppl_name')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>
<div class="form-group">
    <label>Pilih Lokasi</label>
    <select class="form-control @error('kelompoktani_id') is-invalid @enderror" 
    name="kelompoktani_id" placeholder="asdasd" >
    @error('kelompoktani_id')
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
        <option value=""holder>Pilih Lokasi</option>
    @foreach($KelompokTani as $result)
        <option value="{{$result->id}}">{{$result->Nama_Kelompok}}</option>
        @endforeach
    </select>
</div>
<div class="text-right">
   <button class="btn btn-info">Simpan Data</button>
</div>
</form>

@endsection