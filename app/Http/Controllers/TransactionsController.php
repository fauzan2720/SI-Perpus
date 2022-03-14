<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookBorrow;
use App\Models\Member;
use App\Models\Officer;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function store(Request $request)
    {
        // $request->validate([
        $validatedData = $request->validate([
            'id_buku' => 'required|max:4',
            'id_member' => 'required|max:4',
            'id_petugas' => 'required|max:4',
            'tgl_pinjam' => 'required|max:255',
            'tgl_kembali' => 'required|max:255'
        ]);

        // dd('transaksi berhasil'); // untuk mengecek keberhasilan mengirim data
        BookBorrow::create($validatedData);
    }

    public function getName()
    {
        return view('transactions.book-borrow', [
            'title' => 'Peminjaman Buku',
            'books' => Book::all(),
            'members' => Member::all(),
            'officers' => Officer::all()
        ]);
    }
}
