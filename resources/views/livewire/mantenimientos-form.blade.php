<div class="max-w-lg mx-auto bg-white shadow-md rounded-2xl p-6">
    <form wire:submit.prevent="save" class="space-y-5">
        <!-- Técnico -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Técnico</label>
            <select wire:model="user_id"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-800 focus:border-blue-800">
                <option value="">Seleccione un técnico</option>
                @foreach ($tecnicos as $tecnico)
                    <option value="{{ $tecnico->id }}">{{ $tecnico->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Fecha programada -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Fecha Programada</label>
            <input type="date" wire:model="fecha_programada"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-800 focus:border-blue-800">
        </div>

        <!-- Descripción -->
        <div>
            <label class="block text-gray-700 font-semibold mb-2">Descripción</label>
            <textarea wire:model="descripcion"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-800 focus:border-blue-800" rows="4"></textarea>
        </div>

        <!-- Botón -->
        <div class="text-right">
            <button type="submit"
                class="px-5 py-2 bg-blue-800 text-white rounded-lg shadow-md hover:bg-blue-700 transition">
                Asignar Mantenimiento
            </button>
        </div>
    </form>
</div>
