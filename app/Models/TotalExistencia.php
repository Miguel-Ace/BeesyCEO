<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalExistencia extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['id','cod_empresa','monto_total'];
}
