<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplazamiento extends Model
{
    use HasFactory;
    protected $table='emplazamientos';
    protected $fillable=['provincia_id','codigo_emplazamiento','denominacion_emplazamiento'];
}
