<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoPendienteProveedore extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['id','cod_empresa','saldo_pendiente'];
}
