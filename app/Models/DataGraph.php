<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGraph extends Model
{
    use HasFactory;

    protected $table = 'tb_grafik';

    protected $fillable = [
        'suhu',
        'kelembaban',
        'tanggal',
    ];
}
