<?php

namespace App\Livewire;

use App\Models\Equipo;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarEquipo extends Component
{
    public $equipo_id;
    public $nombre;
    public $marca;
    public $modelo;
    public $numeroSerie;
    public $categoria;
    public $ubicacion;
    public $fechaAdquisicion;
    public $estado;
    public $imagen;
    public $nuevaImagen;

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
        'nuevaImagen' => 'nullable|image|max:1024',
    ];

    public function mount(Equipo $equipo)
    {
        $this->equipo_id = $equipo->id;
        $this->nombre = $equipo->nombre;
        $this->marca = $equipo->marca;
        $this->modelo = $equipo->modelo;
        $this->numeroSerie = $equipo->numeroSerie;
        $this->categoria = $equipo->categoria;
        $this->ubicacion = $equipo->ubicacion;
        $this->fechaAdquisicion = $equipo->fechaAdquisicion;
        $this->estado = $equipo->estado;
        $this->imagen = $equipo->imagen;
    }


    public function editarEquipo()
    {
        $datos = $this->validate();

        // validar si hay imagen nueva
        if ($this->nuevaImagen) {
            $imagen = $this->nuevaImagen->store('equipo', 'public');
            $datos['imagen'] = str_replace('equipo/', '', $imagen);
        }


        // Encontrar el equipo a editar
        $equipo = Equipo::find($this->equipo_id);
        // Asignar los nuevos valores
        $equipo->nombre = $datos['nombre'];
        $equipo->marca = $datos['marca'];
        $equipo->modelo = $datos['modelo'];
        $equipo->numeroSerie = $datos['numeroSerie'];
        $equipo->categoria = $datos['categoria'];
        $equipo->ubicacion = $datos['ubicacion'];
        $equipo->fechaAdquisicion = $datos['fechaAdquisicion'];
        $equipo->estado = $datos['estado'];
        $equipo->imagen = $datos['imagen'] ?? $equipo->imagen;
        // Guardar los cambios
        $equipo->save();

        session()->flash('mensaje', 'Equipo actualizado correctamente');

        return redirect()->route('dashboard');
    }



    public function render()
    {
        return view('livewire.editar-equipo');
    }
}
