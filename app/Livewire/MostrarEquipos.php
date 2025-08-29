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
        $equipos = Equipo::query()
            ->when(auth()->user()->rol !== 1 && auth()->user()->rol !== 3, function ($q) {
                $q->where('user_id', auth()->id());
            })
            ->paginate(10);

        return view('livewire.mostrar-equipos', [
            'equipos' => $equipos
        ]);
    }
}
