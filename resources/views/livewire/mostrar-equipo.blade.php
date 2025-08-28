<div class="p-10">
    <div class="mb-5">
        <h3 class="text-3xl font-bold text-gray-800 my-3">
            Equipo: {{ $equipo->nombre }}
        </h3>
        <div class="md:grid md:grid-cols-2 bg-gray-50 my-8 p-4">
            <p class="font-bold text-sm uppercase text-gray-700 my-3">Marca:
                <span class="normal-case font-normal">{{ $equipo->marca }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-700 my-3">Modelo:
                <span class="normal-case font-normal">{{ $equipo->modelo }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-700 my-3">Numero de serie:
                <span class="normal-case font-normal">{{ $equipo->numeroSerie }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-700 my-3">Categoria:
                <span class="normal-case font-normal">{{ $equipo->categoria }}</span>
            </p>
             <p class="font-bold text-sm uppercase text-gray-700 my-3">Categoria:
                <span class="normal-case font-normal">{{ $equipo->ubicacion }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-700 my-3">Fecha Adquisición:
                <span class="normal-case font-normal">{{ $equipo->fechaAdquisicion }}</span>
            </p>
        </div>
    </div>

    {{-- <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2" >
            <img src="{{ asset('storage/equipo/' . $equipo->imagen) }}" alt="Imagen del equipo {{ $equipo->nombre }}">
        </div>
        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5" >Estado</h2>
            <p>{{$equipo->estado}}</p>
        </div>
    </div> --}}

</div>
