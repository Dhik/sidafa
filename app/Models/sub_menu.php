<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_menu extends Model
{
    protected $table = "sub_menu";
    protected $fillable =['id_menu','name','status'];
}
