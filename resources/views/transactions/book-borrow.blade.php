@extends('layout.main')

@section('container')
<div class="container mt-5">
    <form action="/book-borrow" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama_buku" class="form-label">Nama Buku</label>
            <select class="form-select @error('id_buku') is-invalid @enderror" name="id_buku" id="nama_buku">
                <option selected disabled>Pilih</option>
                @foreach ($books as $book)
                <option value="{{ $book->id }}">{{ $book->nama }}</option>
                @endforeach
            </select>

            @error('id_buku')
            <div class="invalid-feed text-danger">
                Pilih nama buku dengan benar!
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama_anggota" class="form-label">Nama Anggota</label>
            <select class="form-select @error('id_member') is-invalid @enderror" name="id_member" id="nama_anggota">
                <option selected disabled>Pilih</option>
                @foreach ($members as $member)
                <option value="{{ $member->id }}">{{ $member->nama }}</option>
                @endforeach
            </select>

            @error('id_buku')
            <div class="invalid-feed text-danger">
                Pilih nama anggota dengan benar!
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama_petugas" class="form-label">Nama Petugas</label>
            <select class="form-select @error('id_petugas') is-invalid @enderror" name="id_petugas" id="nama_petugas">
                <option selected disabled>Pilih</option>
                @foreach ($officers as $officer)
                <option value="{{ $officer->id }}">{{ $officer->nama }}</option>
                @endforeach
            </select>

            @error('id_buku')
            <div class="invalid-feed text-danger">
                Pilih nama petugas dengan benar!
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" id="tanggal_pinjam" name="tgl_pinjam" aria-describedby="textHelp">

            @error('id_buku')
            <div class="invalid-feed text-danger">
                Pilih tanggal pinjam dengan benar!
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control @error('tgl_kembali') is-invalid @enderror" id="tanggal_kembali" name="tgl_kembali" aria-describedby="textHelp">

            @error('id_buku')
            <div class="invalid-feed text-danger">
                Pilih tanggal kembali dengan benar!
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-4">Pinjam</button>
    </form>
</div>
@endsection