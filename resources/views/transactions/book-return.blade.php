@extends('layout.main')

@section('container')
<div class="container mt-5">
    <form>
        <div class="mb-3">
            <label for="nama_buku" class="form-label">Nama Buku</label>
            <input type="text" class="form-control" id="nama_buku" aria-describedby="textHelp">
        </div>

        <div class="mb-3">
            <label for="nama_anggota" class="form-label">Nama Anggota</label>
            <input type="text" class="form-control" id="nama_anggota" aria-describedby="textHelp">
        </div>

        <div class="mb-3">
            <label for="nama_petugas" class="form-label">Nama Petugas</label>
            <input type="text" class="form-control" id="nama_petugas" aria-describedby="textHelp">
        </div>

        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control" id="tanggal_pinjam" aria-describedby="textHelp">
        </div>

        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control" id="tanggal_kembali" aria-describedby="textHelp">
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-4">Kembalikan</button>
    </form>
</div>
@endsection