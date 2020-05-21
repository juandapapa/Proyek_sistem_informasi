@extends('template_backend.home')
@section('sub-judul','Rencanan Definitif Kebutuhan Kelompok')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session('success')}}
</div>
@endif


<div class="form-row">
    <div class="col">
    <a href="{{route('pengajuan_rdkk.create')}}" class="btn btn-info btn-sm">Tambah RDKK</a>
<br>
    </div>
    <div class="col">
        <form method="get" action="/pengajuan_rdkk/search" class="form-inline">
            @csrf
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search"
                name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</div>

@if(isset($pengajuan_rdkk))
<table class="table table-striped table-hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama  Kelompok</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach($pengajuan_rdkk as $result => $hasil)
    <tbody>
        <tr>
            <td>{{$result + $pengajuan_rdkk->firstitem()}}</td>
            <td>{{$hasil->nama_kelompok}}</td>
            <td>{{$hasil->alamat}}</td>
            <td><a href="{{route('pengajuan_rdkk.show',$hasil->id)}}" class="badge badge-infor"><i class="far fa-eye"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$pengajuan_rdkk->links()}}
@endif


@endsection()