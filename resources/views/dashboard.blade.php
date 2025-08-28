<!-- resources/views/admin/dashboard.blade.php -->
<x-app-layout>
    <div class="flex h-screen bg-gray-100">

        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-700">Admin Panel</h2>
            </div>
            <nav class="mt-6">
                <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-gray-200">📊 Dashboard</a>
                <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-gray-200">👥 Usuarios</a>
                <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-gray-200">📈 Reportes</a>
                <a href="#" class="block px-6 py-2 text-gray-600 hover:bg-gray-200">⚙️ Configuración</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Content -->
            <main class="p-6 space-y-6">

                <!-- Quick Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h3 class="text-gray-500">Usuarios Registrados</h3>
                        <p class="text-3xl font-bold text-gray-800">1,245</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h3 class="text-gray-500">Ingresos</h3>
                        <p class="text-3xl font-bold text-green-600">$12,430</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h3 class="text-gray-500">Reportes Generados</h3>
                        <p class="text-3xl font-bold text-blue-600">32</p>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-700 mb-4">Actividad Reciente</h3>
                    <ul class="space-y-3">
                        <li class="text-gray-600">👤 Nuevo usuario registrado: <span class="font-medium">Juan
                                Pérez</span></li>
                        <li class="text-gray-600">📊 Reporte generado por <span class="font-medium">Admin</span></li>
                        <li class="text-gray-600">⚙️ Configuración actualizada</li>
                    </ul>
                </div>

            </main>
        </div>
    </div>
</x-app-layout>

