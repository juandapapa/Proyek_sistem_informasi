@extends('template_backend.home')
@section('sub-judul','Kelompok Tani')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{Session('success') }}
    </div>
@endif

<diV class="text-right">
    <a href="{{route('KelompokTani.create')}}" class="btn btn-info">Tambah Kelompok Tani</a>
</div>
<br>
<table class="table table_stripe table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Kelompok</th>
            <th>Nama Kelompok</th>
            <th>Nama Ketua</th>
            <th>Jumlah Anggota</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach($KelompokTani as $result => $hasil)
    <tbody>
        <td>{{$result + $KelompokTani->firstitem()}}</td>
        <td>{{$hasil->id_kelompok}}</td>
        <td>{{$hasil->Nama_Kelompok}}</td>
        <td>{{$hasil->Nama_Ketua}}</td>
        <td>{{$hasil->Jumlah_Anggota}}</td>
        <td>
            <a href = "{{route('KelompokTani.edit', $hasil->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{route('KelompokTani.destroy',$hasil->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" href = "" class="btn btn-warning btn-sm">Non Aktif</button>
                </form>
        </td>
    @endforeach
    </tbody>
</table>
{{$KelompokTani->links()}}
@endsection