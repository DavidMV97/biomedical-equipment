<div class="bg-white overflow-hidden sm:rounded-lg">
    <!-- Buscador -->
    <div class="mb-4">
        <input type="text" wire:model.live="search" placeholder="Buscar equipo por nombre, marca o estado..."
            class="w-full md:w-1/3 border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        @forelse ($equipos as $equipo)
            <div  wire:key="equipo-{{ $equipo->id }}" class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="{{ route('equipos.show', $equipo->id) }}" class="text-xl font-bold hover:underline">
                        {{ $equipo->nombre }}
                    </a>
                    <p class="text-sm text-gray-600 font-bold"> Marca: {{ $equipo->marca }} </p>
                    <p class="text-sm text-gray-500 capitalizes"> Estado: {{ $equipo->estado }} </p>
                </div>

                <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                    <livewire:historial-mantenimientos-modal :equipo="$equipo" />
                    <a href="{{ route('equipos.edit', $equipo->id) }}"
                        class="md:flex md:items-center bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center hover:bg-blue-700">Editar</a>
                    <button type="button" wire:click="$dispatch('confirmarEliminar', {{ $equipo->id }})"
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center hover:bg-red-500">Eliminar</button>
                </div>
            </div>
        @empty
            <p class="p-3 text-center text-gray-600">No hay equipos</p>
        @endforelse


        <div class="mt-10">
            {{ $equipos->links() }}
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('livewire:initialized', () => {
                @this.on('confirmarEliminar', equipoId => {
                    Swal.fire({
                        title: '¿Eliminar Equipo?',
                        text: "¡Un equipo eliminado no se puede recuperar!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, Eliminar!',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // ELiminar el equipo en el backend
                            @this.call('eliminarEquipo', equipoId);
                            Swal.fire(
                                'Equipo Eliminado!',
                                'El equipo se eliminó correctamente.',
                                'success'
                            )
                        }
                    })
                })
            })
        </script>
    @endpush
