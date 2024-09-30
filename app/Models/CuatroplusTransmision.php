<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuatroplusTransmision extends Model
{
    use HasFactory;
    protected $table='cuatroplus_transmisiones';
    protected $fillable =['obra_id','atlas_jalones','atlas_velocidad'];
}
