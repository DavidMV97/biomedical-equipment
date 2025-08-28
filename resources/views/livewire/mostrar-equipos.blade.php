<div class="bg-white overflow-hidden sm:rounded-lg">
    @forelse ($equipos as $equipo)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <a href="" class="text-xl font-bold">
                    {{ $equipo->nombre }}
                </a>
                <p class="text-sm text-gray-600 font-bold"> Marca:  {{ $equipo->marca }} </p>
                <p class="text-sm text-gray-500 capitalizes"> Estado: {{ $equipo->estado }} </p>
            </div>

            <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                <a href="{{ route('equipos.edit', $equipo->id) }}"
                    class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">Editar</a>
                <a href=""
                    class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">Eliminar</a>
            </div>
        </div>
    @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay equipos</p>
    @endforelse


    <div class="mt-10">
        {{ $equipos->links() }}
    </div>
</div>
