<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doanhnghiep_Loaihinh extends Model
{
    use HasFactory;

    protected $fillable = [
        'linhvuc_id',
        'tenloaihinh',
        'hinhanh',
        'mota',
    ];
}
