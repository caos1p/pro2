<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    use HasFactory;
    protected $table='antecedentepersonal';

    public function paciente()
    {
        return $this->belongsTo(Paciente::class,'paciente_id');
    }
}
