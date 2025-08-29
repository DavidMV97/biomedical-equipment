<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    public function show(Mantenimiento $mantenimiento)
    {
        return view('mantenimientos.show', compact('mantenimiento'));
    }

    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        $request->validate([
            'estado' => 'required|string'
        ]);

        $mantenimiento->update([
            'estado' => $request->estado
        ]);

        
        return redirect()->route('mantenimientos.show', $mantenimiento)
            ->with('success', 'Estado actualizado correctamente');
    }
}
