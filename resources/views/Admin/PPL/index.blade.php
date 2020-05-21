@extends('template_backend.home')
@section('sub-judul','PPL')
@section('content')

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{Session('success') }}
    </div>
@endif

<diV class="text-right">
    <a href="{{route('ppl.create')}}" class="btn btn-info">Tambah PPL</a>
</div>
<br>
<table class="table table_stripe table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>NIP PPL</th>
            <th>Nama PPL</th>
            <th>Lokasi</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach($ppl as $result => $hasil)
    <tbody>
        <td>{{$result + $ppl->firstitem()}}</td>
        <td>{{$hasil->nip_ppl}}</td>
        <td>{{$hasil->ppl_name}}</td>
        <td>{{$hasil->kelompoktani->Nama_Kelompok}}</td>
        <td>
            <a href = "" class="btn btn-primary btn-sm">Edit</a>
                <form action="" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" href = "" class="btn btn-warning btn-sm">Non Aktif</button>
                </form>
        </td>
    @endforeach
    </tbody>
</table>
{{$ppl->links()}}
@endsection