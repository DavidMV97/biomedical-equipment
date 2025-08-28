<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{

    public function index()
    {
        return view('dashboard');
    }

    public function create()
    {
        return view('equipos.create');
    }

    public function show(Equipo $equipo)
    {
        //$this->authorize('view', $equipo);
        return view('equipos.show', [
            'equipo' => $equipo
        ]);
    }

    public function edit(Equipo $equipo)
    {
        //$this->authorize('update', $equipo);
        return view('equipos.edit', [
            'equipo' => $equipo
        ]);
    }
}
