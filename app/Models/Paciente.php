<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table='paciente';
    protected $fillable = [
        'nombre',
        'apellidopaterno',
        'apellidomaterno',
        'ci',
        'telefono',
        'direccion',
        'email',
        'fechadenacimiento',
        'genero',
        'pais',
        'usuario_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class,'usuario_id');
    }
    public function diagnostico()
    {
        return $this->hasMany(Diagnostico::class,'paciente_id');
    }
}
