<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notificaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-center my-10">Mis notificaiones</h1>
                    @forelse ($notificaciones as $notificacion)
                        <div class="border border-gray-200 rounded-lg p-4 mb-4">
                            <p class="text-lg">{{ $notificacion->data['mensaje'] }}</p>
                            <p class="text-sm text-gray-500">Recibido el {{ $notificacion->created_at->diffForHumans() }}</p>
                        </div>
                    @empty
                        <p>No hay notificaiones nuevas</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
