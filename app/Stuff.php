<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    protected $table = 'stuff';
    //

    protected $fillable = ['id', 'nama_barang', 'tipe_barang', 'jumlah'];
}
