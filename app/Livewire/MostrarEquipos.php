<?php

namespace App\Livewire;

use App\Models\Equipo;
use Livewire\Component;
use Livewire\WithPagination;


class MostrarEquipos extends Component
{


    use WithPagination;
    public $search = '';

    protected $listeners = ['eliminarEquipo'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

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
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('nombre', 'like', '%' . $this->search . '%')
                        ->orWhere('marca', 'like', '%' . $this->search . '%')
                        ->orWhere('estado', 'like', '%' . $this->search . '%');
                });
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('livewire.mostrar-equipos', [
            'equipos' => $equipos
        ]);
    }
}
