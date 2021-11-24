<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $table='rol';
    protected $fillable = [
        'nombre',
      
    ];
    public function usuario()
    {
        return $this->hasMany(User::class,'rol_id');
    }
}
