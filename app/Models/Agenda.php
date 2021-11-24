<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table='agenda';
    public function medico()
    {
        return $this->belongsTo(Personal::class,'personal_id');
    }
    public function diagnostico()
    {
        return $this->belongsTo(Diagnostico::class,'diagnostico_id');
    }
    public function citamedica()
    {
        return $this->belongsTo(Citamedica::class,'citamedica_id');
    }
}
