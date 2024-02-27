<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doanhnghiep extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_loaihinh',
        'id_linhvuc',
        'tentiengviet',
        'tentienganh',
        'tenviettat',
        'email',
        'diachi',
        'mathue',
        'fax',
        'soluongnhansu',
        'ngaylap',
        'mota',
    ];
}
