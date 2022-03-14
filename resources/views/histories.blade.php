@extends('layout.main')

@section('container')
<div class="container mt-5">
    <table class="table table-striped table-hover">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Nama Anggota</th>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </thead>
        @foreach ($histories as $history)
        <tbody>
            <th scope="col">{{ $history->id }}</th>
            <!-- $history->book->nama -> untuk join tabel -->
            <td>{{ $history->book->nama }}</td>
            <td>{{ $history->id_member }}</td>
            <td>{{ $history->id_petugas }}</td>
            <td>{{ $history->tgl_pinjam }}</td>
            <td>{{ $history->tgl_kembali }}</td>
            <td class="{{ ($history->status === 'Belum dikembalikan') ? 'text-danger' : 'text-success' }}">{{ $history->status }}</td>
            <td>
                <a href="#" class="btn btn-sm btn-success">Perbarui</a>
                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tbody>
        @endforeach
    </table>
</div>
@endsection