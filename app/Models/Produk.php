<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'produk';
    protected $primaryKey = 'kode_produk';
    protected $fillable = [
        'kode_produk', 'kode_alias', 'kategory', 'nama_produk', 'brand_produk', 'ket', 'harga', 'harga_sale', 'stat', 'complement', 'image', 'promo',
        'harga_pokok', 'ket2', 'ket3', 'ket4', 'stock', 'sort_nr', 'max_buy_amount', 'disable', 'weight'
    ];
    protected $primaryKey = 'kode_produk';
    // public $incrementing = false;
    public function category()
    {
        return $this->belongsTo(Kategori::class, 'kategory', 'no_kategori');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_produk', 'no_brand');
    }
    public function stocked()
    {
        return $this->hasMany(ProdukStock::class, 'brand_produk', 'no_brand');
    }
    public function imaged()
    {
        return $this->hasOne(ProdukImage::class, 'produk_id', 'kode_produk');
    }
}
