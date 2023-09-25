<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KirimData extends Model
{
    use HasFactory;

    protected $table = 'tb_grafik';
    protected $primaryKey = 'id';
    protected $fillable = ['suhu', 'kelembaban'];
    public $timestamps = false;
}
