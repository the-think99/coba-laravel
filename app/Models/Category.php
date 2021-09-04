<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Perintah untuk hanya menjaga field id saja
    protected $guarded = ['id'];

    // Function bersifat public bisa di akses oleh semua orang
    // Function post ini untuk merelasi isi dari table category dan post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
