<div>
    <h3>Historial de Mantenimientos</h3>
    <ul>
        @foreach($mantenimientos as $m)
            <li>
                <strong>{{ $m->fecha_programada }}</strong> - 
                {{ $m->descripcion }} 
                (Técnico: {{ $m->tecnico->name }})
                [{{ $m->estado }}]
            </li>
        @endforeach
    </ul>
</div>