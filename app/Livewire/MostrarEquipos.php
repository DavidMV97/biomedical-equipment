<?php

namespace App\Livewire;

use App\Models\Equipo;
use Livewire\Component;

class MostrarEquipos extends Component
{
    public function render()
    {
        $equipos = Equipo::where('user_id', auth()->user()->id)->paginate(1); 

        return view('livewire.mostrar-equipos', [
            'equipos' => $equipos
        ]);
    }
}
