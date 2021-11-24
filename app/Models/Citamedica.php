<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citamedica extends Model
{
    use HasFactory;
    protected $table='citamedica';

    public function agenda()
    {
        return $this->hasMany(Agenda::class,'citamedica_id');
    }
    public function paciente()
    {
        return $this->belongsTo(Paciente::class,'paciente_id');
    }
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class,'especialidad_id');
    }
}
