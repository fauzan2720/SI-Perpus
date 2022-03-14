<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>{{ $title }}</title>
</head>

<body>
    <!-- awal navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid container">
            <a class="navbar-brand fw-bold" href="/">SI PERPUS</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" aria-current="page" href="#">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link {{ ($title === 'Data Buku' || $title === 'Data Anggota' || $title === 'Data Petugas') ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/officers">Data Buku</a></li>
                            <li><a class="dropdown-item" href="/members">Data Anggota</a></li>
                            <li><a class="dropdown-item" href="/books">Data Petugas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link {{ ($title === 'Peminjaman Buku' || $title === 'Pengembalian Buku' || $title === 'Riwayat Transaksi') ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Transaksi</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/book-borrow">Peminjaman Buku</a></li>
                            <li><a class="dropdown-item" href="/book-return">Pengembalian Buku</a></li>
                            <li><a class="dropdown-item" href="/histories">Riwayat Transaksi</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="d-flex">
                    <a class="btn btn-outline-light text-white btn-sm" href="#">Sign In</a>
                    <a class="btn btn-light text-primary mx-2 btn-sm" href="#">Sign Up</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- akhir navigasi -->

    @yield('container')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>