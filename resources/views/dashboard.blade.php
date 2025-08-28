<!-- resources/views/admin/dashboard.blade.php -->
<x-app-layout>
    <div class="flex h-screen bg-gray-100">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-700">Admin Panel</h2>
            </div>
            <nav class="mt-6">
                <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-gray-200">📊 Equipos </a>
                <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-gray-200">👥 Usuarios</a>
                <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-gray-200">📈 Reportes</a>
                <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-gray-200">⚙️ Configuración</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Content -->
            <main class="p-6 space-y-6">
                
                <div class="bg-white rounded-xl shadow-md p-6">
                    <livewire:mostrar-equipos />
                </div>
            </main>
        </div>
    </div>
</x-app-layout>

