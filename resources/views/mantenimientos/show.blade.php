<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-2xl text-gray-800 leading-tight">
            {{ $mantenimiento->equipo->nombre }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-xl p-8 border border-gray-200">
                <!-- Título -->
                <h1 class="text-2xl font-bold text-gray-800 mb-6">📋 Detalle del Mantenimiento</h1>

                <!-- Información -->
                <div class="space-y-3 text-gray-700">
                    <p><span class="font-semibold text-gray-700">ID:</span> {{ $mantenimiento->id }}</p>
                    <p><span class="font-semibold text-gray-700">Equipo:</span> {{ $mantenimiento->equipo->nombre }}</p>
                    <p><span class="font-semibold text-gray-700">Técnico:</span> {{ $mantenimiento->tecnico->name }}</p>
                    <p><span class="font-semibold text-gray-700">Fecha programada:</span>
                        {{ $mantenimiento->fecha_programada }}</p>
                    <p><span class="font-semibold text-gray-700 block">Descripción:</span> {{ $mantenimiento->descripcion }}
                    </p>
                </div>

                <!-- Formulario -->
                <form class="mt-8">
                    @csrf
                    @method('PUT')

                    <label for="estado" class="block mb-2 text-sm font-medium text-gray-600">Estado:</label>
                    <select name="estado" id="estado"
                        class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                        <option value="pendiente">Pendiente</option>
                        <option value="en_proceso">En proceso</option>
                        <option value="finalizado">Finalizado</option>
                    </select>

                    <button type="submit"
                        class="mt-5 px-6 py-2 bg-blue-800 text-white font-medium rounded-lg shadow hover:bg-blue-700 transition">
                        Actualizar estado
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
