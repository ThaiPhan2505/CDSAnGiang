<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doanhnghiep_SDT extends Model
{
    use HasFactory;
    protected $doanhnghiepsdt = 'doanhnghiep_sdt';

    protected $fillable = [
        'id_doanhnghiep',
        'sdt',
        'loaisdt',
    ];
}
