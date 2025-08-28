<?php

namespace App\Livewire;

use App\Models\Equipo;
use Livewire\Component;

class MostrarEquipos extends Component
{

    protected $listeners = ['eliminarEquipo'];

    public function eliminarEquipo(Equipo $equipo)
    {
        $equipo->delete();
    }

    public function render()
    {
        $equipos = Equipo::where('user_id', auth()->user()->id)->paginate(10); 

        return view('livewire.mostrar-equipos', [
            'equipos' => $equipos
        ]);
    }
}
