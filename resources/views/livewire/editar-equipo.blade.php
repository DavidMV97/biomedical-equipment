<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='editarEquipo'>
    <div>
        <x-input-label for="nombre" :value="__('Nombre')" />
        <x-text-input id="nombre" class="block mt-1 w-full" type="text" wire:model="nombre" :value="old('nombre')"
            placeholder="Nombre del equipo" />
        <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="marca" :value="__('Marca')" />
        <x-text-input id="marca" class="block mt-1 w-full" type="text" wire:model="marca" :value="old('marca')"
            placeholder="Marca del equipo" />
        <x-input-error :messages="$errors->get('marca')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="modelo" :value="__('Modelo')" />
        <x-text-input id="modelo" class="block mt-1 w-full" type="text" wire:model="modelo" :value="old('modelo')"
            placeholder="Modelo del equipo" />
        <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="numeroSerie" :value="__('Número de Serie')" />
        <x-text-input id="numeroSerie" class="block mt-1 w-full" type="text" wire:model="numeroSerie"
            :value="old('numeroSerie')" placeholder="Número de serie del equipo" />
        <x-input-error :messages="$errors->get('numeroSerie')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <x-text-input id="categoria" class="block mt-1 w-full" type="text" wire:model="categoria" :value="old('categoria')"
            placeholder="Categoría del equipo" />
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ubicacion" :value="__('Ubicación')" />
        <x-text-input id="ubicacion" class="block mt-1 w-full" type="text" wire:model="ubicacion" :value="old('ubicacion')"
            placeholder="Ubicación física del equipo" />
        <x-input-error :messages="$errors->get('ubicacion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="fechaAdquisicion" :value="__('Fecha de Adquisición')" />
        <x-text-input id="fechaAdquisicion" class="block mt-1 w-full" type="date" wire:model="fechaAdquisicion"
            :value="old('fechaAdquisicion')" />
        <x-input-error :messages="$errors->get('fechaAdquisicion')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="estado" :value="__('Estado')" />
        <select id="estado" wire:model="estado"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option value="">Seleccione el estado</option>
            <option value="activo">Activo</option>
            <option value="mantenimiento">En Mantenimiento</option>
            <option value="baja">De Baja</option>
            <option value="reservado">Reservado</option>
        </select>
        <x-input-error :messages="$errors->get('estado')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="nuevaImagen" :value="__('Imagen')" />
        <x-text-input id="nuevaImagen" class="block mt-1 w-full" type="file" wire:model="nuevaImagen" accept="image/*" />
        
        <div class="my-5  w-80">
           
        <x-input-label :value="__('Imagen Actual')" />
            <img src="{{ asset('storage/equipo/' . $imagen) }}" alt="Imagen del equipo {{ $nombre }}">

        </div>
        <div class="my-5  w-80">
            @if ($nuevaImagen)
                Imagen Nueva:
                <img src="{{ $nuevaImagen->temporaryUrl() }}">
            @endif
        </div>

        <x-input-error :messages="$errors->get('nuevaImagen')" class="mt-2" />

    </div>

    <x-primary-button>
        Guardar Cambios
    </x-primary-button>
</form>
