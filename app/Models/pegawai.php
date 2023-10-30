<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "pegawai";
    protected $fillable =['id_user','id_instansi','bagian','jabatan','alamat_user','no_tlp','file'];
}
