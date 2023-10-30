<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class embed extends Model
{
    protected $table = "embed";
    protected $fillable =['id_menu','id_sub_menu','name','iframe','keterangan','status'];
}
