<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookBorrow;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('histories', [
            'title' => 'Riwayat Transaksi',
            'books' => Book::all(),
            'histories' => BookBorrow::all()
        ]);
    }
}
