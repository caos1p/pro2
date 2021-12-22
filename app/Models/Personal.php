<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $table='personal';

    public function usuario()
    {
        return $this->belongsTo(User::class,'usuario_id');
    }
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class,'especialidad_id');
    }
    public function horario()
    {
        return $this->belongsTo(Horario::class,'horario_id');
    }
    public function cargo()
    {
        return $this->belongsTo(Cargo::class,'cargo_id');
    }
    public function agenda()
    {
        return $this->hasMany(Agenda::class,'personal_id');
    }
    public function citamedica()
    {
        return $this->hasMany(Citamedica::class,'personal_id');
    }
    public function diagnostico()
    {
        return $this->hasMany(Diagnostico::class,'personal_id');
    }
}
