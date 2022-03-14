<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookBorrow extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // hanya field id saja yg tidak boleh diisi

    public function book()
    {
        return $this->belongsTo(Book::class); // belongTo = 1 to 1, dan has Many = 1 to many
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function officer()
    {
        return $this->belongsTo(Officer::class);
    }
}
