<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cctv_jogja extends Model
{
    use HasFactory;

    protected $table = 'cctv_jogja';
    protected $fillable =['idc','location','name','stream-url','stream-thumbnail','connection'];
}
