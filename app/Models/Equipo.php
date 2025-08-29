<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

    use HasFactory;

    protected $fillable = [
        'nombre',
        'marca',
        'modelo',
        'numeroSerie',
        'categoria',
        'ubicacion',
        'fechaAdquisicion',
        'estado',
        'imagen',
        'user_id'
    ];

    public function mantenimientos()
    {
        return $this->hasMany(Mantenimiento::class);
    }

    public function tecnico()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
