<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CotizacionesDiaria extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = ['id','cod_empresa','fecha','monto_total'];
}
