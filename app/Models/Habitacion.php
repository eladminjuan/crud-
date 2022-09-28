<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $table ='habitaciones';
    public $timestamps = false;
    protected $fillable =
    ['numero', 'piso', 'descripcion', 'tipoHabitacion', 'precioDiario', 'estado'];
}
