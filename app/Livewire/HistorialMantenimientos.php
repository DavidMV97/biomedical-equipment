<?php

namespace App\Livewire;

use App\Models\Equipo;
use Livewire\Component;

class HistorialMantenimientos extends Component
{
    public $equipo;

    public function mount(Equipo $equipo)
    {
        $this->equipo = $equipo;
    }

    public function render()
    {
        return view('livewire.historial-mantenimientos', [
            'mantenimientos' => $this->equipo->mantenimientos()->with('tecnico')->latest()->get()
        ]);
    }
}
