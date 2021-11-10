<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'table_barang';
    protected $fillable = [
        'nama_barang',
        'deskripsi',
        'harga',
        'foto'
    ];
}
