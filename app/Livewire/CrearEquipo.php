<?php

namespace App\Livewire;

use App\Models\Equipo;
use Livewire\Component;

class CrearEquipo extends Component
{

    protected $rules = [
        'titulo' => 'required|string',
        'salario' => 'required',
        'categoria' => 'required',
        'empresa' => 'required',
        'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:1024'
    ];

    public function crearVacante()
    {
        $datos = $this->validate();

        // Almacenar imagen
        $imagen = $this->imagen->store('public/equipos');
        $datos['imagen'] = str_replace('public/equipos/', '', $imagen);

        // Crear equipo
        Equipo::create([
            'titulo' => $datos['titulo'],
            'salario_id'  => $datos['salario'],
            'categoria_id'  => $datos['categoria'],
            'empresa'  => $datos['empresa'],
            'ultimo_dia'  => $datos['ultimo_dia'],
            'descripcion'  => $datos['descripcion'],
            'imagen'  => $datos['imagen'],
            'user_id'  => auth()->user()->id
        ]);

        session()->flash('mensaje', 'Equipo creado correctamente');

        return redirect()->route('equipos.index');
    }

    public function render()
    {
        return view('livewire.crear-equipo');
    }
}
