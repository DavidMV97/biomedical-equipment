<div x-data="{ open: false }">
    <!-- Botón que abre el modal -->
    <button 
        class="bg-gray-700 text-white px-3 py-2 rounded"
        @click="open = true">
        Ver historial de mantenimientos
    </button>

    <!-- Modal -->
    <div 
        x-show="open"
        x-transition
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
        x-cloak>
        
        <div class="bg-white rounded-lg shadow-lg p-6 w-2/3">
            <h3 class="text-xl font-bold mb-4">Historial de Mantenimientos</h3>

            <ul class="space-y-2 max-h-80 overflow-y-auto">
                @forelse($mantenimientos as $m)
                    <li class="border-b pb-2">
                        <strong>{{ $m->fecha_programada }}</strong> - 
                        {{ $m->descripcion ?? 'Sin descripción' }}  
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
                    @click="open = false">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>
