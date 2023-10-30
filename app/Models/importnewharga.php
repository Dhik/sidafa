<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class importnewharga extends Model
{
    protected $table = "tbl_harga";
    protected $fillable =['kode_barang','ukuran','harga','last_update','agen','stock','id_kecamatan','kwalitas','keterangan'];
}
