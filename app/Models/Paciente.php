<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = ['medicoId', 'direccionId', 'nombre', 'ap_paterno', 'ap_materno', 'edad'];
}
