<?php

namespace App\Livewire;

use App\Models\Equipo;
use Livewire\Component;

class HistorialMantenimientosModal extends Component
{
    public $equipo;

    public function render()
    {
        return view('livewire.historial-mantenimientos-modal', [
            'mantenimientos' => $this->equipo->mantenimientos()->with('tecnico')->latest()->get()
        ]);
    }
}
