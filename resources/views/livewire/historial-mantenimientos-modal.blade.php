<div>
    <!-- Botón que abre el modal -->
    <button 
        class="bg-gray-700 text-white px-3 py-2 rounded"
        wire:click="$set('showModal', true)">
        Ver historial de mantenimientos
    </button>

    <!-- Modal Overlay -->
    <div 
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50
               transition-opacity duration-300 {{ $showModal ? 'opacity-100 visible' : 'opacity-0 invisible' }}">
        
        <!-- Contenido del modal -->
        <div 
            class="bg-white rounded-lg shadow-lg p-6 w-2/3 transform transition-all duration-300
                   {{ $showModal ? 'scale-100 translate-y-0 opacity-100' : 'scale-95 -translate-y-5 opacity-0' }}">
            
            <h3 class="text-xl font-bold mb-4">Historial de Mantenimientos</h3>

            <ul class="space-y-2 max-h-80 overflow-y-auto">
                @forelse($mantenimientos as $m)
                    <li class="border-b pb-2">
                        <strong>{{ $m->fecha_programada }}</strong> - 
                        <a href="{{ route('mantenimientos.show', $m->id) }}"> {{ $m->descripcion ?? 'Sin descripción' }} </a>  
                        <br>
                        Técnico: <span class="font-semibold">{{ $m->tecnico->name }}</span> 
                        <span class="text-sm text-gray-500">[{{ $m->estado }}]</span>
                    </li>
                @empty
                    <li>No hay mantenimientos registrados.</li>
                @endforelse
            </ul>

            <div class="flex justify-end mt-4">
                <button 
                    class="bg-red-500 text-white px-3 py-2 rounded"
                    wire:click="$set('showModal', false)">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>
