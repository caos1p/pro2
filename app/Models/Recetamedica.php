<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recetamedica extends Model
{
    use HasFactory;
    protected $table='recetamedica';

    public function diagnostico()
    {
        return $this->hasMany(Diagnostico::class,'recetamedica_id');
    }
}
