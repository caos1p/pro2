<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;
    protected $table='especialidad';
    protected $fillable = [
        'nombre',
        'descripcion',

    ];
    public function personal()
    {
        return $this->hasMany(Personal::class,'especialidad_id');
    }
    public function citamedica()
    {
        return $this->hasMany(Citamedica::class,'especialidad_id');
    }

}
