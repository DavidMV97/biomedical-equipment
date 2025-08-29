<?php

namespace App\Livewire;

use App\Models\Equipo;
use App\Models\User;
use App\Notifications\NuevoMantenimiento;
use Livewire\Component;

class MantenimientosForm extends Component
{
    public $equipo;
    public $user_id;
    public $fecha_programada;
    public $descripcion;

    protected $rules = [
        'user_id' => 'required|exists:users,id',
        'fecha_programada' => 'required|date',
        'descripcion' => 'nullable|string',
    ];

    public function mount(Equipo $equipo)
    {
        $this->equipo = $equipo;
    }

    public function save()
    {
        $this->validate();

        $mantenimiento = $this->equipo->mantenimientos()->create([
            'user_id' => $this->user_id,
            'fecha_programada' => $this->fecha_programada,
            'descripcion' => $this->descripcion,
        ]);

        $this->reset(['user_id', 'fecha_programada', 'descripcion']);
        $this->dispatch('mantenimientoAgregado');

        $mantenimiento->tecnico->notify(new NuevoMantenimiento( $this->equipo->id, $this->equipo->nombre,$this->user_id));
        
        //auth()->user()->notify(new NuevoMantenimiento($this->equipo->id, $this->equipo->nombre,$this->user_id));

        //session()->flash('mensage', 'Mantenimiento asignado correctamente.');
        return redirect()->route('dashboard')->with('mensaje', 'Mantenimiento asignado correctamente.');;
    }

    public function render()
    {
        return view('livewire.mantenimientos-form', [
            // rol 3 es técnico
            'tecnicos' => User::where('rol', '3')->get()
        ]);
    }
}
