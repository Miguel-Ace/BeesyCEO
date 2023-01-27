<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVentaDiario extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['id','cod_empresa','num_ventas_rpt','tipo','cod_cliente','nombre_cliente','fecha','sub_total','igv','num_documento'];
}
