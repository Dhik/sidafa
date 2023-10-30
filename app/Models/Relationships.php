<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationships extends Model
{
    use HasFactory;
    protected $table = "cctv_jogja";
    protected $fillable =['idc','location','name','connection','stream-url','stream-thumbnail','connection'];
}
