<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instansi extends Model
{
    protected $table = "instansi";
    protected $fillable =['id_jenis_instansi','nama_instansi','alamat_instansi','no_tlp','fax','file'];
}
