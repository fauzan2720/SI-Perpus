<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/book-borrow', function () {
    return view('transactions.book-borrow', [
        'title' => 'Peminjaman Buku'
    ]);
});
Route::get('/book-return', function () {
    return view('transactions.book-return', [
        'title' => 'Pengembalian Buku'
    ]);
});

Route::get('/members', [MemberController::class, 'index']);
Route::get('/officers', [OfficerController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/histories', [HistoryController::class, 'index']);

// mengirim data dari MemberController ke view book-borrow
Route::get('/book-borrow', [TransactionsController::class, 'getName']);

// mengirim data/create data
Route::post('/book-borrow', [TransactionsController::class, 'store']);
