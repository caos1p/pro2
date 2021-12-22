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
    public function recetamedica()
    {
        return $this->hasMany(Recetamedica::class,'diagnostico_id');
    }
    public function personal()
    {
        return $this->belongsTo(Personal::class,'personal_id');
    }
    public function citamedica()
    {
        return $this->belongsTo(Citamedica::class,'citamedica_id');
    }
}
