<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSensor extends Model
{
    use HasFactory;

    protected $table = 'tb_sensor';
    protected $primaryKey = 'id';
    protected $fillable = ['suhu', 'kelembaban'];
}
