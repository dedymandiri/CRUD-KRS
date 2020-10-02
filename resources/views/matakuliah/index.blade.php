@extends('layouts/master')

@section('title', 'Halaman Mata Kuliah')

@section('content')
<a href="/matkul/create" class="btn btn-success">Tambah matakuliah</a>

<br><br><br>

<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($matakuliah as $key => $matkul)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$matkul->kode_matkul}}</td>
                <td>{{$matkul->nama_matkul}}</td>
                <td>
                    <a href="/matkul/edit/{{$matkul->id}}" class="btn btn-warning">Edit</a>
                    <a href="/matkul/delete/{{$matkul->id}}" class="btn btn-danger" onclick="return confirm('Apa anda yakin?')">Delete</a>
                </td>
            </tr>
        @endforeach      
    </tbody>
</table>
@endsection