<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabreplanteo extends Model
{
    use HasFactory;
    protected $table = 'cabreplanteos';
    protected $fillable = ['obra_id'];
}
