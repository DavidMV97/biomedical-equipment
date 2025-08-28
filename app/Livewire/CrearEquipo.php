<?php

namespace App\Livewire;

use App\Models\Equipo;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearEquipo extends Component
{

    public $nombre;
    public $marca;
    public $modelo;
    public $numeroSerie;
    public $categoria;
    public $ubicacion;
    public $fechaAdquisicion;
    public $estado;
    public $imagen;

    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'marca' => 'required|string',
        'modelo' => 'required|string',
        'numeroSerie' => 'required|string',
        'categoria' => 'required|string',
        'ubicacion' => 'required|string',
        'fechaAdquisicion' => 'required|date',
        'estado' => 'required|string',
        'imagen' => 'required|image|max:1024',
    ];

    public function crearEquipo()
    {
        $datos = $this->validate();

        // Almacenar imagen
        $imagen = $this->imagen->store('public/equipos');
        $datos['imagen'] = str_replace('public/equipos/', '', $imagen);

        // Crear equipo
        Equipo::create([
            'nombre' => $datos['nombre'],
            'marca' => $datos['marca'],
            'modelo' => $datos['modelo'],
            'numeroSerie' => $datos['numeroSerie'],
            'categoria' => $datos['categoria'],
            'ubicacion' => $datos['ubicacion'],
            'fechaAdquisicion' => $datos['fechaAdquisicion'],
            'estado' => $datos['estado'],
            'imagen' => $datos['imagen'],
            'user_id'  => auth()->user()->id
        ]);

        session()->flash('mensaje', 'Equipo creado correctamente');

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.crear-equipo');
    }
}
