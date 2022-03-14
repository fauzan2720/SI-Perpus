<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function index()
    {
        return view('officers', [
            'title' => 'Data Petugas',
            'officers' => Officer::all()
        ]);
    }
}
