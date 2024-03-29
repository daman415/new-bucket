<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    public function produks()
    {
        return $this->belongsTo(Produk::class);
    }

    protected $fillable = [
        'nama_jurusan',
        'kode_jurusan',
        'deskripsi_jurusan',
    ];
}
