<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books', [
            'title' => 'Data Buku',
            'books' => Book::all()
        ]);
    }
}
