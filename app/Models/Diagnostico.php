<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    use HasFactory;
    protected $table='diagnostico';

    public function agenda()
    {
        return $this->hasMany(Agenda::class,'diagnostico_id');
    }
    public function Recetamedica()
    {
        return $this->belongsTo(Recetamedica::class,'recetamedica_id');
    }
    public function paciente()
    {
        return $this->belongsTo(Paciente::class,'paciente_id');
    }
}
