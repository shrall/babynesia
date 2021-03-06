<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'news';
    protected $fillable = [
        'no', 'sumber', 'judul', 'isi', 'tanggal', 'urutan'
    ];
    protected $primaryKey = 'no';
    // public $incrementing = false;
}
