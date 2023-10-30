<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_instansi extends Model
{
    protected $table = "jenis_instansi";
    protected $fillable =['name','keterangan'];
}