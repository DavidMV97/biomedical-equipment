<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
     protected $fillable = [
        'user_id',
        'fecha_programada',
        'descripcion'
    ];
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function tecnico()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
