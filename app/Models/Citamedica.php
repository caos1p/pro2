<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citamedica extends Model
{
    use HasFactory;
    protected $table='citamedica';
    protected $fillable = [
        'title',
        'start',
        'end',
        'paciente_id',
        'personal_id',
      
    ];

    public function agenda()
    {
        return $this->hasMany(Agenda::class,'citamedica_id');
    }
    
    public function diagnostico()
    {
        return $this->hasMany(Diagnostico::class,'citamedica_id');
    }
    public function paciente()
    {
        return $this->belongsTo(Paciente::class,'paciente_id');
    }
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class,'especialidad_id');
    }
    public function personal()
    {
        return $this->belongsTo(Personal::class,'personal_id');
    }
}
