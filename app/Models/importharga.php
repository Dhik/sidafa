<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class importharga extends Model
{
    protected $table = "harga";
    protected $fillable =['id_jenis','nama','ukuran','harga','last_update','agen','stock','id_kecamatan'];
}
