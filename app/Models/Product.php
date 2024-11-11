<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'stok',
        'kategori_id'
    ];

    public function kategori() :BelongsTo {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
