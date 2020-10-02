@extends('layouts/master')

@section('title', 'Halaman Mahasiswa')

@section('content')
<a href="/mahasiswa/create" class="btn btn-success">Tambah Mahasiswa</a>

<br><br><br>

<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Tanggal Lahir</th>
            <th>Tahun Masuk</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mahasiswa as $key => $mhs)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->gender}}</td>
            <td>{{$mhs->tgl_lahir}}</td>
            <td>{{$mhs->tahun_masuk}}</td>
            <td>
                <a href="/mahasiswa/edit/{{$mhs->id}}" class="btn btn-warning">Edit</a>
                <a href="/mahasiswa/delete/{{$mhs->id}}" class="btn btn-danger" onclick="return confirm('Apa anda yakin?')">Delete</a>
            </td>
        </tr>
    @endforeach      
    </tbody>
</table>
@endsection

