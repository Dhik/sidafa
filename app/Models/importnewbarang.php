<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class importnewbarang extends Model
{
    protected $table = "tbl_barang";
    protected $fillable =['id_jenis','kode_jenis','nama_barang','ket_barang','status'];
}
