@extends('layout.main')

@section('container')
<div class="container mt-5">
    <table class="table table-striped table-hover">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </thead>
        @foreach ($members as $member)
        <tbody>
            <th scope="col">{{ $member->id }}</th>
            <td>{{ $member->nama }}</td>
            <td>{{ $member->email }}</td>
            <td>{{ $member->no_telp }}</td>
            <td>{{ $member->alamat }}</td>
            <td>
                <a href="#" class="btn btn-sm btn-success">Perbarui</a>
                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tbody>
        @endforeach
    </table>
</div>
@endsection