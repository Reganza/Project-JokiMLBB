<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListJoki extends Model
{
    protected $table = 'list_jokis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_joki',
        'jenis_joki',
        'harga',
        'stok',
        'keterangan',
    ];
}
